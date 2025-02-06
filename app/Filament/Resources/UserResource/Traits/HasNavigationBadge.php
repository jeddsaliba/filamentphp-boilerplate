<?php

namespace App\Filament\Resources\UserResource\Traits;

trait HasNavigationBadge
{
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    } 
}
