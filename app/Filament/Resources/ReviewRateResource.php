<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewRateResource\Pages;
use App\Models\ReviewRate;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\Action;
use Filament\Forms\Form;
use Filament\Tables\Table;

class ReviewRateResource extends Resource
{
    protected static ?string $model = ReviewRate::class;
    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Select::make('holiday_package_id')
                    ->relationship('holidayPackage', 'name')
                    ->required(),
                Select::make('rating')
                    ->options([
                        1 => '1',
                        2 => '2',
                        3 => '3',
                        4 => '4',
                        5 => '5',
                    ])
                    ->required()
                    ->label('Rating')
                    ->placeholder('Select a rating'),
                Textarea::make('comment')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('user.name')->label('User')->sortable()->searchable(),
                TextColumn::make('holidayPackage.name')->label('Holiday Package')->sortable()->searchable(),
                TextColumn::make('rating')->sortable(),
                TextColumn::make('comment')->limit(50),
                TextColumn::make('created_at')->dateTime()->sortable(),
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->actions([
                EditAction::make()->icon('heroicon-o-pencil'),
                DeleteAction::make()->icon('heroicon-o-trash'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReviewRates::route('/'),
            'create' => Pages\CreateReviewRate::route('/create'),
            'edit' => Pages\EditReviewRate::route('/{record}/edit'),
            'view' => Pages\ViewReviewRate::route('/{record}'),
        ];
    }
}