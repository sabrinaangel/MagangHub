<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Home - MagangHub'];
        return view('pages/home', $data);
    }

    public function program()
    {
        $programs = [
            [
                'id'       => 1,
                'nama'     => 'Web Development',
                'kategori' => 'Teknologi',
                'kuota'    => 10,
                'durasi'   => '3 Bulan',
                'lokasi'   => 'Remote / On-site',
                'deskripsi'=> 'Belajar membangun website modern menggunakan HTML, CSS, JavaScript, React, dan Laravel dari nol hingga siap kerja.',
            ],
            [
                'id'       => 2,
                'nama'     => 'Mobile App Development',
                'kategori' => 'Teknologi',
                'kuota'    => 15,
                'durasi'   => '3 Bulan',
                'lokasi'   => 'On-site Jakarta',
                'deskripsi'=> 'Fokus pada pengembangan aplikasi Android dan iOS menggunakan Flutter, Kotlin, dan Swift secara langsung bersama mentor.',
            ],
            [
                'id'       => 3,
                'nama'     => 'UI/UX Design',
                'kategori' => 'Desain',
                'kuota'    => 8,
                'durasi'   => '2 Bulan',
                'lokasi'   => 'Remote',
                'deskripsi'=> 'Merancang antarmuka pengguna yang intuitif dan estetis menggunakan Figma, Adobe XD, serta prinsip-prinsip design thinking.',
            ],
            [
                'id'       => 4,
                'nama'     => 'Data Analytics',
                'kategori' => 'Data & AI',
                'kuota'    => 12,
                'durasi'   => '3 Bulan',
                'lokasi'   => 'Hybrid',
                'deskripsi'=> 'Kuasai analisis data menggunakan Python, SQL, Pandas, dan visualisasi data dengan Tableau atau Power BI.',
            ],
            [
                'id'       => 5,
                'nama'     => 'Digital Marketing',
                'kategori' => 'Pemasaran',
                'kuota'    => 20,
                'durasi'   => '2 Bulan',
                'lokasi'   => 'Remote',
                'deskripsi'=> 'Pelajari strategi pemasaran digital mulai dari SEO, SEM, social media marketing, email marketing, hingga content strategy.',
            ],
            [
                'id'       => 6,
                'nama'     => 'Content Production',
                'kategori' => 'Kreatif',
                'kuota'    => 10,
                'durasi'   => '2 Bulan',
                'lokasi'   => 'On-site Bandung',
                'deskripsi'=> 'Produksi konten video, foto, dan tulisan kreatif untuk kebutuhan media sosial dan platform digital perusahaan.',
            ],
        ];

        $data = [
            'title'    => 'Program Magang - MagangHub',
            'programs' => $programs,
        ];
        return view('pages/program', $data);
    }

    public function artikel()
    {
        $articles = [
            [
                'id'      => 1,
                'judul'   => 'Tips Sukses Wawancara Magang: Panduan Lengkap untuk Pemula',
                'tanggal' => '2024-01-15',
                'penulis' => 'Rizky Pratama',
                'kutipan' => 'Persiapkan diri Anda sebelum wawancara dengan riset mendalam tentang perusahaan, latihan menjawab pertanyaan umum, dan tampil percaya diri dengan pakaian profesional.',
            ],
            [
                'id'      => 2,
                'judul'   => 'Cara Membuat CV yang Menarik dan Lolos ATS Screening',
                'tanggal' => '2024-01-22',
                'penulis' => 'Sari Dewi',
                'kutipan' => 'CV adalah representasi diri Anda. Gunakan format bersih, font profesional, dan sesuaikan isinya dengan kualifikasi yang dicari perusahaan.',
            ],
            [
                'id'      => 3,
                'judul'   => 'Pengalaman Magang di Startup Teknologi: Pelajaran Berharga',
                'tanggal' => '2024-02-03',
                'penulis' => 'Dimas Arya',
                'kutipan' => 'Banyak hal baru yang bisa dipelajari saat magang di startup — dari kultur kerja yang dinamis, hingga tanggung jawab yang besar sejak hari pertama.',
            ],
            [
                'id'      => 4,
                'judul'   => '7 Soft Skill yang Wajib Dimiliki Peserta Magang di Era Digital',
                'tanggal' => '2024-02-11',
                'penulis' => 'Nadia Putri',
                'kutipan' => 'Komunikasi efektif, kemampuan beradaptasi, dan kolaborasi lintas tim adalah soft skill yang paling banyak dicari perusahaan dari peserta magang masa kini.',
            ],
            [
                'id'      => 5,
                'judul'   => 'Panduan Membangun Portofolio Digital yang Memukau Rekruter',
                'tanggal' => '2024-02-19',
                'penulis' => 'Tim MagangHub',
                'kutipan' => 'Portofolio yang baik bukan sekadar kumpulan karya, melainkan cerminan proses berpikir, problem-solving, dan dampak nyata yang Anda berikan.',
            ],
        ];

        $data = [
            'title'    => 'Artikel & Tips - MagangHub',
            'articles' => $articles,
        ];
        return view('pages/artikel', $data);
    }

    public function tentang()
    {
        $data = ['title' => 'Tentang Kami - MagangHub'];
        return view('pages/tentang', $data);
    }

    public function kontak()
    {
        $data = ['title' => 'Kontak - MagangHub'];
        return view('pages/kontak', $data);
    }
}
