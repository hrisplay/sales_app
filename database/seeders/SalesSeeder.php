<?php

namespace Database\Seeders;

use App\Models\Sales;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sales::create([
            'sales_code' => str::random(9),
            'nik' => str::random(6),
            'email' => 'helly@yahoo.com',
            'name' => 'Helly Afri Fendik K.',
            'phone' => '+62'.random_int(100000, 999999),
            'phone_secondary' => '+62'.random_int(100000, 999999),
            'regional' => 'Jakarta',
            'location' => 'MNC Tower lt 12A',
            'is_active' => false,
            'rate' => 5,
            'image' => 'helly afri fendik k.jpg',
        ]);

        Sales::create([
            'sales_code' => str::random(9),
            'nik' => str::random(6),
            'email' => 'fa1z@yahoo.com',
            'name' => 'Muhammad Faiz',
            'phone' => '+62'.random_int(100000, 999999),
            'phone_secondary' => '+62'.random_int(100000, 999999),
            'regional' => 'Jakarta',
            'location' => 'MNC Tower lt 12A',
            'rate' => 4,
            'image' => 'Muhammad Faiz.jpeg',
        ]);

        Sales::create([
            'sales_code' => str::random(9),
            'nik' => str::random(6),
            'email' => '4s4d@yahoo.com',
            'name' => 'Asad Baqir Baozhi',
            'phone' => '+62'.random_int(100000, 999999),
            'phone_secondary' => '+62'.random_int(100000, 999999),
            'regional' => 'Jakarta',
            'location' => 'MNC Tower lt 12A',
            'rate' => 2,
            'image' => 'Asad Baqir Baozhi.png',
        ]);

        Sales::create([
            'sales_code' => str::random(9),
            'nik' => str::random(6),
            'email' => 'j0y@yahoo.com',
            'name' => 'Joy Widi W.',
            'phone' => '+62'.random_int(100000, 999999),
            'phone_secondary' => '+62'.random_int(100000, 999999),
            'regional' => 'Jakarta',
            'location' => 'MNC Tower lt 12A',
            'rate' => 5,
            'image' => 'Joy Widi Wibowo.jpg',
        ]);

        Sales::create([
            'sales_code' => str::random(9),
            'nik' => str::random(6),
            'email' => 'f4tt4n@yahoo.com',
            'name' => 'Mohammad Fattan',
            'phone' => '+62'.random_int(100000, 999999),
            'phone_secondary' => '+62'.random_int(100000, 999999),
            'regional' => 'Jakarta',
            'location' => 'MNC Tower lt 12A',
            'rate' => 4,
            'image' => 'Mohammad Fattan Hibrizi.jpg',
        ]);

        Sales::create([
            'sales_code' => str::random(9),
            'nik' => str::random(6),
            'email' => 'haj1d@yahoo.com',
            'name' => 'Muhammad Hajid Alakthar',
            'phone' => '+62'.random_int(100000, 999999),
            'phone_secondary' => '+62'.random_int(100000, 999999),
            'regional' => 'Jakarta',
            'location' => 'MNC Tower lt 12A',
            'rate' => 4,
            'image' => 'Muhammad Hajid Al Akhtar.jpeg',
        ]);

        Sales::create([
            'sales_code' => str::random(9),
            'nik' => str::random(6),
            'email' => 'sam@yahoo.com',
            'name' => 'Samuel Bernard Jeffersen',
            'phone' => '+62'.random_int(100000, 999999),
            'phone_secondary' => '+62'.random_int(100000, 999999),
            'regional' => 'Jakarta',
            'location' => 'MNC Tower lt 12A',
            'rate' => 4,
            'image' => 'Samuel Bernard Jeffersen.png',
        ]);
    }
}
