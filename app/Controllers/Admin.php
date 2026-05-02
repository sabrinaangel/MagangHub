<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Dashboard Admin - MagangHub'];
        return view('admin/dashboard', $data);
    }

    public function program()
    {
        $programs = [
            ['id'=>1,'nama'=>'Web Development',       'kategori'=>'Teknologi',  'kuota'=>10,'durasi'=>'3 Bulan','lokasi'=>'Remote / On-site','status'=>'Aktif'],
            ['id'=>2,'nama'=>'Mobile App Development','kategori'=>'Teknologi',  'kuota'=>15,'durasi'=>'3 Bulan','lokasi'=>'On-site Jakarta', 'status'=>'Aktif'],
            ['id'=>3,'nama'=>'UI/UX Design',          'kategori'=>'Desain',     'kuota'=>8, 'durasi'=>'2 Bulan','lokasi'=>'Remote',          'status'=>'Penuh'],
            ['id'=>4,'nama'=>'Data Analytics',        'kategori'=>'Data & AI',  'kuota'=>12,'durasi'=>'3 Bulan','lokasi'=>'Hybrid',          'status'=>'Aktif'],
            ['id'=>5,'nama'=>'Digital Marketing',     'kategori'=>'Pemasaran',  'kuota'=>20,'durasi'=>'2 Bulan','lokasi'=>'Remote',          'status'=>'Aktif'],
            ['id'=>6,'nama'=>'Content Production',    'kategori'=>'Kreatif',    'kuota'=>10,'durasi'=>'2 Bulan','lokasi'=>'On-site Bandung', 'status'=>'Aktif'],
        ];

        $data = [
            'title'    => 'Kelola Program Magang - MagangHub',
            'programs' => $programs,
        ];
        return view('admin/kelola_program', $data);
    }

    public function artikel()
    {
        $articles = [
            ['id'=>1,'judul'=>'Tips Sukses Wawancara Magang: Panduan Lengkap untuk Pemula',          'penulis'=>'Rizky Pratama',  'tanggal'=>'2024-01-15','kutipan'=>'Persiapkan diri Anda dengan riset mendalam tentang perusahaan...','status'=>'Published'],
            ['id'=>2,'judul'=>'Cara Membuat CV yang Menarik dan Lolos ATS Screening',                 'penulis'=>'Sari Dewi',      'tanggal'=>'2024-01-22','kutipan'=>'CV adalah representasi diri Anda. Gunakan format bersih...','status'=>'Published'],
            ['id'=>3,'judul'=>'Pengalaman Magang di Startup Teknologi: Pelajaran Berharga',           'penulis'=>'Dimas Arya',     'tanggal'=>'2024-02-03','kutipan'=>'Banyak hal baru yang bisa dipelajari saat magang di startup...','status'=>'Published'],
            ['id'=>4,'judul'=>'7 Soft Skill yang Wajib Dimiliki Peserta Magang di Era Digital',      'penulis'=>'Nadia Putri',    'tanggal'=>'2024-02-11','kutipan'=>'Komunikasi efektif dan adaptasi adalah kunci...','status'=>'Draft'],
            ['id'=>5,'judul'=>'Panduan Membangun Portofolio Digital yang Memukau Rekruter',           'penulis'=>'Tim MagangHub',  'tanggal'=>'2024-02-19','kutipan'=>'Portofolio yang baik adalah cerminan proses berpikir Anda...','status'=>'Draft'],
        ];

        $data = [
            'title'    => 'Kelola Artikel - MagangHub',
            'articles' => $articles,
        ];
        return view('admin/kelola_artikel', $data);
    }
}
