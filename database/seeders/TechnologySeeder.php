<?php

namespace Database\Seeders;

use App\Models\Technologies;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::insert([
            ['name' => 'Laravel', 'item_class' => 'fa-brands fa-laravel'],
            ['name' => 'PHP', 'item_class' => 'fa-brands fa-php'],
            ['name' => 'CSS3', 'item_class' => 'fa-brands fa-css3-alt'],
            ['name' => 'JS', 'item_class' => 'fa-brands fa-square-js'],
            ['name' => 'React', 'item_class' => 'fa-brands fa-react'],
            ['name' => 'Node', 'item_class' => 'fa-brands fa-node-js'],
            ['name' => 'Git', 'item_class' => 'fa-brands fa-git-alt'],
            ['name' => 'Bootstrap', 'item_class' => 'fa-brands fa-bootstrap'],
            ['name' => 'Java', 'item_class' => 'fa-brands fa-java'],
            ['name' => 'Docker', 'item_class' => 'fa-brands fa-docker'],
            ['name' => 'Figma', 'item_class' => 'fa-brands fa-figma'],
            ['name' => 'Database', 'item_class' => 'fa-solid fa-database'],
            ['name' => 'Nextjs', 'item_class' => '<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Next.js</title><path d="M18.665 21.978C16.758 23.255 14.465 24 12 24 5.377 24 0 18.623 0 12S5.377 0 12 0s12 5.377 12 12c0 3.583-1.574 6.801-4.067 9.001L9.219 7.2H7.2v9.596h1.615V9.251l9.85 12.727Zm-3.332-8.533 1.6 2.061V7.2h-1.6v6.245Z"/></svg>'],
            ['name' => 'Supabase', 'item_class' => '<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Supabase</title><path d="M11.9 1.036c-.015-.986-1.26-1.41-1.874-.637L.764 12.05C-.33 13.427.65 15.455 2.409 15.455h9.579l.113 7.51c.014.985 1.259 1.408 1.873.636l9.262-11.653c1.093-1.375.113-3.403-1.645-3.403h-9.642z"/></svg>'],

            
        ]);
    }
}
