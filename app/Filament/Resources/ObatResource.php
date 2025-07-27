<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObatResource\Pages;
use App\Filament\Resources\ObatResource\RelationManagers;
use App\Models\Obat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ObatResource extends Resource
{
    protected static ?string $model = Obat::class;


    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\Select::make('jenis_obat_id')
                    ->label('Jenis Obat')
                    ->relationship('jenisObat', 'nama')
                    ->required(),
                Forms\Components\Textarea::make('deskripsi'),
                Forms\Components\TextInput::make('stok')->numeric()->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Obat')
                    ->image()
                    ->directory('assets/obat')
                    ->disk('public')
                    ->visibility('public')
                    ->preserveFilenames()
                    ->moveFiles()
                    ->required(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama'),
                Tables\Columns\TextColumn::make('jenisObat.nama')->label('Jenis Obat'),
                Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi')->limit(30),
                Tables\Columns\TextColumn::make('stok')->label('Stok'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListObats::route('/'),
            'create' => Pages\CreateObat::route('/create'),
            'edit' => Pages\EditObat::route('/{record}/edit'),
        ];
    }
}
