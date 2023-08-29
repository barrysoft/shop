<?php

namespace App\Services;

use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoiceService {
    public function createInvoice($order) {
        $client = new Party([
            'name'          => 'SGI Industrie',
            'custom_fields' => [
                'seller'        => 'SGI Industrie',
                'phone'         => '+(224) 620393053/621207708',
                'email'         => 'sgiautomobiles@yahoo.fr',
            ],
        ]);

        $customer = new Party([
            'name'          => $order->user->name,
            'address'       => $order->user->billingDetails->billing_address,
            'code'          => '#00A'.$order->id,
            'custom_fields' => [
                'email' => $order->user->email,
                'phone'         => $order->user->billingDetails->phone,
                'order number' => '#'. $order->id ,
            ],
        ]);

        foreach ($order->orderItems as $item) {
            $items[] = (new InvoiceItem())->title($item->product->name)->pricePerUnit($item->price)->quantity($item->quantity);
        }

        $invoice = Invoice::make('Commande')
        // ability to include translated invoice status
        // in case it was paid
        ->status(__('invoices::invoice.due'))
        ->sequence(667)
        ->serialNumberFormat('{SEQUENCE}/{SERIES}')
        ->series('BIG')
            ->seller($client)
            ->buyer($customer)
            ->date($order->created_at)
            ->dateFormat('d/m/Y')
            ->payUntilDays(14)
            ->currencySymbol('FG')
            ->currencyCode('GNF')
            ->currencyFormat('{SYMBOL}{VALUE}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint(',')
            ->filename($client->name . '-' . $customer->name)
            ->addItems($items)
            ->logo(public_path('vendor/invoices/logo.png'))
            // You can additionally save generated invoice to configured disk
            ->save('public');

        $link = $invoice->url();
        // Then send email to party with link

        // And return invoice itself to browser or have a different view
        return $invoice;
    }
}
