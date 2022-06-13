<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_and_formula' => '5 amp/kasus.',
            'description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'image' => 'fentanil_inj_005.jpg',
            'price' => '10000',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);

        //2
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'patch 12,5 mcg/jam',
            'restriction_and_formula' => '10 patch/bulan.',
            'description' => 'patch: Untuk nyeri kronik pada pasien kanker yang tidak terkendali. Tidak untuk nyeri akut.',
            'image' => 'fentanil_patch_125.jpg',
            'price' => '50000',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);

        //3
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'patch 25 mcg/jam',
            'restriction_and_formula' => '10 patch/bulan.',
            'description' => 'patch: Untuk nyeri kronik pada pasien kanker yang tidak terkendali. Tidak untuk nyeri akut.',
            'image' => 'fentanil_inj_25.jpg',
            'price' => '75000',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '1'
        ]);

        //4
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'kaps 250 mg',
            'restriction_and_formula' => '30 kaps/bulan.',
            'description' => '',
            'image' => 'asam_mefenamat_250.jpg',
            'price' => '50000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '2'
        ]);

        //5
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'tab 500 mg',
            'restriction_and_formula' => '30 tab/bulan.',
            'description' => '',
            'image' => 'asam_mefenamat_500.jpg',
            'price' => '125000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '2'
        ]);

        //6
        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen*',
            'form' => 'tab 200 mg',
            'restriction_and_formula' => '30 tab/bulan.',
            'description' => '',
            'image' => 'ibuprofentab_200mg.jpg',
            'price' => '75000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '2'
        ]);

        //7
        DB::table('medicines')->insert([
            'generic_name' => 'alopurinol',
            'form' => 'tab 100 mg*',
            'restriction_and_formula' => '30 tab/bulan.',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'image' => 'alopurinol_tab_100mg.jpg',
            'price' => '86000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '3'
        ]);

        //8
        DB::table('medicines')->insert([
            'generic_name' => 'kolkisin',
            'form' => 'tab 500 mcg',
            'restriction_and_formula' => '30 tab/bulan.',
            'description' => '',
            'image' => 'kolkisin_tab_500_mcg.png',
            'price' => '58000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '3'
        ]);

        //9
        DB::table('medicines')->insert([
            'generic_name' => 'probenesid',
            'form' => 'tab 500 mg',
            'restriction_and_formula' => '30 tab/bulan.',
            'description' => '',
            'image' => 'probenesid_tab_500mg.jpg',
            'price' => '74000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '3'
        ]);

        //10
        DB::table('medicines')->insert([
            'generic_name' => 'amitriptilin',
            'form' => 'tab 25 mg',
            'restriction_and_formula' => '30 tab/bulan.',
            'description' => '',
            'image' => 'amitriptyline_25mg.jpg',
            'price' => '80000',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '4'
        ]);

        //11
        DB::table('medicines')->insert([
            'generic_name' => 'gabapentin',
            'form' => 'kaps 100 mg',
            'restriction_and_formula' => '60 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'image' => 'gabapentin_kaps_100mg.jpg',
            'price' => '69000',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '4'
        ]);

        //12
        DB::table('medicines')->insert([
            'generic_name' => 'karbamazepin',
            'form' => 'tab 100 mg',
            'restriction_and_formula' => '60 tab/bulan.',
            'description' => '',
            'image' => 'karbamazepin_tab_100mg.jpg',
            'price' => '44000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '4'
        ]);

        //13
        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain',
            'form' => 'inj 0,5%',
            'restriction_and_formula' => '',
            'description' => '',
            'image' => 'bupivakain_inj_05.jpg',
            'price' => '39950',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '5'
        ]);

        //14
        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain heavy',
            'form' => 'inj 0,5% + glukosa 8%',
            'restriction_and_formula' => '',
            'description' => 'Khusus untuk analgesia spinal.',
            'image' => 'bupivakain_heavy.jpg',
            'price' => '89500',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '5'
        ]);

        //15
        DB::table('medicines')->insert([
            'generic_name' => 'etil klorida',
            'form' => 'spray 100 mL',
            'restriction_and_formula' => '',
            'description' => '',
            'image' => 'etilklorida_spray_100ml.jpg',
            'price' => '80750',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '5'
        ]);

        //16
        DB::table('medicines')->insert([
            'generic_name' => 'deksmedetomidin',
            'form' => 'inj 100 mcg/mL',
            'restriction_and_formula' => '',
            'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
            'image' => 'deksmedetomidin_inj_100_mcg_mL.jpg',
            'price' => '165000',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '6'
        ]);

        //17
        DB::table('medicines')->insert([
            'generic_name' => 'desfluran',
            'form' => 'ih',
            'restriction_and_formula' => '',
            'description' => '',
            'image' => 'desfluranih.jpg',
            'price' => '95000',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '6'
        ]);

        //18
        DB::table('medicines')->insert([
            'generic_name' => 'halotan',
            'form' => 'ih',
            'restriction_and_formula' => '',
            'description' => 'Tidak boleh digunakan berulang. Tidak untuk pasien dengan gangguan fungsi hati.',
            'image' => 'halotanih.jpg',
            'price' => '29500',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '6'
        ]);

        //19
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'restriction_and_formula' => '',
            'description' => '',
            'image' => 'atropin_inj_025.jpg',
            'price' => '50500',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '7'
        ]);

        //20
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_and_formula' => '',
            'description' => '',
            'image' => 'diazepam_inj_5mg_ml.png',
            'price' => '85000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '7'
        ]);

        //21
        DB::table('medicines')->insert([
            'generic_name' => 'midazolam',
            'form' => 'inj 1 mg/mL (i.v.)',
            'restriction_and_formula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari). Dosis premedikasi: 8 vial/kasus.',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
            'image' => 'midazolam_inj_1mg.jpg',
            'price' => '78000',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '7'
        ]);
        
        //22
        DB::table('medicines')->insert([
            'generic_name' => 'deksametason',
            'form' => 'inj 5 mg/mL',
            'restriction_and_formula' => '20 mg/hari.',
            'description' => '',
            'image' => 'deksametason_inj_5mg.jpg',
            'price' => '135500',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '8'
        ]);

        //23
        DB::table('medicines')->insert([
            'generic_name' => 'difenhidramin',
            'form' => 'inj 10 mg/mL (i.v./i.m.)',
            'restriction_and_formula' => '30 mg/hari.',
            'description' => '',
            'image' => 'difenhidramin_inj_10mg.jpg',
            'price' => '57950',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '8'
        ]);

        //24
        DB::table('medicines')->insert([
            'generic_name' => 'epinefrin (adrenalin)',
            'form' => 'inj 1 mg/mL',
            'restriction_and_formula' => '',
            'description' => '',
            'image' => 'epinefrin_adrenalin_inj_1_mg_ml.jpg',
            'price' => '145000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '8'
        ]);

        //25
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'tab 0,5 mg',
            'restriction_and_formula' => '',
            'description' => '',
            'image' => 'atropin_tab_05mg.jpg',
            'price' => '135500',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        //26
        DB::table('medicines')->insert([
            'generic_name' => 'efedrin',
            'form' => 'inj 50 mg/mL',
            'restriction_and_formula' => '',
            'description' => '',
            'image' => 'efedrin_inj_50mg_ml.jpg',
            'price' => '93000',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        //27
        DB::table('medicines')->insert([
            'generic_name' => 'nalokson',
            'form' => 'inj 0,4 mg/mL',
            'restriction_and_formula' => '',
            'description' => 'Hanya untuk mengatasi depresi pernapasan akibat morfin atau opioid.',
            'image' => 'nalokson.jpg',
            'price' => '85750',
            'faskes_tk1' => '0',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '9'
        ]);

        //28
        DB::table('medicines')->insert([
            'generic_name' => 'magnesium sulfat',
            'form' => 'serb',
            'restriction_and_formula' => '',
            'description' => '',
            'image' => 'magnesium_sulfat.jpg',
            'price' => '87000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '10'
        ]);

        //29
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_and_formula' => '10 amp/kasus, kecuali untuk kasus di ICU.',
            'description' => 'Tidak untuk i.m.',
            'image' => 'diazepam_inj_5mg_ml.png',
            'price' => '75000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '11'
        ]);

        //30
        DB::table('medicines')->insert([
            'generic_name' => 'fenitoin',
            'form' => 'kaps 30 mg*',
            'restriction_and_formula' => '90 kaps/bulan.',
            'description' => 'Dapat digunakan untuk status konvulsivus.',
            'image' => 'fenitoin_kaps_30mg.jpg',
            'price' => '68000',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '11'
        ]);

        //31
        DB::table('medicines')->insert([
            'generic_name' => 'fenobarbital',
            'form' => 'tab 30 mg*',
            'restriction_and_formula' => '120 tab/bulan.',
            'description' => '',
            'image' => 'fenobarbital_tab_30mg.jpg',
            'price' => '48950',
            'faskes_tk1' => '1',
            'faskes_tk2' => '1',
            'faskes_tk3' => '1',
            'category' => '11'
        ]);
    }
}
