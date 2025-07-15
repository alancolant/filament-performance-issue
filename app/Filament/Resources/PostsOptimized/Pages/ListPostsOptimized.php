<?php

namespace App\Filament\Resources\PostsOptimized\Pages;

use App\Filament\Resources\Posts\PostResource;
use App\Filament\Resources\PostsOptimized\PostsOptimizedResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPostsOptimized extends ListRecords
{
    protected static string $resource = PostsOptimizedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
