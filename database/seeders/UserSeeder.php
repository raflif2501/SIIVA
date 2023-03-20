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

         // Sekdis
         $sekdis = User::create([
         'name' => 'Ahmad Zairosi',
         'email' => 'ahmadzairosi@sekdis.com',
         'password' => bcrypt('rosiPUTR;'),
         ]);
         $sekdis->assignRole('sekdis');

         // Bidang
         $bsda = User::create([
        'name' => 'Ahmad',
        'email' => 'ahmad@sda.com',
        'password' => bcrypt('ahmadSDA;'),
        ]);
        $bsda->assignRole('B-SDA');
        $bbm = User::create([
        'name' => 'Ahmad',
        'email' => 'ahmad@bm.com',
        'password' => bcrypt('ahmadBM;'),
        ]);
        $bbm->assignRole('B-BM');
        $bpbp = User::create([
        'name' => 'Ahmad',
        'email' => 'ahmad@pbp.com',
        'password' => bcrypt('ahmadPBP;'),
        ]);
        $bpbp->assignRole('B-PBP');
        $bamdp = User::create([
        'name' => 'Ahmad',
        'email' => 'ahmad@amdp.com',
        'password' => bcrypt('ahmadAMDP;'),
        ]);
        $bamdp->assignRole('B-AMdP');
        $bbjk = User::create([
        'name' => 'Ahmad',
        'email' => 'ahmad@bjk.com',
        'password' => bcrypt('ahmadBJK;'),
        ]);
        $bbjk->assignRole('B-BJK');
        $btr = User::create([
        'name' => 'Ahmad',
        'email' => 'ahmad@tr.com',
        'password' => bcrypt('ahmadTR;'),
        ]);
        $btr->assignRole('B-TR');
    }
}
