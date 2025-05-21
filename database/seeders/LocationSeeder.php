<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Location::create([
        'name' => 'Trường Đại Học Phenikaa',
        'address' => 'P. Nguyễn Trác, Yên Nghĩa, Hà Đông, Hà Nội, Việt Nam',
        'latitude' => 20.9626112,
        'longitude' => 105.7461115,
    ]);
}
}
