<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $book1 = Book::create([
         'category_id'  => Category::where('name','ريادة الاعمال')->first()->id,
         'publisher_id'  =>Publisher::where('name','اكاديمية حسوب')->first()->id,
         'title' => 'التوظيف عن بعد',  
         'description'=> 'العائلة وافراد من اي مكان',
         'number_of_copies'=>'300',
         'number_of_pages'=>'288',
         'price' => '17',
         'isbn' =>'100000000',
         'cover_image' => 'images/covers/1.png',
        ]);
        $book1->authors()->attach(Author::where('name','فاطمة حيشية')->first());
        //b2
        $book2 = Book::create([
            'category_id'  => Category::where('name','العمل الحر')->first()->id,
            'publisher_id'  =>Publisher::where('name','اكاديمية حسوب')->first()->id,
               'title' => '..التوظيف عن بعد',  
               'description'=> 'كلام مفيد عن العمل الحر ',
               'number_of_copies'=>'300',
               'number_of_pages'=>'288',
               'price' => '17',
               'isbn' =>'100000000',
               'cover_image' => 'images/covers/2.png',
           ]);
           $book2->authors()->attach(Author::where('name','محمد حيشية')->first());
           //b3
           $book3 = Book::create([
            'category_id' => Category::where('name','التسويق والمبيعات')->first()->id,
            'publisher_id' =>Publisher::where('name','اكاديمية حسوب')->first()->id,
               'title' => 'التوظيف عن بعد',  
               'description'=> 'كلام مفيد عن العمل الحر ',
               'number_of_copies'=>'300',
               'number_of_pages'=>'288',
               'price' => '17',
               'isbn' =>'100000000',
               'cover_image' => 'images/covers/3.png',
           ]);
           $book3->authors()->attach(Author::where('name','مويد حيشية')->first());
           //b4
           $book4 = Book::create([
            'category_id'  => Category::where('name','التصميم')->first()->id,
            'publisher_id'  =>Publisher::where('name','اكاديمية حسوب')->first()->id,
               'title' => 'التوظيف عن بعد',  
               'description'=> 'كلام مفيد عن العمل الحر ',
               'number_of_copies'=>'300',
               'number_of_pages'=>'288',
               'price' => '17',
               'isbn' =>'100000000',
               'cover_image' => 'images/covers/4.png',
           ]);
           $book4->authors()->attach(Author::where('name','جمال حيشية')->first());
           //b5
           $book5 = Book::create([
        'category_id'  => Category::where('name','البرمجة')->first()->id,
            'publisher_id'  =>Publisher::where('name','اكاديمية حسوب')->first()->id,
               'title' => 'التوظيف عن بعد',  
               'description'=> 'كلام مفيد عن العمل الحر ',
               'number_of_copies'=>'300',
               'number_of_pages'=>'288',
               'price' => '17',
               'isbn' =>'100000000',
               'cover_image' => 'images/covers/5.png',
           ]);
           $book5->authors()->attach(Author::where('name','سكر حيشية')->first());
           //b6
           $book6 = Book::create([
                'category_id'=> Category::where('name','البرمجة')->first()->id,
                'publisher_id'=>Publisher::where('name','اكاديمية حسوب')->first()->id,
               'title' => 'التوظيف عن بعد',  
               'description'=> 'كلام مفيد عن العمل الحر ',
               'number_of_copies'=>'300',
               'number_of_pages'=>'288',
               'price' => '17',
               'isbn' =>'100000000',
               'cover_image' => 'images/covers/6.png',
           ]);
           $book6->authors()->attach(Author::where('name','شكر حيشية')->first());
    }
}
