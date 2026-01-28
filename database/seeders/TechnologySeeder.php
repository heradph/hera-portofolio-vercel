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
            ['name' => 'Wix', 'item_class' => 'fa-brands fa-wix'],
        ]);
    }
}
