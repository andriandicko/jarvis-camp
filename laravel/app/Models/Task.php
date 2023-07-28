<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\ReturnTypePass;

class Task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Tugas 3 Statistik',
            'description' => 'Menghitung probabilitas pada data yang diberikan',
            'deadline' => '2023-07-29',
            'status' => 'Selesai',
        ],
        [
            'id' => 2,
            'name' => 'Tugas 4 Statistik',
            'description' => 'Lorem, ipsum dasasolor sit amet consectetur adipisicing elit. Blanditiis, placeat. Neque quibusdam ab tempore. Recusandae ea rerum nulla, reprehenderit, odio amet ab iste nobis quisquam totam ipsum illum iusto nesciunt?',
            'deadline' => '2023-08-29',
            'status' => 'Selesai',
        ],
        [
            'id' => 3,
            'name' => 'Tugas 5 Statistik',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, placeat. Neque quibusdam ab tempore. Recusandae ea rerum nulla, reprehenderit, odio amet ab iste nobis quisquam totam ipsum illum iusto nesciunt?',
            'deadline' => '2023-09-29',
            'status' => 'Belum Selesai',
        ],
    ];

    public static function getAll()
    {
        return self::$tasks;
    }

    public static function getById($id)
    {
        //
        
    }
}
