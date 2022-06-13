<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ANALGESIK NARKOTIK',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANALGESIK NON NARKOTIK',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIPIRAI',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'NYERI NEUROPATIK',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANESTETIK LOKAL',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANESTETIK UMUM dan OKSIGEN',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'KHUSUS',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'UMUM',
            'description' => ''
        ]);

        DB::table('categories')->insert([
            'name' => 'ANTIEPILEPSI - ANTIKONVULSI',
            'description' => ''
        ]);
    }
}
