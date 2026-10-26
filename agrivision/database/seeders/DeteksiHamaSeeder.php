<?php
namespace Database\Seeders;
use App\Models\DeteksiHama;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DeteksiHamaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $lokasi   = ['Garut Kota', 'Tarogong Kaler', 'Samarang'];
        $tanaman  = ['Padi', 'Jagung', 'Cabai'];
        $hama     = ['Wereng Cokelat', 'Ulat Grayak', 'Kutu Daun'];

        for ($i = 0; $i < 18; $i++) {
            // Dibagi 3 rentang supaya ketiga status pasti muncul
            $score = match ($i % 3) {
                0 => $faker->numberBetween(30, 49),
                1 => $faker->numberBetween(50, 80),
                default => $faker->numberBetween(81, 99),
            };

            if ($score < 50) {
                $status = 'Tidak Pasti';
            } elseif ($score <= 80) {
                $status = 'Indikasi Hama';
            } else {
                $status = 'Hama Terkonfirmasi';
            }

            DeteksiHama::create([
                'lokasi'            => $faker->randomElement($lokasi),
                'nama_tanaman'      => $faker->randomElement($tanaman),
                'jenis_hama'        => $faker->randomElement($hama),
                'confidence_score'  => $score,
                'tingkat_kerusakan' => $faker->randomFloat(1, 0, 80),
                'status_deteksi'    => $status,
            ]);
        }
    }
}
