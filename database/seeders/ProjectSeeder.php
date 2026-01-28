<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the Database seeds.
     */
    public function run(): void
    {
    $project1 = Project::create([
        'title' => 'NamCar',
        'slug' => 'nam-car',
        'thumbnail' => 'img/namcarlogo.png',
        'description' => 'NamCar is designed as a loan vehicle management by recording and managing vehicle data and its borrowers. This system helps administration with neat and easily accessible records. Developed with Vanilla php for Backend, CSS Bootstrap for Frontend, and mySQL for Database',
        'github' => 'https://github.com/heradph/nam_car'    
    ]);

    $project2 = Project::create([
        'title' => 'TheBuncitmen',
        'slug' => 'the-buncitmen',
        'thumbnail' => 'img/thebuncitmenlogo.png',
        'description' => 'TheBuncitmen is a Coffeeshop website that integrate the original Coffeeshop "The Buncitmen" in Cinere. Developed with Next.js framework with TypeScript for Frontend, TailwindCSS for styling, RadixUI for UI Components, and Prisma for Database ORM',
        'github' => 'https://github.com/heradph/The-Buncitman'
    ]);
    $project3 = Project::create([
        'title' => 'TokoTamba Connected',
        'slug' => 'toko-tamba-connected',
        'thumbnail' => 'img/tokotambalogo.svg',
        'description' => 'TokoTamba Connected is the integration of offline grocery stores "TokoTamba" in Cengkareng into online grocery stores based on websites. Developed with Laravel framework, TailwindCSS for styling, Flowbite for UI Components, and MySQL for Database.',
        'github' => 'https://github.com/heradph/tokotambaapp'
    ]);
    $project4 = Project::create([
        'title' => 'All Things Hub',
        'slug' => 'all-things-hub',
        'thumbnail' => 'img/allthingshublogo.png',
        'description' => 'All Things Hub is an everything one-stop shop that serves online purchases of goods based on a website, which can also manage inventory stock. Developed with Next.js framework with ChakraUI Components for Frontend, ExpressJS for building RESTful API and Microservices Architecture, MySQL for Database, Dockerization with Docker and Deployed with Kubernetes',
        'github' => 'https://github.com/heradph/AllThingsHub'
    ]);

    $project5 = Project::create([   
        'title' => 'BUKU-KU',
        'slug' => 'buku-ku',
        'thumbnail' => 'img/bukukulogo.png',
        'description' => 'BUKU-KU is a mobile application designed to help users manage and explore books easily. The app allows users to browse a collection of books, view detailed information, and read reviews from other users. It also provides features to add personal reviews, making it a platform for sharing reading experiences. Developed with Java, ExpressJS for RESTful API Backend, and MySQL for Database.',
        'github' => 'https://github.com/heradph/mobile_book'
    ]);
    $project6 = Project::create([
        'title' => 'PEDAGORA (UI/UX)',
        'slug' => 'pedagora-app',
        'thumbnail' => 'img/pedagoralogo.png',
        'description' => 'PEDAGORA is a mobile application that helps schools in indonesia to find teachers according to their needs. Although I was only involved in designing the UI/UX.',
        'github' => 'https://www.figma.com/proto/1YBG3Re1YALG6hxJiBauNH/PEDAGORA?node-id=28-23&starting-point-node-id=1%3A5&t=pWodebqfCuh6NmSh-1'
    ]);
    $project7 = Project::create([
        'title' => "Syafira Sungkar Shop (WIX)",
        'slug' => 'syafira-sungkar-shop',
        'thumbnail' => 'img/syafiralogo.png',
        'description' => "SyafiraSungkar.shop is a company profile website we developed for a trusted personal shopping and delivery service specializing in jasa titip across Asia. The platform showcases the brand's offerings in fashion, cosmetics, and skincare procurement, highlighting their seamless service for clients seeking exclusive or hard-to-find international items. The website focuses on clear branding, responsive design, and user-friendly navigation to enhance client trust and engagement. Made with Wix",
        'github' => 'https://www.syafirasungkar.shop/'
    ]);
    $project8 = Project::create([
        'title' => "Dubai Luxury Property",
        'slug' => 'dubai-luxury-property',
        'thumbnail' => 'img/dubailuxurylogo.png',
        'description' => "dubailuxuryproperty.id is a professional company profile and property listing website designed to showcase premium real estate projects in Dubai. The website focuses on delivering a high-end user experience, SEO-optimized content, and clear information architecture to support international investors and property buyers in discovering luxury residential and investment opportunities. Made with NextJS Framework with Typescript and Supabase for database.",
        'github' => 'https://www.dubailuxuryproperty.id'
    ]);
    $project9 = Project::create([
        'title' => "Pyuskin (WIX)",
        'slug' => 'pyuskin-wix',
        'thumbnail' => 'img/pyuskinlogo.png',
        'description' => "Pyuskin / TST Skin Health is a skincare-focused website developed to support digital branding, SEO content strategy, and customer engagement in the beauty and skin health industry. The website serves as an information and marketing platform, featuring optimized articles, product insights, and structured content to improve search visibility and strengthen brand credibility.",
        'github' => 'https://www.pyuskin.com'
    ]);

    // $project7 = Project::create([
    //     'title' => "Med's Birthday",
    //     'slug' => 'meds-birthday',
    //     'thumbnail' => 'img/medslogo.png',
    //     'description' => "Med's Birthday is an Android-based mobile application designed to celebrate and document the birthday moments of someone named Medinna. This application allows users to view information about Med's birthday, such as the birthday date, countdown to the special day, greetings from friends, and a gallery of memorable photos.",
    //     'github' => 'https://github.com/heradph/Meds-Birthday'
    // ]);
    
    // laravel php css js react node git bootstrap java docker figma Database

    $project1->technologies()->attach([2, 3, 7, 8, 12]); 
    $project1->images()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9]); 

    $project2->technologies()->attach([4, 6, 7, 12]);
    $project2->images()->attach([10, 11, 12, 13, 14]);

    $project3->technologies()->attach([1, 2, 3, 6, 12]); 
    $project3->images()->attach([15, 65, 16, 17, 18]); 

    $project4->technologies()->attach([4, 5, 6, 7, 10, 12]);
    $project4->images()->attach([19, 20, 21, 22 ,23, 24, 25, 26, 27, 28, 29, 30]);

    $project5->technologies()->attach([4, 6, 9, 12]);
    $project5->images()->attach([31, 32, 33, 34, 35, 36, 37, 38, 39]);

    $project6->technologies()->attach([11]);
    $project6->images()->attach([40, 41, 42, 43, 44, 45, 46 ,47, 48, 49, 50, 51 , 52, 53, 54, 55]);

    $project7->technologies()->attach([13]);
    $project7->images()->attach([56, 57, 58, 59, 60, 61, 62, 63, 64]);

    $project8->technologies()->attach([12]);
    $project8->images()->attach([66, 67, 68, 69, 70]);

    $project9->technologies()->attach([13]);
    $project9->images()->attach([]);
    }
}
