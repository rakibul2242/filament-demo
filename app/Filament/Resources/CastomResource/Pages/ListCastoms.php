<?php

namespace App\Filament\Resources\CastomResource\Pages;

use App\Filament\Resources\CastomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCastoms extends ListRecords
{
    protected static string $resource = CastomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
