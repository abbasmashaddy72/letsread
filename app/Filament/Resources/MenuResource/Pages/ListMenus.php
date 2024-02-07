<?php

namespace App\Filament\Resources\MenuResource\Pages;

use Filament\Actions;
use App\Filament\Resources\MenuResource;
use Filament\Resources\Pages\ListRecords;

class ListMenus extends ListRecords
{
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
