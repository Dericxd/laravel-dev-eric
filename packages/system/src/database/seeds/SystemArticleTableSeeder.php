<?php

namespace Packages\System\Database\Seeds;

use Packages\System\Models\SystemArticle;
use Illuminate\Database\Seeder;

class SystemArticleTableSeeder extends Seeder
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
                'title' =>  'Titulo 1',
                'description'   =>  'Descripcion 1',
                'author'    =>  'Pedro'
            ],
            [
                'title' =>  'Titulo 2',
                'body'   =>  'Descripcion 2',
                'author'    =>  'Pedro'
            ],
            [
                'title' =>  'Titulo 3',
                'body'   =>  'Descripcion 3',
                'author'    =>  'Pedro'
            ],
            [
                'title' =>  'Titulo 4',
                'body'   =>  'Descripcion 4',
                'author'    =>  'Pedro'
            ],
            [
                'title' =>  'Titulo 5',
                'body'   =>  'Descripcion 5',
                'author'    =>  'Pedro'
            ],
            [
                'title' =>  'Titulo 6',
                'body'   =>  'Descripcion 6',
                'author'    =>  'Pedro'
            ],
            [
                'title' =>  'Titulo 7',
                'body'   =>  'Descripcion 7',
                'author'    =>  'Pedro'
            ],
            [
                'title' =>  'Titulo 8',
                'body'   =>  'Descripcion 8',
                'author'    =>  'Pedro'
            ],
            [
                'title' =>  'Titulo 9',
                'body'   =>  'Descripcion 9',
                'author'    =>  'Pedro'
            ],
            [
                'title' =>  'Titulo 10',
                'body'   =>  'Descripcion 10',
                'author'    =>  'Pedro'
            ],
        ]);
    }
}
