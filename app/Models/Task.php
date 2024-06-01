<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // mendefinisakan data Task
    public static $tasks = [
        [
            'id' => 0,
            'name' => 'Bahasa Inggris',
            'deadline' => '2024-02-10',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan tugas bahasa inggris chapter 3 di buku LKS halaman 10-12. tentang pronounce buatlah vidio praktikum anda.',
        ], [
            'id' => 1,
            'name' => 'Matematika',
            'deadline' => '2024-03-15',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan PR Matematika di buku LKS halaman 8. tentang bilangan al jabar kerjekan dengan cara dan jawaban yang benar.',
        ], [
            'id' => 2,
            'name' => 'Fisika',
            'deadline' => '2024-04-20',
            'status' => 'Belum Selesai',
            'description' => 'Selesaikan tugas fisika pada buku paket bab 3. kerjakan pada kertas polio, jawaban di sertai penjelasan lengkap.  ',
        ], [
            'id' => 3,
            'name' => 'Geografi',
            'deadline' => '2024-06-01',
            'status' => 'Belum Selesai',
            'description' => 'Pembelajaran Geografi yang harus di ikutin oleh siswa, dan dikerjakan bersama karena pembahasan materi yang cukup rumit.',
        ]
    ];

    // mengambil data Task
    public static function getAll() 
    {
        return self::$tasks;
    }

    // mengambil data Task
    public static function find($id) 
    {
        return self::$tasks[$id];
    }
}