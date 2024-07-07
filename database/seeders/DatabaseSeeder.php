<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Listing::factory(5)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Listing::create(
        //     [
        //         'title'=>'Fullstack Web Developer',
        //         'tags'=>'web, laravel',
        //         'company'=>'InfoTech',
        //         'location'=>'Dhaka',
        //         'email'=>'example1@email.com',
        //         'website'=>'www.infotech.com',
        //         'description'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, eligendi?'

        //     ]
        // );
        // Listing::create(
        //     [
        //         'title'=>'Android Developer',
        //         'tags'=>'android, app',
        //         'company'=>'TechTune',
        //         'location'=>'Dhaka',
        //         'email'=>'example2@email.com',
        //         'website'=>'www.techtune.com',
        //         'description'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, eligendi?'

        //     ]
        // );
    }
}
