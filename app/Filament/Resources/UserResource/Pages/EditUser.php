<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ActionGroup::make([
                Actions\DeleteAction::make()
                    ->hidden(function (Model $record) {
                        return $record->getKey() == Auth::id();
                    }),
                Actions\ForceDeleteAction::make()
                    ->hidden(function (Model $record) {
                        return $record->getKey() == Auth::id();
                    }),
                Actions\RestoreAction::make()
                    ->hidden(function (Model $record) {
                        return $record->getKey() == Auth::id();
                    }),
            ]),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (empty($data['password'])) {
            unset($data['password']);
        }

        if (empty($data['password_confirmation'])) {
            unset($data['password_confirmation']);
        }
        return $data;
    }
}
