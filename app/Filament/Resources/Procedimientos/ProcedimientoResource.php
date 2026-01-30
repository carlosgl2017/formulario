<?php

namespace App\Filament\Resources\Procedimientos;

use App\Filament\Resources\Procedimientos\Pages\CreateProcedimiento;
use App\Filament\Resources\Procedimientos\Pages\EditProcedimiento;
use App\Filament\Resources\Procedimientos\Pages\ListProcedimientos;
use App\Filament\Resources\Procedimientos\Schemas\ProcedimientoForm;
use App\Filament\Resources\Procedimientos\Tables\ProcedimientosTable;
use App\Models\Procedimiento;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProcedimientoResource extends Resource
{
    protected static ?string $model = Procedimiento::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'procedimiento';

    public static function form(Schema $schema): Schema
    {
        return ProcedimientoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProcedimientosTable::configure($table);
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
            'index' => ListProcedimientos::route('/'),
            'create' => CreateProcedimiento::route('/create'),
            'edit' => EditProcedimiento::route('/{record}/edit'),
        ];
    }
}
