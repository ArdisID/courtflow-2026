<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BookingResource\Pages;
use App\Models\Booking;
use App\Models\Court;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'Court Management';

    protected static ?string $navigationLabel = 'Bookings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('booking_code')
                    ->default(fn () => 'BK-' . now()->format('YmdHis'))
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                Select::make('customer_id')
                    ->relationship('customer', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('court_id')
                    ->relationship('court', 'name')
                    ->searchable()
                    ->preload()
                    ->live()
                    ->afterStateUpdated(function (Get $get, Set $set) {

                        $court = Court::find($get('court_id'));

                        if (! $court || ! $get('duration')) {
                            return;
                        }

                        $set(
                            'total_price',
                            $court->price_per_hour * $get('duration')
                        );
                    })
                    ->required(),

                DatePicker::make('booking_date')
                    ->required(),

                TimePicker::make('start_time')
                    ->seconds(false)
                    ->required(),

                TextInput::make('duration')
                    ->label('Duration (Hour)')
                    ->numeric()
                    ->minValue(1)
                    ->live()
                    ->afterStateUpdated(function (Get $get, Set $set) {

                        $court = Court::find($get('court_id'));

                        if (! $court || ! $get('duration')) {
                            return;
                        }

                        $set(
                            'total_price',
                            $court->price_per_hour * $get('duration')
                        );
                    })
                    ->required(),

                TextInput::make('total_price')
                    ->prefix('Rp')
                    ->numeric()
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('pending')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('booking_code')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('customer.name')
                    ->label('Customer')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('court.name')
                    ->label('Court')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('booking_date')
                    ->date()
                    ->sortable(),

                TextColumn::make('start_time')
                    ->sortable(),

                TextColumn::make('duration')
                    ->suffix(' Hour')
                    ->sortable(),

                TextColumn::make('total_price')
                    ->money('IDR')
                    ->sortable(),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'confirmed' => 'info',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                        default => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}