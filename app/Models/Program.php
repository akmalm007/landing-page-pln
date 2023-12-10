<?php

namespace App\Models;



class Program
{
    private static $program_posts = [
        [
            "title" => "LDPIV",
            "slug" => "ldpiv",
            "kompetensi" => "Untuk mengembangkan Leadership pada Pegawai",
            "detail" => "Lorem ipsum dolor sit amet, officia excepteur ex fugiat reprehenderit enim labore culpa sint ad nisi Lorem pariatur mollit ex esse exercitation amet. Nisi anim cupidatat excepteur officia. Reprehenderit nostrud nostrud ipsum Lorem est aliquip amet voluptate voluptate dolor minim nulla est proident. Nostrud officia pariatur ut officia. Sit irure elit esse ea nulla sunt ex occaecat reprehenderit commodo officia dolor Lorem duis laboris cupidatat officia voluptate. Culpa proident adipisicing id nulla nisi laboris ex in Lorem sunt duis officia eiusmod. Aliqua reprehenderit commodo ex non excepteur duis sunt velit enim. Voluptate laboris sint cupidatat ullamco ut ea consectetur et est culpa et culpa duis."
        ],
        [
            "title" => "LDPIII",
            "slug" => "ldpiii",
            "kompetensi" => "Untuk mengembangkan Leadership pada Pegawai",
            "detail" => "Lorem ipsum dolor sit amet, officia excepteur ex fugiat reprehenderit enim labore culpa sint ad nisi Lorem pariatur mollit ex esse exercitation amet. Nisi anim cupidatat excepteur officia. Reprehenderit nostrud nostrud ipsum Lorem est aliquip amet voluptate voluptate dolor minim nulla est proident. Nostrud officia pariatur ut officia. Sit irure elit esse ea nulla sunt ex occaecat reprehenderit commodo officia dolor Lorem duis laboris cupidatat officia voluptate. Culpa proident adipisicing id nulla nisi laboris ex in Lorem sunt duis officia eiusmod. Aliqua reprehenderit commodo ex non excepteur duis sunt velit enim. Voluptate laboris sint cupidatat ullamco ut ea consectetur et est culpa et culpa duis."
        ],
    ];

    public static function all()
    {
        return collect(self::$program_posts);
    }

    public static function find($slug)
    {
        $signature = static::all();
        // $sig = [];
        // foreach ($signature as $value) {
        //     if ($value["slug"] === $slug) {
        //         $sig = $value;
        //     }
        // }
        return $signature->firstWhere('slug', $slug);
    }
}
