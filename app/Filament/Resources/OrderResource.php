<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Order;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Events\OrderStatusChanged;
use Filament\Forms\Components\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OrderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrderResource\RelationManagers;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Boutique';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'En attente',
                        'processing' => 'Traitement',
                        'completed' => 'Terminé',
                        'canceled' => 'Annulé',
                    ])
                    ->required(),
                Forms\Components\Fieldset::make('user_id')
                    ->relationship('user')
                    ->label('Client')
                    ->schema([
                        Forms\Components\TextInput::make('name')->label('Nom')->disabled(),
                        Forms\Components\TextInput::make('email')->disabled(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.id')->searchable()->label('N ° de client'),
                Tables\Columns\TextColumn::make('user.name')->searchable()->label('Nom du client'),
                Tables\Columns\TextColumn::make('user.email')->searchable()->label('Email client')->sortable(),
                Tables\Columns\BadgeColumn::make('status')
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
                    ])
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')->suffix('GNF')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('Date d\'ajout')->sortable()->date('d M H:i'),
                Tables\Columns\TextColumn::make('updated_at')->label('Date de modif.')->sortable()->date('d M H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
