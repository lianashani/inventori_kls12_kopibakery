<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password'=> bcrypt('admin'),
            'role'=> 'admin',
        ]);

        User::factory()->create([
            'name' => 'Karyawan',
            'email' => 'karyawan@karyawan.com',
            'password'=> bcrypt('karyawan'),
            'role'=> 'karyawan',
        ]);


        // Seed Jenis
        DB::table('jenis')->insert([
            ['nama_jenis' => 'Kopi'],
            ['nama_jenis' => 'Roti'],
            ['nama_jenis' => 'Kue'],
            ['nama_jenis' => 'Minuman Lain'],
        ]);

        // Seed Supplier
        DB::table('suppliers')->insert([
            ['nama_supplier' => 'PT Kopi Nusantara', 'alamat' => 'Jl. Sumatera No. 10', 'no_telp' => '081234567890'],
            ['nama_supplier' => 'CV Roti Enak', 'alamat' => 'Jl. Mawar No. 15', 'no_telp' => '081298765432'],
        ]);

        // Seed Barang
        DB::table('barangs')->insert([
            [
                'gambar' => 'https://source.unsplash.com/300x300/?coffee',
                'nama_barang' => 'Kopi Arabika',
                'id_jenis' => 1,
                'harga_beli' => 50000,
                'harga_jual' => 65000,
                'stok' => 20
            ],
            [
                'gambar' => 'https://source.unsplash.com/300x300/?bread',
                'nama_barang' => 'Roti Gandum',
                'id_jenis' => 2,
                'harga_beli' => 15000,
                'harga_jual' => 20000,
                'stok' => 15
            ],
            [
                'gambar' => 'https://source.unsplash.com/300x300/?cake',
                'nama_barang' => 'Kue Coklat',
                'id_jenis' => 3,
                'harga_beli' => 25000,
                'harga_jual' => 35000,
                'stok' => 10
            ],
        ]);

        // Seed Barang Masuk
        DB::table('barang_masuks')->insert([
            ['id_barang' => 1, 'id_supplier' => 1, 'jumlah' => 10],
            ['id_barang' => 2, 'id_supplier' => 2, 'jumlah' => 5],
        ]);

        // Seed Barang Keluar
        DB::table('barang_keluars')->insert([
            ['id_barang' => 1, 'nama_customer' => 'Budi', 'jumlah' => 3],
            ['id_barang' => 2, 'nama_customer' => 'Siti', 'jumlah' => 2],
        ]);


    }
}
