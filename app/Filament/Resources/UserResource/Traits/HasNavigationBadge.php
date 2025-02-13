<?php

namespace App\Filament\Resources\UserResource\Traits;

use Illuminate\Support\Facades\Auth;

trait HasNavigationBadge
{
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('id', '!=', Auth::id())->count();
    } 
}
