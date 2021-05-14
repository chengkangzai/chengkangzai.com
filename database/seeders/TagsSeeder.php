<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Spatie\Tags\Tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::findOrCreate([
            'Laravel',
            'Angular',
            'Ionic',
            'Capacitor',
            'Firebase',
            'PHP',
        ]);

        Post::inRandomOrder()->first()->attachTag(Tag::findFromString('Laravel'));
    }
}
