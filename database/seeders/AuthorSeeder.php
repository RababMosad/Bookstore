<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;


class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create(['name'=>'فاطمة حيشية ']);
        Author::create(['name'=>'محمد حيشية ']);
        Author::create(['name'=>'مويد حيشية ']);
        Author::create(['name'=>'جمال حيشية ']);
        Author::create(['name'=>'سكر حيشية ']);
        Author::create(['name'=>'شكر حيشية ']);
    }
}
