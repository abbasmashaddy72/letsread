<?php

namespace App\Filament\Resources\MenuResource\Pages;

use Filament\Actions;
use App\Filament\Resources\MenuResource;
use Filament\Resources\Pages\ViewRecord;

class ViewMenu extends ViewRecord
{
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
