<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TugasProker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tugasprokers')->insert([
            'namaTugas' => 'Membuat Materi Dakwah',
            'sie' => 'Sie Acara',
            'tenggatwaktu' => now(),
        ]);
        DB::table('tugasprokers')->insert([
            'namaTugas' => 'Membuat Surat Undangan OKI',
            'sie' => 'Sie PDD',
            'tenggatwaktu' => now(),
        ]);
    }
}
