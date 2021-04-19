<?php

namespace Packages\System\Database\Seeds;

use Packages\System\Models\User;
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
        collect([
            [
                'name' =>  'name1',
                'email'   =>  'Descripcion1@admin.com',
                'password'    =>  '123456'
            ],
            [
                'name' =>  'name2',
                'email'   =>  'Descripcion2@admin.com',
                'password'    =>  '123456'
            ],
            [
                'name' =>  'name3',
                'email'   =>  'Descripcion3@admin.com',
                'password'    =>  '123456'
            ],
            [
                'name' =>  'name4',
                'email'   =>  'Descripcion4@admin.com',
                'password'    =>  '123456'
            ],
            [
                'name' =>  'name5',
                'email'   =>  'Descripcion5@admin.com',
                'password'    =>  '123456'
            ],
            [
                'name' =>  'name6',
                'email'   =>  'Descripcion6@admin.com',
                'password'    =>  '123456'
            ],
            [
                'name' =>  'name7',
                'email'   =>  'Descripcion7@admin.com',
                'password'    =>  '123456'
            ],
            [
                'name' =>  'name8',
                'email'   =>  'Descripcion8@admin.com',
                'password'    =>  '123456'
            ],
            [
                'name' =>  'name9',
                'email'   =>  'Descripcion9@admin.com',
                'password'    =>  '123456'
            ],
            [
                'name' =>  'name10',
                'email'   =>  'Descripcion10@admin.com',
                'password'    =>  '123456'
            ],
        ]);
    }
}
