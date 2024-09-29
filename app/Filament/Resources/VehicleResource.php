<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Models\Vehicle;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
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
                Section::make('Vehicle Details')
                    ->description('Add the vehicle details.')
                    ->columns(3)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->reactive()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->unique(Vehicle::class, 'slug', fn($record) => $record),

                        TextInput::make('brand'),

                        TextInput::make('model'),

                        TextInput::make('engine'),

                        TextInput::make('price_per_day')
                            ->type('number')
                            ->required(),

                        TextInput::make('currency_id')
                            ->integer(),

                        TextInput::make('quantity'),

                        Radio::make('type')
                            ->label("Vehicle is active or in-active")
                            ->options([
                                "1" => 'Active',
                                "0" => 'In Active',
                            ])
                            ->inline(),

                        Radio::make('manual_or_auto')
                            ->label("Manual or Auto")
                            ->options([
                                "auto" => 'Auto',
                                "manual" => 'Manual',
                            ])
                            ->inline(),

                        TextInput::make('category_id')
                            ->integer(),

                        TextInput::make('unique_number')
                            ->required(),

                        TextInput::make('number_of_seats')
                        ->type('number'),

                        Toggle::make('status')
                            ->label("Vehicle is active or in-active")
                            ->default('success')
                            ->onColor('success')
                            ->offColor('danger'),
                    ]),

                Section::make('Description')
                    ->description('Add a short and long description for the vehicle.')
                    ->schema([
                        Textarea::make('short_description')
                            ->columnSpanFull(),

                        RichEditor::make('long_description')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])->columnSpanFull(),
                    ]),

                Section::make('Media')
                    ->description('Upload images and videos for the vehicle.')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('thumbnail')
                            ->conversion('thumb'),

                        SpatieMediaLibraryFileUpload::make('gallery')
                            ->multiple()
                            ->collection('gallery'),
                    ]),

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
