<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Barang
        Permission::firstOrCreate([
            'name' => 'create barang'
        ]);
        Permission::firstOrCreate([
            'name' => 'edit barang'
        ]);
        Permission::firstOrCreate([
            'name' => 'delete barang'
        ]);
        Permission::firstOrCreate([
            'name' => 'list barang'
        ]);

        // Bidang
        Permission::firstOrCreate([
            'name' => 'create bidang'
        ]);
        Permission::firstOrCreate([
            'name' => 'edit bidang'
        ]);
        Permission::firstOrCreate([
            'name' => 'delete bidang'
        ]);
        Permission::firstOrCreate([
            'name' => 'list bidang'
        ]);

        // Karyawan
        Permission::firstOrCreate([
            'name' => 'create karyawan'
        ]);
        Permission::firstOrCreate([
            'name' => 'edit karyawan'
        ]);
        Permission::firstOrCreate([
            'name' => 'delete karyawan'
        ]);
        Permission::firstOrCreate([
            'name' => 'list karyawan'
        ]);

        // Kategori
        Permission::firstOrCreate([
            'name' => 'create kategori'
        ]);
        Permission::firstOrCreate([
            'name' => 'edit kategori'
        ]);
        Permission::firstOrCreate([
            'name' => 'delete kategori'
        ]);
        Permission::firstOrCreate([
            'name' => 'list kategori'
        ]);

        // Pemegang
        Permission::firstOrCreate([
            'name' => 'create pemegang'
        ]);
        Permission::firstOrCreate([
            'name' => 'edit pemegang'
        ]);
        Permission::firstOrCreate([
            'name' => 'delete pemegang'
        ]);
        Permission::firstOrCreate([
            'name' => 'list pemegang'
        ]);

        $admin = Role::where('name','admin')->first();
        $admin->givePermissionTo([
            'create barang',
            'edit barang',
            'delete barang',
            'list barang',
            'create bidang',
            'edit bidang',
            'delete bidang',
            'list bidang',
            'create karyawan',
            'edit karyawan',
            'delete karyawan',
            'list karyawan',
            'create kategori',
            'edit kategori',
            'delete kategori',
            'list kategori',
            'create pemegang',
            'edit pemegang',
            'delete pemegang',
            'list pemegang',
        ]);

        $bsda = Role::where('name','B-SDA')->first();
        $bsda->givePermissionTo([
            'create barang',
            'edit barang',
            'delete barang',
            'list barang',
            'create bidang',
            'edit bidang',
            'delete bidang',
            'list bidang',
            'create karyawan',
            'edit karyawan',
            'delete karyawan',
            'list karyawan',
            'create kategori',
            'edit kategori',
            'delete kategori',
            'list kategori',
            'create pemegang',
            'edit pemegang',
            'delete pemegang',
            'list pemegang',
        ]);

        $bbm = Role::where('name','B-BM')->first();
        $bbm->givePermissionTo([
            'create barang',
            'edit barang',
            'delete barang',
            'list barang',
            'create bidang',
            'edit bidang',
            'delete bidang',
            'list bidang',
            'create karyawan',
            'edit karyawan',
            'delete karyawan',
            'list karyawan',
            'create kategori',
            'edit kategori',
            'delete kategori',
            'list kategori',
            'create pemegang',
            'edit pemegang',
            'delete pemegang',
            'list pemegang',
        ]);

        $bpbp = Role::where('name','B-PBP')->first();
        $bpbp->givePermissionTo([
            'create barang',
            'edit barang',
            'delete barang',
            'list barang',
            'create bidang',
            'edit bidang',
            'delete bidang',
            'list bidang',
            'create karyawan',
            'edit karyawan',
            'delete karyawan',
            'list karyawan',
            'create kategori',
            'edit kategori',
            'delete kategori',
            'list kategori',
            'create pemegang',
            'edit pemegang',
            'delete pemegang',
            'list pemegang',
        ]);

        $bamdp = Role::where('name','B-AMdP')->first();
        $bamdp->givePermissionTo([
            'create barang',
            'edit barang',
            'delete barang',
            'list barang',
            'create bidang',
            'edit bidang',
            'delete bidang',
            'list bidang',
            'create karyawan',
            'edit karyawan',
            'delete karyawan',
            'list karyawan',
            'create kategori',
            'edit kategori',
            'delete kategori',
            'list kategori',
            'create pemegang',
            'edit pemegang',
            'delete pemegang',
            'list pemegang',
        ]);

        $bbjk = Role::where('name','B-BJK')->first();
        $bbjk->givePermissionTo([
            'create barang',
            'edit barang',
            'delete barang',
            'list barang',
            'create bidang',
            'edit bidang',
            'delete bidang',
            'list bidang',
            'create karyawan',
            'edit karyawan',
            'delete karyawan',
            'list karyawan',
            'create kategori',
            'edit kategori',
            'delete kategori',
            'list kategori',
            'create pemegang',
            'edit pemegang',
            'delete pemegang',
            'list pemegang',
        ]);

        $btr = Role::where('name','B-TR')->first();
        $btr->givePermissionTo([
            'create barang',
            'edit barang',
            'delete barang',
            'list barang',
            'create bidang',
            'edit bidang',
            'delete bidang',
            'list bidang',
            'create karyawan',
            'edit karyawan',
            'delete karyawan',
            'list karyawan',
            'create kategori',
            'edit kategori',
            'delete kategori',
            'list kategori',
            'create pemegang',
            'edit pemegang',
            'delete pemegang',
            'list pemegang',
        ]);

        $sekdis = Role::where('name','sekdis')->first();
        $sekdis->givePermissionTo([
            'list barang',
            'list bidang',
            'list karyawan',
            'list kategori',
            'list pemegang',
        ]);
    }
}
