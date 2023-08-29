<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\OrderItem;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OrderItemResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrderItemResource\RelationManagers;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;

class OrderItemResource extends Resource
{
    protected static ?string $model = OrderItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationGroup = 'Boutique';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('product_id')
                    ->label('Information produit')
                    ->relationship('product')
                    ->schema([
                        Forms\Components\TextInput::make('name')->name('Nom')->disabled(),
                        //Forms\Components\TextInput::make('SKU')->disabled(),
                        Forms\Components\TextInput::make('quantity')->label('Quantité')->disabled(),
                        Forms\Components\TextInput::make('price')->label('Prix')->suffix('GNF')->disabled(),
                    ]),
                Forms\Components\Fieldset::make('order_id')
                    ->relationship('order')
                    ->label('Informations sur la commande')
                    ->schema([
                        Forms\Components\Fieldset::make('user_id')
                            ->label('Informations sur l\'acheteur')
                            ->relationship('user')
                            ->schema([
                                Forms\Components\TextInput::make('name')->label('Nom')->disabled(),
                                Forms\Components\TextInput::make('email')->disabled(),
                            ]),
                    ])
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('product.image')->label('Image')->searchable(),
                //Tables\Columns\TextColumn::make('product.SKU')->sortable(),
                Tables\Columns\TextColumn::make('product.name')->label('Nom du produit')->sortable(),
                Tables\Columns\TextColumn::make('quantity')->label('Quantité')->sortable(),
                Tables\Columns\BadgeColumn::make('order.status')
                    ->label('Statut de la commande')
                    ->enum([
                        'pending' => 'En attente',
                        'processing' => 'Traitement',
                        'completed' => 'Terminé',
                        'canceled' => 'Annulé',
                    ])
                    ->colors([
                        'secondary' => 'pending',
                        'warning' => 'processing',
                        'success' => 'completed',
                        'danger' => 'canceled',
                    ])->sortable(),
                Tables\Columns\TextColumn::make('price')->label('Prix')->suffix('GNF')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                FilamentExportBulkAction::make('export')->label('Exporter'),
            ])
            ->headerActions([
                FilamentExportHeaderAction::make('export')->label('Exporter')
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrderItems::route('/'),
            'create' => Pages\CreateOrderItem::route('/create'),
            'edit' => Pages\EditOrderItem::route('/{record}/edit'),
        ];
    }
}
