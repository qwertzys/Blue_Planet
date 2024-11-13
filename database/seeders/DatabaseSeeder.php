<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        // User::create([
        //     'name'=> 'Valentinus Rafael Gani',
        //     'email' => 'valentinus.gani@binus.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name'=> 'Max Verstappen',
        //     'email' => 'max_vestappen33@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        Category::create([
            'name'=> 'Plastic Waste',
            'slug' => 'plastic-waste'
        ]);

        Category::create([
            'name'=> 'Sea Pollution',
            'slug' => 'sea-pollution'
        ]);

        Category::create([
            'name'=> 'Ocean Plastic',
            'slug' => 'ocean-plastic'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae repellendus enim nam, nobis harum, accusamus sit deserunt dolorum officiis iusto, repellat molestiae excepturi placeat laboriosam aliquid?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae repellendus enim nam, nobis harum, accusamus sit deserunt dolorum officiis iusto, repellat molestiae excepturi placeat laboriosam aliquid? At sapiente unde itaque eligendi explicabo exercitationem eum repellendus dolorum doloremque, dolores placeat praesentium perspiciatis architecto nostrum soluta maiores dolore eos debitis ab, vitae laudantium quam, eius facere ex. Velit a officiis magnam porro nostrum doloremque, modi saepe sunt minus. Unde soluta odio, dolore suscipit harum,</p> <p>expedita eveniet dignissimos, quas corporis nisi perspiciatis. Quisquam facilis eius ullam illum quaerat adipisci soluta, excepturi ipsam voluptates consequatur ducimus vero ad necessitatibus, eum quibusdam unde distinctio est dolor cum ut, dicta pariatur ipsum totam. Eaque quaerat, iusto voluptates, vero eum deserunt, tempore exercitationem illo reprehenderit dolore nulla alias laboriosam rerum? Perspiciatis alias aut mollitia doloribus vel architecto quo ea, non eveniet error maiores, maxime obcaecati nulla, debitis animi quis? Asperiores autem saepe ducimus vitae nemo corrupti.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae repellendus enim nam, nobis harum, accusamus sit deserunt dolorum officiis iusto, repellat molestiae excepturi placeat laboriosam aliquid?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae repellendus enim nam, nobis harum, accusamus sit deserunt dolorum officiis iusto, repellat molestiae excepturi placeat laboriosam aliquid? At sapiente unde itaque eligendi explicabo exercitationem eum repellendus dolorum doloremque, dolores placeat praesentium perspiciatis architecto nostrum soluta maiores dolore eos debitis ab, vitae laudantium quam, eius facere ex. Velit a officiis magnam porro nostrum doloremque, modi saepe sunt minus. Unde soluta odio, dolore suscipit harum,</p> <p>expedita eveniet dignissimos, quas corporis nisi perspiciatis. Quisquam facilis eius ullam illum quaerat adipisci soluta, excepturi ipsam voluptates consequatur ducimus vero ad necessitatibus, eum quibusdam unde distinctio est dolor cum ut, dicta pariatur ipsum totam. Eaque quaerat, iusto voluptates, vero eum deserunt, tempore exercitationem illo reprehenderit dolore nulla alias laboriosam rerum? Perspiciatis alias aut mollitia doloribus vel architecto quo ea, non eveniet error maiores, maxime obcaecati nulla, debitis animi quis? Asperiores autem saepe ducimus vitae nemo corrupti.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae repellendus enim nam, nobis harum, accusamus sit deserunt dolorum officiis iusto, repellat molestiae excepturi placeat laboriosam aliquid?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae repellendus enim nam, nobis harum, accusamus sit deserunt dolorum officiis iusto, repellat molestiae excepturi placeat laboriosam aliquid? At sapiente unde itaque eligendi explicabo exercitationem eum repellendus dolorum doloremque, dolores placeat praesentium perspiciatis architecto nostrum soluta maiores dolore eos debitis ab, vitae laudantium quam, eius facere ex. Velit a officiis magnam porro nostrum doloremque, modi saepe sunt minus. Unde soluta odio, dolore suscipit harum,</p> <p>expedita eveniet dignissimos, quas corporis nisi perspiciatis. Quisquam facilis eius ullam illum quaerat adipisci soluta, excepturi ipsam voluptates consequatur ducimus vero ad necessitatibus, eum quibusdam unde distinctio est dolor cum ut, dicta pariatur ipsum totam. Eaque quaerat, iusto voluptates, vero eum deserunt, tempore exercitationem illo reprehenderit dolore nulla alias laboriosam rerum? Perspiciatis alias aut mollitia doloribus vel architecto quo ea, non eveniet error maiores, maxime obcaecati nulla, debitis animi quis? Asperiores autem saepe ducimus vitae nemo corrupti.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae repellendus enim nam, nobis harum, accusamus sit deserunt dolorum officiis iusto, repellat molestiae excepturi placeat laboriosam aliquid?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt beatae repellendus enim nam, nobis harum, accusamus sit deserunt dolorum officiis iusto, repellat molestiae excepturi placeat laboriosam aliquid? At sapiente unde itaque eligendi explicabo exercitationem eum repellendus dolorum doloremque, dolores placeat praesentium perspiciatis architecto nostrum soluta maiores dolore eos debitis ab, vitae laudantium quam, eius facere ex. Velit a officiis magnam porro nostrum doloremque, modi saepe sunt minus. Unde soluta odio, dolore suscipit harum,</p> <p>expedita eveniet dignissimos, quas corporis nisi perspiciatis. Quisquam facilis eius ullam illum quaerat adipisci soluta, excepturi ipsam voluptates consequatur ducimus vero ad necessitatibus, eum quibusdam unde distinctio est dolor cum ut, dicta pariatur ipsum totam. Eaque quaerat, iusto voluptates, vero eum deserunt, tempore exercitationem illo reprehenderit dolore nulla alias laboriosam rerum? Perspiciatis alias aut mollitia doloribus vel architecto quo ea, non eveniet error maiores, maxime obcaecati nulla, debitis animi quis? Asperiores autem saepe ducimus vitae nemo corrupti.</p>'
        // ]);
    }
}
