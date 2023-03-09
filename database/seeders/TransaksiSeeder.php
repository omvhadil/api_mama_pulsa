<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
               "provider_id" => 1,
               "no_hp" => "089756436775",
               "nominal" => 40000,
               "status" => 'pending',
               "catatan" => 'masih kuranag 40000'
            ],
            [
               "provider_id" => 4,
               "no_hp" => "085443728489",
               "nominal" => 25000,
               "status" => 'pending',
               "catatan" => 'lunas'
            ],
            [
               "provider_id" => 3,
               "no_hp" => "08532476789",
               "nominal" => 10000,
               "status" => 'success',
               "catatan" => 'lunas'
            ],
            [
               "provider_id" => 2,
               "no_hp" => "099785647114",
               "nominal" => 10000,
               "status" => 'failed',
               "catatan" => 'masih belum bayar'
            ],
            [
               "provider_id" => 1,
               "no_hp" => "099785647114",
               "nominal" => 15000,
               "status" => 'pending',
               "catatan" => 'lunas'
            ],
            [
               "provider_id" => 4,
               "no_hp" => "098443786114",
               "nominal" => 10000,
               "status" => 'pending',
               "catatan" => 'uang masih kurang 5000'
            ],
            [
               "provider_id" => 1,
               "no_hp" => "099785647435",
               "nominal" => 35000,
               "status" => 'pending',
               "catatan" => 'masih belum bayar 30000'
            ],
            [
               "provider_id" => 5,
               "no_hp" => "099443769435",
               "nominal" => 50000,
               "status" => 'pending',
               "catatan" => 'masih belum bayar 20000'
            ],
            [
               "provider_id" => 3,
               "no_hp" => "099785647555",
               "nominal" => 55000,
               "status" => 'success',
               "catatan" => 'lunas'
            ],
            [
               "provider_id" => 4,
               "no_hp" => "085785647999",
               "nominal" => 35000,
               "status" => 'pending',
               "catatan" => 'masih belum bayar 30000'
            ],
            [
               "provider_id" => 1,
               "no_hp" => "089756436775",
               "nominal" => 40000,
               "status" => 'pending',
               "catatan" => 'masih kuranag 40000'
            ],
            [
               "provider_id" => 4,
               "no_hp" => "085443728489",
               "nominal" => 25000,
               "status" => 'pending',
               "catatan" => 'lunas'
            ],
            [
               "provider_id" => 3,
               "no_hp" => "08532476789",
               "nominal" => 10000,
               "status" => 'success',
               "catatan" => 'lunas'
            ],
            [
               "provider_id" => 2,
               "no_hp" => "099785647114",
               "nominal" => 10000,
               "status" => 'failed',
               "catatan" => 'masih belum bayar'
            ],
            [
               "provider_id" => 1,
               "no_hp" => "099785647114",
               "nominal" => 15000,
               "status" => 'pending',
               "catatan" => 'lunas'
            ],
            [
               "provider_id" => 4,
               "no_hp" => "098443786114",
               "nominal" => 10000,
               "status" => 'pending',
               "catatan" => 'uang masih kurang 5000'
            ],
            [
               "provider_id" => 1,
               "no_hp" => "099785647435",
               "nominal" => 35000,
               "status" => 'pending',
               "catatan" => 'masih belum bayar 30000'
            ],
            [
               "provider_id" => 5,
               "no_hp" => "099443769435",
               "nominal" => 50000,
               "status" => 'pending',
               "catatan" => 'masih belum bayar 20000'
            ],
            [
               "provider_id" => 3,
               "no_hp" => "099785647555",
               "nominal" => 55000,
               "status" => 'success',
               "catatan" => 'lunas'
            ],
            [
               "provider_id" => 4,
               "no_hp" => "085785647999",
               "nominal" => 35000,
               "status" => 'pending',
               "catatan" => 'masih belum bayar 30000'
            ],
            
           
];
foreach ($data as $item) {
    Transaksi::create($item);
}
    }
}