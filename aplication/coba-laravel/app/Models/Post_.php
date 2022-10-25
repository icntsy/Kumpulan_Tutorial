<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama Ica",
            "slug" => "judul-pertama",
            "author" => "Maya",
            "body" => "llskadklldlalfa"

        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Popi",
            "body" => "llskadklldlalfa"

        ],
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }
        public static function find($slug) {
            $posts = static ::all();
            return $posts->firstWhere('slug', $slug);
        }
    }