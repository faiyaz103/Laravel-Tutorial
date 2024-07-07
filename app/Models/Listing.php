<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public static function getall(){
        return [
                [
                    'id'=>1,
                    'title'=>'Listing One',
                    'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, commodi.'
                ],
                [
                    'id'=>2,
                    'title'=>'Listing Two',
                    'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, commodi.'
                ]
                ];
    }

    public static function find($id){
        $listings=self::getall();

        foreach($listings as $listing) {
            if($listing['id']==$id){
                return $listing;
            }
        }
    }
}
