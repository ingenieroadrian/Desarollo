<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacturasResource\Pages;
use App\Filament\Resources\FacturasResource\RelationManagers;
use App\Models\Facturas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FacturasResource extends Resource
{
    protected static ?string $model = Facturas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\DatePicker::make('fecha_inicial')
                ->label('Fecha Inicial'),
            
            Forms\Components\DatePicker::make('fecha_vencimiento')
                ->label('Fecha de Vencimiento'),
    
            Forms\Components\TextInput::make('no_factura')
                ->label('Número de Factura'),
    
                Forms\Components\Select::make('type')
                ->placeholder('Seleccione una opcion')
                ->label('Estado')
                ->options([
                    'valor1' => 'Por pagar',
                    'valor2' => 'Legalizado',
                    'valor3' => 'Caja Menor',
                    'valor4' => 'Gastos',]),
    
            Forms\Components\Select::make('proveedores_id')
                ->placeholder('Seleccione una opcion')
                ->label('Proveedor')
                ->relationship('proveedores','name'),
    
            Forms\Components\TextInput::make('nit'),
    
            Forms\Components\Select::make('constructoras_id')
                ->placeholder('Seleccione una opcion')
                ->label('Constructora')
                ->relationship('constructoras', 'name'),
    
            Forms\Components\TextInput::make('concepto'),
    
            Forms\Components\TextInput::make('telefono'),
    
            Forms\Components\TextInput::make('prestamo_por')
                ->label('Préstamo Por'),
    
            Forms\Components\TextInput::make('valor_antes_de_iva')
                ->label('Valor Antes de IVA'),
    
            Forms\Components\TextInput::make('reteica')
                ->label('Reteica'),
    
            Forms\Components\TextInput::make('retefuente')
                ->label('ReteFuente'),
    
            Forms\Components\TextInput::make('amortizacion')
                ->label('Amortización'),
    
            Forms\Components\TextInput::make('retegarantia')
                ->label('ReteGarantia'),
    
            Forms\Components\TextInput::make('valor_a_pagar')
                ->label('Valor a Pagar'),
    
                Forms\Components\TextInput::make('abono1')
                ->label('Abono 1'),
    
            Forms\Components\DatePicker::make('fecha_abono1')
                ->label('Fecha Abono 1'),
    
            Forms\Components\TextInput::make('abono2')
                ->label('Abono 2'),
    
            Forms\Components\DatePicker::make('fecha_abono2')
                ->label('Fecha Abono 2'),
    
            Forms\Components\TextInput::make('abono3')
                ->label('Abono 3'),
    
            Forms\Components\DatePicker::make('fecha_abono3')
                ->label('Fecha Abono 3'),
    
            Forms\Components\TextInput::make('abono4')
                ->label('Abono 4'),
    
            Forms\Components\DatePicker::make('fecha_abono4')
                ->label('Fecha Abono 4'),
    
            Forms\Components\TextInput::make('abono5')
                ->label('Abono 5'),
    
            Forms\Components\DatePicker::make('fecha_abono5')
                ->label('Fecha Abono 5'),
    
            Forms\Components\TextInput::make('saldo')
                ->label('Saldo'),
    
            Forms\Components\DatePicker::make('fecha_transaccion')
                ->label('Fecha de Transacción'),
    
            Forms\Components\TextInput::make('pagar_por')
                ->label('Pagar Por'),
    
            Forms\Components\DatePicker::make('fecha_autorizacion_bancaria'),
    
            Forms\Components\TextInput::make('no_autorizacion')
                ->label('Número de Autorización'),
    
            Forms\Components\DatePicker::make('fecha_entrega_contabilidad')
                ->label('Fecha de Entrega de Contabilidad'),
    
            Forms\Components\DatePicker::make('fecha_para_contabilizacion')
                ->label('Fecha para Contabilización'),
    
                Forms\Components\Checkbox::make('vbo_soacha')
                ->label('VBO Soacha'),
    
            Forms\Components\TextInput::make('columna'),
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                //
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListFacturas::route('/'),
            'crear' => Pages\CreateFacturas::route('/create'),
            'editar' => Pages\EditFacturas::route('/{record}/edit'),
        ];
    }    
}
