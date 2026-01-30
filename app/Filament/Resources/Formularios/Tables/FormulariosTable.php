<?php

namespace App\Filament\Resources\Formularios\Tables;

use App\Models\Formulario;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class FormulariosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fecha')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('responsable.name')
                    ->searchable(),
                TextColumn::make('autorizador.name')
                    ->searchable(),
                TextColumn::make('procedimiento.nombre')
                    ->searchable(),
                TextColumn::make('estado')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                Action::make('reimprimir')
                    ->label('Reimprimir')
                    ->icon('heroicon-o-printer')
                    ->color('gray')
                    // Asegúrate de que $record sea tratado como Formulario
                    ->url(fn(Formulario $record) => route('formulario.pdf', $record))
                    ->openUrlInNewTab(),

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
