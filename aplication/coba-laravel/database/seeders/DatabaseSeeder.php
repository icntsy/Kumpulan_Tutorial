<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         User::factory(3)->create();

        // User::create([
        //     'name' => 'Ica Natasya',
        //     'email' => 'icanatasya@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Natasya',
        //     'email' => 'natasya@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem officiis repellat dolore,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem officiis repellat dolore, aliquam nesciunt nihil! Labore, rem? Expedita error accusantium quod aliquid. Accusantium voluptas nostrum suscipit minus quod quo temporibus, aperiam nam aliquid tempore. Iste vero reiciendis optio sint nostrum eveniet voluptate unde a illum nesciunt nam laborum blanditiis nihil quaerat aperiam, doloremque suscipit! Impedit necessitatibus voluptas sed quibusdam quas adipisci illum, iusto architecto minima delectus repellendus modi iste nobis officiis reprehenderit vel nam soluta tenetur blanditiis dolorum repellat a? Blanditiis sed, quasi earum vel, consequuntur dicta temporibus nesciunt ullam beatae quis omnis assumenda praesentium, necessitatibus harum. Exercitationem, quisquam. Nobis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem officiis repellat dolore,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem officiis repellat dolore, aliquam nesciunt nihil! Labore, rem? Expedita error accusantium quod aliquid. Accusantium voluptas nostrum suscipit minus quod quo temporibus, aperiam nam aliquid tempore. Iste vero reiciendis optio sint nostrum eveniet voluptate unde a illum nesciunt nam laborum blanditiis nihil quaerat aperiam, doloremque suscipit! Impedit necessitatibus voluptas sed quibusdam quas adipisci illum, iusto architecto minima delectus repellendus modi iste nobis officiis reprehenderit vel nam soluta tenetur blanditiis dolorum repellat a? Blanditiis sed, quasi earum vel, consequuntur dicta temporibus nesciunt ullam beatae quis omnis assumenda praesentium, necessitatibus harum. Exercitationem, quisquam. Nobis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Tiga',
        //     'slug' => 'judul-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem officiis repellat dolore,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem officiis repellat dolore, aliquam nesciunt nihil! Labore, rem? Expedita error accusantium quod aliquid. Accusantium voluptas nostrum suscipit minus quod quo temporibus, aperiam nam aliquid tempore. Iste vero reiciendis optio sint nostrum eveniet voluptate unde a illum nesciunt nam laborum blanditiis nihil quaerat aperiam, doloremque suscipit! Impedit necessitatibus voluptas sed quibusdam quas adipisci illum, iusto architecto minima delectus repellendus modi iste nobis officiis reprehenderit vel nam soluta tenetur blanditiis dolorum repellat a? Blanditiis sed, quasi earum vel, consequuntur dicta temporibus nesciunt ullam beatae quis omnis assumenda praesentium, necessitatibus harum. Exercitationem, quisquam. Nobis?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
