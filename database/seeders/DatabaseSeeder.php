<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'     => 'Test User',
            'email'    => 'test@example.com',
            'password' => Hash::make('password'),
        ]);


        Post::create([
            'blocks' => [
                [
                    'type' => 'innerBlocks',
                    'data' => [
                        'blocks' => [
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'type' => 'innerBlocks',
                    'data' => [
                        'blocks' => [
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'type' => 'innerBlocks',
                    'data' => [
                        'blocks' => [
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'type' => 'innerBlocks',
                    'data' => [
                        'blocks' => [
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'type' => 'innerBlocks',
                    'data' => [
                        'blocks' => [
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'type' => 'innerBlocks',
                    'data' => [
                        'blocks' => [
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ],
                            [
                                'type' => 'Banner',
                                'data' => [
                                    'has_media'   => false,
                                    'has_overlay' => false
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]);
    }
}
