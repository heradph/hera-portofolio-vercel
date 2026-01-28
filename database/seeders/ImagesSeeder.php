<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::insert([
            ['name' => 'namcar1', 'image' => 'img/namcar.png'], //1
            ['name' => 'namcar2', 'image' => 'img/namcar1.png'],
            ['name' => 'namcar3', 'image' => 'img/namcar2.png'],
            ['name' => 'namcar4', 'image' => 'img/namcar3.png'],
            ['name' => 'namcar5', 'image' => 'img/namcar4.png'],
            ['name' => 'namcar6', 'image' => 'img/namcar5.png'],
            ['name' => 'namcar7', 'image' => 'img/namcar6.png'],
            ['name' => 'namcar8', 'image' => 'img/namcar7.png'],
            ['name' => 'namcar9', 'image' => 'img/namcar8.png'], //9
            ['name' => 'thebuncitmen1', 'image' => 'img/thebuncitmen.png'], //10
            ['name' => 'thebuncitmen2', 'image' => 'img/thebuncitmen1.png'],
            ['name' => 'thebuncitmen3', 'image' => 'img/thebuncitmen2.png'],
            ['name' => 'thebuncitmen4', 'image' => 'img/thebuncitmen3.png'],
            ['name' => 'thebuncitmen5', 'image' => 'img/thebuncitmen4.png'], //14
            ['name' => 'tokotamba1', 'image' => 'img/tokotamba.png'], //15
            ['name' => 'tokotamba2', 'image' => 'img/tokotamba1.png'],
            ['name' => 'tokotamba3', 'image' => 'img/tokotamba2.png'],
            ['name' => 'tokotamba4', 'image' => 'img/tokotamba3.png'], //18
            ['name' => 'allthingshub1', 'image' => 'img/allthingshub.png'], //19
            ['name' => 'allthingshub2', 'image' => 'img/allthingshub1.png'],
            ['name' => 'allthingshub3', 'image' => 'img/allthingshub2.png'],
            ['name' => 'allthingshub4', 'image' => 'img/allthingshub3.png'],
            ['name' => 'allthingshub5', 'image' => 'img/allthingshub4.png'],
            ['name' => 'allthingshub6', 'image' => 'img/allthingshub5.png'], 
            ['name' => 'allthingshub7', 'image' => 'img/allthingshub6.png'], 
            ['name' => 'allthingshub8', 'image' => 'img/allthingshub7.png'], 
            ['name' => 'allthingshub9', 'image' => 'img/allthingshub8.png'], 
            ['name' => 'allthingshub10', 'image' => 'img/allthingshub9.png'], 
            ['name' => 'allthingshub11', 'image' => 'img/allthingshub10.png'], 
            ['name' => 'allthingshub12', 'image' => 'img/allthingshub11.png'], //30
            ['name' => 'bukuku1', 'image' => 'img/bukuku.png'], //31
            ['name' => 'bukuku2', 'image' => 'img/bukuku1.png'],
            ['name' => 'bukuku3', 'image' => 'img/bukuku2.png'],
            ['name' => 'bukuku4', 'image' => 'img/bukuku3.png'],
            ['name' => 'bukuku5', 'image' => 'img/bukuku4.png'],
            ['name' => 'bukuku6', 'image' => 'img/bukuku5.png'],
            ['name' => 'bukuku7', 'image' => 'img/bukuku6.png'], 
            ['name' => 'bukuku8', 'image' => 'img/bukuku7.png'], 
            ['name' => 'bukuku9', 'image' => 'img/bukuku8.png'], //39
            ['name' => 'pedagora1', 'image' => 'img/pedagora.png'], //40
            ['name' => 'pedagora1', 'image' => 'img/pedagora1.png'], 
            ['name' => 'pedagora2', 'image' => 'img/pedagora2.png'],
            ['name' => 'pedagora3', 'image' => 'img/pedagora3.png'],
            ['name' => 'pedagora4', 'image' => 'img/pedagora4.png'],
            ['name' => 'pedagora5', 'image' => 'img/pedagora5.png'],
            ['name' => 'pedagora6', 'image' => 'img/pedagora6.png'], 
            ['name' => 'pedagora7', 'image' => 'img/pedagora7.png'], 
            ['name' => 'pedagora8', 'image' => 'img/pedagora8.png'], 
            ['name' => 'pedagora9', 'image' => 'img/pedagora9.png'], 
            ['name' => 'pedagora10', 'image' => 'img/pedagora10.png'], 
            ['name' => 'pedagora11', 'image' => 'img/pedagora11.png'], 
            ['name' => 'pedagora12', 'image' => 'img/pedagora12.png'], 
            ['name' => 'pedagora13', 'image' => 'img/pedagora13.png'], 
            ['name' => 'pedagora14', 'image' => 'img/pedagora14.png'], 
            ['name' => 'pedagora15', 'image' => 'img/pedagora15.png'], 
            ['name' => 'syafira', 'image' => 'img/syafira.png'], //56
            ['name' => 'syafira1', 'image' => 'img/syafira1.png'], 
            ['name' => 'syafira2', 'image' => 'img/syafira2.png'], 
            ['name' => 'syafira3', 'image' => 'img/syafira3.png'], 
            ['name' => 'syafira4', 'image' => 'img/syafira4.png'], 
            ['name' => 'syafira5', 'image' => 'img/syafira5.png'], 
            ['name' => 'syafira6', 'image' => 'img/syafira6.png'], 
            ['name' => 'syafira7', 'image' => 'img/syafira7.png'], 
            ['name' => 'syafira8', 'image' => 'img/syafira8.png'], //64
            ['name' => 'tokotamba5', 'image' => 'img/tokotamba4.png'], //65
            ['name' => 'dubailux1', 'image' => 'img/dubailux1.png'], 
            ['name' => 'dubailux2', 'image' => 'img/dubailux2.png'],
            ['name' => 'dubailux3', 'image' => 'img/dubailux3.png'],
            ['name' => 'dubailux4', 'image' => 'img/dubailux4.png'],
            ['name' => 'dubailux5', 'image' => 'img/dubailux5.png'],
            
            // ['name' => 'meds', 'image' => 'img/meds.png'], // 56
            // ['name' => 'meds1', 'image' => 'img/meds1.png'], 
            // ['name' => 'meds2', 'image' => 'img/meds2.png'], 
            // ['name' => 'meds3', 'image' => 'img/meds3.png'], 
            // ['name' => 'meds4', 'image' => 'img/meds4.png'], 
            // ['name' => 'meds5', 'image' => 'img/meds5.png'], 
            // ['name' => 'meds6', 'image' => 'img/meds6.png'],  //62
        ]);
    }
}
