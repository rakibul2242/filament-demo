<?php

namespace App\Filament\Resources\CastomResource\Pages;

use App\Filament\Resources\CastomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCastom extends EditRecord
{
    protected static string $resource = CastomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
