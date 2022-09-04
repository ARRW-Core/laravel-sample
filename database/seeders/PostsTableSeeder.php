<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Post array with 10 unique posts with title, excerpt, body
        $posts = [
            [
                'title' => 'Title 1',
                'excerpt' => 'Excerpt 1',
                'body' => 'Body 1',
            ],
            [
                'title' => 'Title 2',
                'excerpt' => 'Excerpt 2',
                'body' => 'Body 2',
            ],
            [
                'title' => 'Title 3',
                'excerpt' => 'Excerpt 3',
                'body' => 'Body 3',
            ],
            [
                'title' => 'Title 4',
                'excerpt' => 'Excerpt 4',
                'body' => 'Body 4',
            ],
            [
                'title' => 'Title 5',
                'excerpt' => 'Excerpt 5',
                'body' => 'Body 5',
            ],
            [
                'title' => 'Title 6',
                'excerpt' => 'Excerpt 6',
                'body' => 'Body 6',
            ],
            [
                'title' => 'Title 7',
                'excerpt' => 'Excerpt 7',
                'body' => 'Body 7',
            ],
            [
                'title' => 'Title 8',
                'excerpt' => 'Excerpt 8',
                'body' => 'Body 8',
            ],
            [
                'title' => 'Title 9',
                'excerpt' => 'Excerpt 9',
                'body' => 'Body 9',
            ],
            [
                'title' => 'Title 10',
                'excerpt' => 'Excerpt 10',
                'body' => 'Body 10',
            ],
        ];
        //Insert posts
        foreach ($posts as $post) {
            Post::create($post);
        }

    }
}
