<?php

namespace App\Filament\Resources\PostsOptimized\Pages;

use App\Filament\Resources\Posts\PostResource;
use App\Filament\Resources\PostsOptimized\PostsOptimizedResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPostOptimized extends EditRecord
{
    protected static string $resource = PostsOptimizedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
