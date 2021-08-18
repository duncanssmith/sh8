<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::truncate();
        Category::truncate();
        Post::truncate();
        Work::truncate();

//        User::factory(1)->create();

        Category::create([
            'name' => 'Painting',
            'slug' => 'painting'
        ]);

        Category::create([
            'name' => 'Drawing',
            'slug' => 'drawing'
        ]);

        Category::create([
            'name' => 'Printmaking',
            'slug' => 'printmaking'
        ]);

        Post::create([
            'title' => 'First post',
            'slug' => 'first-post',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras euismod ligula et eros fringilla, eu iaculis mauris ultricies. Nam sodales gravida dictum. Proin in molestie odio. Aliquam luctus et justo consequat elementum. Cras id eleifend lorem. Nam euismod, est at tempus dignissim, ipsum nunc viverra mi, ultricies commodo nisi erat eget libero. Praesent magna lectus, varius vestibulum vehicula sed, mattis at quam. Cras bibendum metus id nulla maximus, eu lacinia ex molestie. Fusce urna nulla, scelerisque sit amet egestas in, tincidunt vel lorem. In porttitor eget neque vel varius. Mauris at euismod sapien. Vivamus consectetur, neque eget posuere blandit, nibh magna convallis dui, suscipit mattis enim est eu augue. Maecenas eget lobortis dui. Nullam metus sem, venenatis et tristique et, vulputate quis lorem. Cras sagittis justo ut justo imperdiet aliquam. Sed eu malesuada mi.',
            'author' => 'Pliny the Elder',
            'year' => '2021',
            'description' => 'A first post example',
            'publication' => 'The Financial Times',
            'publication_date' => '2021-08-16'
        ]);

        Post::create([
            'title' => 'Second post',
            'slug' => 'second-post',
            'body' => 'Suspendisse nec lectus dapibus, dignissim nunc a, cursus nulla. Integer elementum feugiat nisi sit amet elementum. Morbi porta finibus aliquet. Sed vel dolor ac mauris maximus ornare vitae id mi. Donec pellentesque luctus est, vitae tempus urna cursus in. Nulla facilisi. Phasellus et hendrerit turpis, tempus tincidunt lectus. Sed consequat dolor augue, euismod aliquet quam venenatis quis. Praesent elementum dolor lacinia nulla pretium tincidunt. Ut fermentum lacus eu ligula sagittis eleifend. Maecenas tincidunt quis elit vel pharetra.',
            'author' => 'Catullus',
            'year' => '2021',
            'description' => 'A second post example',
            'publication' => 'Pravda',
            'publication_date' => '2021-08-16'
        ]);

        Post::create([
            'title' => 'Third post',
            'slug' => 'third-post',
            'body' => 'Praesent volutpat velit porta ante iaculis fermentum. Morbi odio turpis, maximus a rutrum non, facilisis at magna. Integer sed posuere orci. Sed posuere massa mi, vitae eleifend nibh tristique vel. Mauris sollicitudin congue tortor, sit amet placerat elit facilisis vitae. Etiam ut luctus ligula, vitae ullamcorper diam. Integer eget nisl a ligula aliquet pharetra ac a lorem. Duis venenatis fringilla orci, ut fringilla orci bibendum pulvinar. Duis volutpat neque nec tellus varius, sed ultricies justo venenatis. Aliquam ut mauris vestibulum, rhoncus sapien laoreet, maximus libero. Integer facilisis tempus ante eu efficitur. Praesent at quam quis velit pharetra rhoncus non ut odio. Phasellus placerat ex a ligula fermentum, id posuere quam ultricies. Ut tempus lorem sodales vestibulum tempor. Nullam sed mi nisi.',
            'author' => 'Duncan Smith',
            'year' => '2021',
            'description' => 'A third post example',
            'publication' => 'The New Yorker',
            'publication_date' => '2021-08-16'
        ]);

        Post::create([
            'title' => 'Fourth post',
            'slug' => 'fourth-post',
            'body' => 'Praesent ipsum sapien, dignissim tincidunt ipsum eu, pellentesque pulvinar ante. Cras porttitor lacus dui, vel faucibus diam pretium nec. Aenean venenatis id quam sit amet faucibus. Sed eleifend eros at nisl porta placerat. Ut vestibulum dolor in metus iaculis, id lacinia mauris feugiat. Quisque ultricies nulla vitae dictum aliquet. Integer pharetra sem sed velit luctus mollis. Aenean sodales egestas varius.',
            'author' => 'Duncan Smith',
            'year' => '2021',
            'description' => 'A fourth post example',
            'publication' => 'The Economist',
            'publication_date' => '2021-08-16'
        ]);

        Work::create([
            'title' => 'Blue sea',
            'slug' => 'blue-sea',
            'media' => 'Oil on canvas',
            'dimensions' => '10 x 20 in',
            'work_date' => '2020-03-14'
        ]);

        Work::create([
            'title' => 'Blue ocean',
            'slug' => 'blue-ocean',
            'media' => 'Oil on canvas',
            'dimensions' => '10 x 20 in',
            'work_date' => '2020-03-14'
        ]);

        Work::create([
            'title' => 'Blue sky',
            'slug' => 'blue-sky',
            'media' => 'Oil on canvas',
            'dimensions' => '10 x 20 in',
            'work_date' => '2020-03-14'
        ]);

        Work::create([
            'title' => 'Blue horse',
            'slug' => 'blue-horse',
            'media' => 'Oil on canvas',
            'dimensions' => '10 x 20 in',
            'work_date' => '2020-03-14'
        ]);

        Work::create([
            'title' => 'Green sea',
            'slug' => 'green-sea',
            'media' => 'Oil on canvas',
            'dimensions' => '10 x 20 in',
            'work_date' => '2020-03-14'
        ]);

        Work::create([
            'title' => 'Green forest',
            'slug' => 'green-forest',
            'media' => 'Oil on canvas',
            'dimensions' => '10 x 20 in',
            'work_date' => '2020-03-14'
        ]);

    }
}
