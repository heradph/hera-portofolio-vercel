<?php  

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function All(){
        return [
            [
                'id' => 1,
                'slug' => 'perjalanan-akademik-dan-organisasi-seorang-mahasiswa-informatika-upn-veteran-jakarta',
                'title' => "Perjalanan Akademik dan Organisasi Seorang Mahasiswa Informatika UPN Veteran Jakarta",
                'author' => "Herawan",
                'body' => "Dalam dunia akademik dan organisasi, nama Herawan menjadi salah satu yang patut diperhitungkan. Sebagai mahasiswa S1 Informatika di UPN Veteran Jakarta, ia tidak hanya berfokus pada prestasi akademik tetapi juga aktif dalam berbagai kegiatan organisasi yang membentuk jiwa kepemimpinannya.
                Sejak awal kuliah, ia telah menunjukkan minat besar dalam berbagai bidang, terutama di dunia teknologi dan pengembangan perangkat lunak. Selain itu, ia juga aktif dalam organisasi kampus, seperti menjadi panitia kreatif dalam proyek buku tahunan sekolah, koordinator humas dalam kegiatan futsal, serta staf divisi perlengkapan di Piala Rektorat. Pengalaman lainnya termasuk menjadi staf divisi ticketing dalam Bela Negara Festival serta mengikuti open recruitment Senat Mahasiswa FIK.
                Dengan keterlibatan aktifnya dalam berbagai kegiatan, ia telah membuktikan bahwa seorang mahasiswa tidak hanya harus unggul dalam akademik, tetapi juga memiliki keterampilan manajerial dan kepemimpinan yang kuat. Keaktifannya ini juga menjadi bekal penting dalam membangun jaringan serta mengasah soft skill yang sangat dibutuhkan di dunia profesional"   
            ],
            [
                'id' => 2,
                'slug' => 'herawan-:-inovasi-dan-teknologi-dalam-dunia-digital',
                'title' => "Herawan: Inovasi dan Teknologi dalam Dunia Digital",
                'author' => "Herawan",
                'body' => "Sebagai seorang mahasiswa Informatika di UPN Veteran Jakarta, Herawan tidak hanya mengejar prestasi akademik, tetapi juga terlibat dalam berbagai proyek teknologi yang inovatif. Salah satu proyek menarik yang sedang ia kembangkan adalah konser virtual berbasis AR dan VR menggunakan Unity. Proyek ini bertujuan memberikan pengalaman imersif kepada penonton, baik melalui mode VR dengan headset maupun mode AR melalui perangkat mobile atau kacamata AR.
    
                Selain itu, ia juga memiliki pengalaman dalam manajemen keuangan serta sedang mengembangkan sistem manajemen arisan berbasis OOP dalam bahasa Java. Minatnya dalam pengembangan perangkat lunak semakin diperkuat dengan keterlibatannya dalam proyek arsitektur IoT untuk platform SmartHome Corp. Ia berfokus pada pengelolaan data secara real-time, optimalisasi multi-threading, serta efisiensi kinerja sistem.
                    
                Dalam upaya memperdalam keahliannya, ia juga berencana membuat proposal penelitian mengenai Unity sebagai platform pengembangan aplikasi untuk software engineer. Tidak hanya itu, ia juga memiliki ketertarikan dalam manajemen proyek, salah satunya adalah pembuatan website coffee shop yang menjual biji kopi dan kopi, yang membutuhkan arsitektur perangkat lunak yang matang.
                    
                Dengan berbagai pencapaian dan proyek yang sedang ia kembangkan, Herawan membuktikan bahwa dunia teknologi tidak hanya tentang memahami kode, tetapi juga menciptakan solusi yang inovatif dan berdampak luas bagi masyarakat."   
            ]
            ];
    }

    public static function find($slug): array{ // artinya yang direturn harus array
        // callback
        // return Arr::first(static::All(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });

        // arrow function
        $post = Arr::first(static::All(), fn ($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}