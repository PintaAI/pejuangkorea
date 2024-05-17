<?php

namespace App\Filament\Resources\ZoomResource\Pages;

use App\Filament\Resources\ZoomResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageZooms extends ManageRecords
{
    protected static string $resource = ZoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
