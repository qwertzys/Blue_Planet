<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Rafael Gani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur doloremque qui et suscipit! Eum voluptatum omnis architecto reprehenderit aperiam ipsum voluptatem est libero tenetur, modi nesciunt maiores perspiciatis id ex sit fugit vero reiciendis illum debitis cum animi, culpa adipisci. Dicta reiciendis temporibus in eos accusantium illo eaque aspernatur iusto distinctio. Repellat cum, reprehenderit, eveniet accusamus harum doloribus necessitatibus hic, recusandae quod est nobis. Porro, doloremque illo. Eveniet exercitationem quibusdam, magnam accusantium impedit possimus minima nesciunt doloremque, necessitatibus repellat at"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Max Verstappen",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, amet molestias, et quibusdam quae itaque dolore laboriosam distinctio ad minima nisi ducimus, dolores odit. Mollitia nulla a, voluptatum non, nisi, assumenda iusto amet iste eos modi repellat dolorem! Hic repellendus facilis, optio est ipsam maxime quibusdam esse sequi sunt exercitationem dolorem necessitatibus similique dolores commodi blanditiis dolorum quidem, tempore voluptate consequuntur sint. Ea, hic tenetur! Qui, nobis fuga neque odit quod minus cumque enim voluptate provident cupiditate saepe. Ad ullam est quibusdam iste dolorum, officiis temporibus nesciunt ratione optio deleniti voluptatum dolorem, vel numquam officia blanditiis, nostrum saepe illum adipisci!"
        ],
    ];

    public static function all(){
        return collect (self::$blog_posts);
    }

    public static function find($slug) {
        $slug = trim($slug); // Remove any extra whitespace around the slug
        $posts = static::all();
    
        return $posts->firstWhere('slug', $slug);
    }    
}
