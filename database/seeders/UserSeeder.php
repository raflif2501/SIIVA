<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'sekdis',
        ]);
        Role::create([
            'name' => 'B-SDA',
        ]);
        Role::create([
            'name' => 'B-BM',
        ]);
        Role::create([
            'name' => 'B-PBP',
        ]);
        Role::create([
            'name' => 'B-AMdP',
        ]);
        Role::create([
            'name' => 'B-BJK',
        ]);
        Role::create([
            'name' => 'B-TR',
        ]);

        // Administrator
         $admin = User::create([
         'name' => 'Rafli Firdaus Falaka',
         'email' => 'raflifirdausfalaka@admin.com',
         'password' => bcrypt('rafliPUTR;'),
         ]);
         $admin->assignRole('admin');
         $admin = User::create([
            'name' => 'Akbar Riski Darrani, A.Md',
            'email' => 'akbarriskidarrani@admin.com',
            'password' => bcrypt('akbarPUTR;'),
            ]);
        $admin->assignRole('admin');

         // Sekdis
         $sekdis = User::create([
         'name' => 'Ir. RENITA SALANTI, MT',
         'email' => 'renitasalanti@sekdis.com',
         'password' => bcrypt('renitaPUTR;'),
         ]);
         $sekdis->assignRole('sekdis');

         // Bidang
         $bsda = User::create([
        'name' => 'HENDRI HARTONNO, ST., MT',
        'email' => 'hendrihartonno@sda.com',
        'password' => bcrypt('hendriSDA;'),
        ]);
        $bsda->assignRole('B-SDA');
        $bbm = User::create([
        'name' => 'AGUS ADI HIDAYAT, STP.,MT',
        'email' => 'agusadihidayat@bm.com',
        'password' => bcrypt('agusadiBM;'),
        ]);
        $bbm->assignRole('B-BM');
        $bpbp = User::create([
        'name' => 'BENNY IRAWAN, ST., MT',
        'email' => 'bennyirawan@pbp.com',
        'password' => bcrypt('bennyPBP;'),
        ]);
        $bpbp->assignRole('B-PBP');
        $bamdp = User::create([
        'name' => 'DEDI FALAHUDDIN, ST., MT',
        'email' => 'dedifalahuddin@amdp.com',
        'password' => bcrypt('dediAMDP;'),
        ]);
        $bamdp->assignRole('B-AMdP');
        $bbjk = User::create([
        'name' => 'SALAMET SUPRIYADI, ST., M.Si',
        'email' => 'salametsupriyadi@bjk.com',
        'password' => bcrypt('salametBJK;'),
        ]);
        $bbjk->assignRole('B-BJK');
        $btr = User::create([
        'name' => 'HARIYANTO EFFENDI, ST., MT',
        'email' => 'hariyantoeffendi@tr.com',
        'password' => bcrypt('hariyantoTR;'),
        ]);
        $btr->assignRole('B-TR');
    }
}
