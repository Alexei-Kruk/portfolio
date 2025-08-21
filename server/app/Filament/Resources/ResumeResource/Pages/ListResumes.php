<?php

namespace App\Filament\Resources\ResumeResource\Pages;

use App\Filament\Resources\ResumeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;


use Illuminate\Database\Eloquent\Model;

class ListResumes extends ListRecords
{
    protected static string $resource = ResumeResource::class;

    public function mount(): void
    {
        parent::mount();

        $resume = \App\Models\Resume::first();
        if ($resume) {
            $this->redirect(static::$resource::getUrl('edit', ['record' => $resume]));
        } else {
            $this->redirect(static::$resource::getUrl('create'));
        }
    }

    // Оставляем на всякий случай, если понадобится header actions
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
