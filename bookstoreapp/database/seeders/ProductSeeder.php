<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://previews.123rf.com/images/karinkakalinka/karinkakalinka1907/karinkakalinka190700046/131866631-old-brown-paper-in-book-open-book-top-view-for-qoutes-with-space-for-text-high-resolution-jpg-.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://previews.123rf.com/images/bbtreesubmission/bbtreesubmission1808/bbtreesubmission180801309/106351375-rf-photos-objects-photos-for-special-day-event-props-165.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://image.freepik.com/free-vector/school-books-elements-set_1284-34322.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://image.freepik.com/free-vector/modern-education-concept-with-flat-design_23-2147919753.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://image.shutterstock.com/image-photo/hyderabadindianovember-17hindu-god-hanuman-idol-600w-518636092.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://upload.wikimedia.org/wikipedia/commons/0/0e/Ramayan.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://upload.wikimedia.org/wikipedia/commons/8/82/Bhagvad_Gita.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://image.shutterstock.com/image-vector/find-differences-educational-game-children-600w-1618369522.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://image.shutterstock.com/image-photo/collection-old-books-on-wooden-260nw-1563198145.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://www.krazyinlove.com/wp-content/uploads/2016/03/Love-At-First-Sight-Couples-Image-fgg324.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://www.krazyinlove.com/wp-content/uploads/2016/03/Women-Are-Ready-To-Love-At-First-Sight-fgg340.jpg'
            ],
            [
                'name'=>'Dont make me think',
                'price'=>'1500',
                'description'=>'Dont make me think',
                'category'=>'book',
                'gallery'=>'https://images.all-free-download.com/images/graphiclarge/child_and_books_208362.jpg'
            ]
        ]);
    }
}
