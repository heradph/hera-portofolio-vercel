<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategorySeeder::class, UserSeeder::class, ImagesSeeder::class, TechnologySeeder::class, ProjectSeeder::class]);
        Post::factory(15)->recycle([
            Category::all(),
            User::all() 
            ])->create();

        Project::all();



        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        
        // User::create([
        //     'name' => 'Khaliq Akbar',
        //     'username' => 'khaliqakbar',
        //     'email' => 'khaliqakb@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Perjalanan Kuliah Informatika di UPN Veteran Jakarta',
        //     'author_id' => '1',
        //     'category_id' => '1',
        //     'slug' => 'kuliah-informatika-upn-veteran-jakarta',
        //     'body' => 'Menempuh pendidikan di UPN Veteran Jakarta dalam bidang Informatika merupakan perjalanan yang penuh tantangan dan pengalaman berharga. Program studi ini tidak hanya mengajarkan teori dasar mengenai pemrograman dan sistem komputer, tetapi juga mendorong mahasiswa untuk mengembangkan keterampilan praktis dalam pengembangan perangkat lunak, jaringan komputer, dan kecerdasan buatan.
            
        //     Selama perkuliahan, saya telah mempelajari berbagai bahasa pemrograman seperti Python, Java, dan JavaScript. Mata kuliah yang saya ambil juga mencakup algoritma dan struktur data, basis data, serta rekayasa perangkat lunak. Selain itu, saya juga belajar mengenai Internet of Things (IoT) dan implementasi teknologi terbaru di berbagai bidang industri.
            
        //     Dengan berbagai tugas proyek yang diberikan, saya semakin memahami pentingnya kerja tim, manajemen waktu, dan kemampuan problem-solving. Pengalaman ini menjadi bekal yang sangat berharga untuk karier saya di masa depan.'
        // ]);

        
        

    }
}
