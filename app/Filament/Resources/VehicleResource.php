<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Models\Vehicle;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class VehicleResource extends Resource
{
    protected static ?string $model = Vehicle::class;

    protected static ?string $slug = 'vehicles';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->disabled()
                    ->required()
                    ->unique(Vehicle::class, 'slug', fn($record) => $record),

                TextInput::make('brand'),

                TextInput::make('model'),

                TextInput::make('engine'),

                TextInput::make('price_per_day')
                    ->required(),

                TextInput::make('currency_id')
                    ->integer(),

                TextInput::make('quantity'),

                TextInput::make('status')
                    ->required(),

                TextInput::make('short_description'),

                TextInput::make('long_description'),

                TextInput::make('manual_or_auto'),

                TextInput::make('category_id')
                    ->integer(),

                TextInput::make('unique_number')
                    ->required(),

                TextInput::make('number_of_seats'),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->content(fn(?Vehicle $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->content(fn(?Vehicle $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('brand'),

                TextColumn::make('model'),

                TextColumn::make('engine'),

                TextColumn::make('price_per_day'),

                TextColumn::make('currency_id'),

                TextColumn::make('quantity'),

                TextColumn::make('status'),

                TextColumn::make('short_description'),

                TextColumn::make('long_description'),

                TextColumn::make('manual_or_auto'),

                TextColumn::make('category_id'),

                TextColumn::make('unique_number'),

                TextColumn::make('number_of_seats'),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'slug'];
    }
}
