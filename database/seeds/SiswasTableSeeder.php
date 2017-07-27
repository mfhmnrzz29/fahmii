<?php

use Illuminate\Database\Seeder;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
        $siswa=[
        ['nama'=>'M Fahmi Nur Aziz', 'kelas'=>'XII RPL 1', 'tanggal_lahir'=>'2000-04-03', 'alamat'=>'Rancamanyar'],
       ['nama'=>'Imam Rizki Julian', 'kelas'=>'XII RPL 1', 'tanggal_lahir'=>'2000-07-05', 'alamat'=>'Baru Raya'],
       ['nama'=>'M Ramdhani', 'kelas'=>'XII RPL 1', 'tanggal_lahir'=>'2000-12-11', 'alamat'=>'Sukamenak'],
];
        DB::table('siswas')->insert($siswa);
    }
    }
}
