<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryText;
use App\Models\CategoryWork;
use App\Models\Post;
use App\Models\Text;
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
        Text::truncate();
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

        Text::create([
            'title' => 'New Yorker Review',
            'slug' => 'first-text',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras euismod ligula et eros fringilla, eu iaculis mauris ultricies. Nam sodales gravida dictum. Proin in molestie odio. Aliquam luctus et justo consequat elementum. Cras id eleifend lorem. Nam euismod, est at tempus dignissim, ipsum nunc viverra mi, ultricies commodo nisi erat eget libero. Praesent magna lectus, varius vestibulum vehicula sed, mattis at quam. Cras bibendum metus id nulla maximus, eu lacinia ex molestie. Fusce urna nulla, scelerisque sit amet egestas in, tincidunt vel lorem. In porttitor eget neque vel varius. Mauris at euismod sapien. Vivamus consectetur, neque eget posuere blandit, nibh magna convallis dui, suscipit mattis enim est eu augue. Maecenas eget lobortis dui. Nullam metus sem, venenatis et tristique et, vulputate quis lorem. Cras sagittis justo ut justo imperdiet aliquam. Sed eu malesuada mi.',
            'author' => 'Roger Penrose',
            'year' => '2019',
            'description' => 'A review of exhibition at Flowers East, London',
            'publication' => 'The New Yorker',
            'publication_date' => '2019-04-03'
        ]);

        Text::create([
            'title' => 'Observer Colour Magazine Review',
            'slug' => 'observer-colour-magazine-review',
            'body' => 'Suspendisse nec lectus dapibus, dignissim nunc a, cursus nulla. Integer elementum feugiat nisi sit amet elementum. Morbi porta finibus aliquet. Sed vel dolor ac mauris maximus ornare vitae id mi. Donec pellentesque luctus est, vitae tempus urna cursus in. Nulla facilisi. Phasellus et hendrerit turpis, tempus tincidunt lectus. Sed consequat dolor augue, euismod aliquet quam venenatis quis. Praesent elementum dolor lacinia nulla pretium tincidunt. Ut fermentum lacus eu ligula sagittis eleifend. Maecenas tincidunt quis elit vel pharetra.',
            'author' => 'Jane Birkin',
            'year' => '2014',
            'description' => 'A review in the Observer',
            'publication' => 'The Observer',
            'publication_date' => '2014-09-23'
        ]);

        Text::create([
            'title' => 'ArtForum review',
            'slug' => 'artforum-review',
            'body' => 'Praesent volutpat velit porta ante iaculis fermentum. Morbi odio turpis, maximus a rutrum non, facilisis at magna. Integer sed posuere orci. Sed posuere massa mi, vitae eleifend nibh tristique vel. Mauris sollicitudin congue tortor, sit amet placerat elit facilisis vitae. Etiam ut luctus ligula, vitae ullamcorper diam. Integer eget nisl a ligula aliquet pharetra ac a lorem. Duis venenatis fringilla orci, ut fringilla orci bibendum pulvinar. Duis volutpat neque nec tellus varius, sed ultricies justo venenatis. Aliquam ut mauris vestibulum, rhoncus sapien laoreet, maximus libero. Integer facilisis tempus ante eu efficitur. Praesent at quam quis velit pharetra rhoncus non ut odio. Phasellus placerat ex a ligula fermentum, id posuere quam ultricies. Ut tempus lorem sodales vestibulum tempor. Nullam sed mi nisi.',
            'author' => 'Waldemar Janusczak',
            'year' => '2014',
            'description' => 'A review by Waldemar',
            'publication' => 'Art Forum',
            'publication_date' => '2014-02-27'
        ]);

        Text::create([
            'title' => 'Art In America review',
            'slug' => 'art-in-america-review',
            'body' => 'Praesent ipsum sapien, dignissim tincidunt ipsum eu, pellentesque pulvinar ante. Cras porttitor lacus dui, vel faucibus diam pretium nec. Aenean venenatis id quam sit amet faucibus. Sed eleifend eros at nisl porta placerat. Ut vestibulum dolor in metus iaculis, id lacinia mauris feugiat. Quisque ultricies nulla vitae dictum aliquet. Integer pharetra sem sed velit luctus mollis. Aenean sodales egestas varius.',
            'author' => 'Alan Crockett',
            'year' => '2009',
            'description' => 'Review in Art in America',
            'publication' => 'Art in America',
            'publication_date' => '2009-06-15'
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

        Post::create([
            'title' => 'Ambient feelings',
            'slug' => 'ambient-feelings',
            'body' => 'I want to write a post here, thanks!',
            'author' => 'Duncan Smith',
        ]);

        Post::create([
            'title' => 'Greenhouse fingers',
            'slug' => 'greenhouse-fingers',
            'body' => 'I want to write another post here, thanks!',
            'author' => 'Duncan Smith',
        ]);

        Post::create([
            'title' => 'Deep blue water',
            'slug' => 'deep-blue-water',
            'body' => 'I want to write a third post here, thanks!',
            'author' => 'Duncan Smith',
        ]);

        CategoryText::create([
            'category_id' => 1,
            'text_id' => 2,
            'order' => 1,
        ]);

        CategoryText::create([
            'category_id' => 1,
            'text_id' => 3,
            'order' => 2,
        ]);

        CategoryText::create([
            'category_id' => 2,
            'text_id' => 2,
            'order' => 3,
        ]);

        CategoryText::create([
            'category_id' => 3,
            'text_id' => 1,
            'order' => 4,
        ]);

        CategoryWork::create([
            'category_id' => 1,
            'work_id' => 1,
            'order' => 1,
        ]);

        CategoryWork::create([
            'category_id' => 1,
            'work_id' => 2,
            'order' => 2,
        ]);

        CategoryWork::create([
            'category_id' => 2,
            'work_id' => 3,
            'order' => 3,
        ]);

        CategoryWork::create([
            'category_id' => 2,
            'work_id' => 4,
            'order' => 4,
        ]);

        CategoryWork::create([
            'category_id' => 3,
            'work_id' => 4,
            'order' => 5,
        ]);

        CategoryWork::create([
            'category_id' => 3,
            'work_id' => 1,
            'order' => 6,
        ]);

    }
}
