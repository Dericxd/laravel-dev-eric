<?php

namespace Packages\System\Database\Seeds;

use Packages\System\Models\SystemUser;
use Illuminate\Database\Seeder;

class SystemUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemUser::create([

            'name' => 'name1',
            'email' => 'Descripcion1@admin.com',
            'password' => '123456'
        ]);
        SystemUser::create(
        [
            'name' => 'name2',
            'email' => 'Descripcion2@admin.com',
            'password' => '123456'
        ]);
        SystemUser::create([
                'name' => 'name3',
                'email' => 'Descripcion3@admin.com',
                'password' => '123456'
            ]);
        SystemUser::create([
                'name' => 'name4',
                'email' => 'Descripcion4@admin.com',
                'password' => '123456'
            ]);
        SystemUser::create([
                'name' => 'name5',
                'email' => 'Descripcion5@admin.com',
                'password' => '123456'
            ]);
        SystemUser::create([
                'name' => 'name6',
                'email' => 'Descripcion6@admin.com',
                'password' => '123456'
            ]);
        SystemUser::create([
                'name' => 'name7',
                'email' => 'Descripcion7@admin.com',
                'password' => '123456'
            ]);
        SystemUser::create([
                'name' => 'name8',
                'email' => 'Descripcion8@admin.com',
                'password' => '123456'
            ]);
        SystemUser::create([
                'name' => 'name9',
                'email' => 'Descripcion9@admin.com',
                'password' => '123456'
            ]);
        SystemUser::create([
                'name' => 'name10',
                'email' => 'Descripcion10@admin.com',
                'password' => '123456'
            ]);
    }
}
