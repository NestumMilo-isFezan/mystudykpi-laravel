<?php

namespace App\Models;

class Challenge
{
    private static $challenge = [
            [
                "id" => 1,
                "sem" => 1,
                "year" => "2021/2022",
                "challenge" => "Single",
                "plan" => "Cari waifu",
                "remark" => "Tercapai",
                "imgpath" => "upload/noa.jpg"
            ],
            [
                "id" => 2,
                "sem" => 2,
                "year" => "2022/2023",
                "challenge" => "Bosan",
                "plan" => "Pergi Camping",
                "remark" => "Best",
                "imgpath" => "upload/camp.jpg"
            ]
        ];

    public static function getAll(){
        return collect(self::$challenge);
    }

    public static function findInfo($id){
        $lists = static::getAll();

        // Collection
        return $lists->firstWhere("id", $id);
    }
}

// Challenge::create([
//     "id" => 2,
//     "sem" => 2,
//     "year" => "2022/2023",
//     "challenge" => "Bosan",
//     "plan" => "Pergi Camping",
//     "remark" => "Best",
//     "imgpath" => "upload/camp.jpg"
// ])

