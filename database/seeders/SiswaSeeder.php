<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data_siswa = [
            [
                'nama' => 'Alief Wafiudin',
                'kelas' => 'XI PPLG',
                'umur' => random_int(15, 30)
            ],
            [
                'nama' => 'Anggara Prima',
                'kelas' => 'XI PPLG',
                'umur' => random_int(15, 30)
            ],
            [
                'nama' => 'Nenni Destiani',
                'kelas' => 'XI PPLG',
                'umur' => random_int(15, 30)
            ],
        ];

        DB::table('siswa')->truncate();

        foreach ($data_siswa as $data) {
            DB::table('siswa')->insert([
                'nama' => $data['nama'],
                'kelas' => $data['kelas'],
                'umur' => $data['umur']
            ]);
        }

        $siswa = DB::table('siswa')->get();
        DD($siswa);
    }
}
