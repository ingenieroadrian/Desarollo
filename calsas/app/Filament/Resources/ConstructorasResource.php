<?php
 

namespace App\Filament\Resources;

use App\Filament\Resources\ConstructorasResource\Pages;
use App\Filament\Resources\ConstructorasResource\RelationManagers;
use App\Models\Constructoras;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConstructorasResource extends Resource
{
    protected static ?string $model = Constructoras::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            
            Forms\Components\TextInput::make('name')
            ->label('Nombre')
            ->placeholder('Escriba el Nombre'),
           
             Forms\Components\DatePicker::make('fecha_creacion')
           ->label('Fecha de Creación'),

            Forms\Components\TextInput::make('telefono')
            ->label('Teléfono'),

            Forms\Components\TextInput::make('correo')
            ->label('Email'),
            
            Forms\Components\TextInput::make('nit')
            ->label('NIT'),

        ]);
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('name')
                ->searchable(),
                
                Tables\Columns\TextColumn::make('telefono')
                ->searchable(),
           
                Tables\Columns\TextColumn::make('correo')
                ->searchable(),
        
                Tables\Columns\TextColumn::make('nit')
                ->searchable(),
          
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make('Borrar'),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make('Crear'),
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
            'index' => Pages\ListConstructoras::route('/'),
            'crear' => Pages\CreateConstructoras::route('/create'),
            'editar' => Pages\EditConstructoras::route('/{record}/edit'),
        ];
    }    
}
