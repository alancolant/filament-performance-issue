<?php

namespace App\Filament\Resources\PostsOptimized\Pages;

use App\Filament\Resources\Posts\PostResource;
use App\Filament\Resources\PostsOptimized\PostsOptimizedResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePostOptimized extends CreateRecord
{
    protected static string $resource = PostsOptimizedResource::class;
}
