<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Buku;
use App\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Rahmat Dani S',
            'email' => 'rahmatdani2699@gmail.com',
            'password' => bcrypt('dani'),
            'role_id' => 1

        ]);
        User::create([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('dani'),
            'role_id' => 2

        ]);

        Role::create([
            'role' => 'admin',
            'ket' => 'adminstrator'
        ]);
        Role::create([
            'role' => 'siswa',
            'ket' => 'siswa'
        ]);

        Buku::create([
            'judulbuku' => 'Bahasa Program untuk emberio',
            'isbn' => '123123123',
            'nomorpunggung' => '32132132',
            'kdbukupenerbit' => '123123',
            'penerbit' => 'erlangga',
            'tahunterbit' => '2022',
            'penulis' => 'rahmat dani',
            'jumlahhalaman' => '200',
            'jeniskoleksi' => 'biograpy',
            'fiksinonfiksi' => 'fiksi',
            'jenjang' => 'smk',
            'tipebuku' => 'ada',
            'kategori' => 'ada',
            'gambar' => 'dani.jpg'
        ]);
        
    }
}
