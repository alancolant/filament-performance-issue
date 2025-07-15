<?php

namespace App\Filament\Resources\PostsOptimized;

use App\Filament\Resources\Posts\Pages\CreatePost;
use App\Filament\Resources\Posts\Pages\EditPost;
use App\Filament\Resources\Posts\Pages\ListPosts;
use App\Filament\Resources\PostsOptimized\Pages\CreatePostOptimized;
use App\Filament\Resources\PostsOptimized\Pages\EditPostOptimized;
use App\Filament\Resources\PostsOptimized\Pages\ListPostsOptimized;
use App\Filament\Utilities\GetOptimized;
use App\Models\Post;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use PhpParser\Node\Stmt\Block;

class PostsOptimizedResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $label = "Posts optimized";
    protected static ?string $slug = "posts-optimized";
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Builder::make('blocks')->cloneable()->blocks([
                Builder\Block::make('innerBlocks')->schema([
                    Builder::make('blocks')->cloneable()->blocks([
                        Builder\Block::make('Banner')->schema([
                            // Media
                            Toggle::make('has_media')
                                ->label(__('Has Media?'))
                                ->default(false)
                                ->inline()->inlineLabel()
                                ->live(),

                            Section::make(__('Media'))
                                ->compact()->collapsible()
                                ->icon('heroicon-m-link')
                                ->visible(fn(Section $field) => (new GetOptimized($field))('has_media') === true)
                                ->schema([
                                    ToggleButtons::make("type")->label(__('Type'))->options([
                                        'image' => __('Image'),
                                        'video' => __('Video'),
                                    ])
                                ]),

                            Toggle::make('has_overlay')
                                ->label(__('Has Overlay?'))
                                ->default(false)
                                ->inline()->inlineLabel()
                                ->live(),
                            Section::make(__('Overlay'))
                                ->compact()->collapsible()
                                ->icon('heroicon-m-code-bracket-square')
                                ->visible(fn(Section $field) => (bool)(new GetOptimized($field))('has_overlay') === true)
                                ->schema([
                                    TextInput::make("overlay_opacity_percent")->label(__('Opacity'))
                                        ->numeric()->suffix('%')->step(5)->minValue(0)->maxValue(100)->extraInputAttributes([
                                            'min' => '0',
                                            'max' => '100',
                                        ])->default(30)->required()
                                ]),
                        ])
                    ])
                ]),

            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPostsOptimized::route('/'),
            'create' => CreatePostOptimized::route('/create'),
            'edit' => EditPostOptimized::route('/{record}/edit'),
        ];
    }
}
