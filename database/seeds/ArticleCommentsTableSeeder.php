<?php

use App\ArticleComment;
use Illuminate\Database\Seeder;

class ArticleCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ArticleComment::class, 30)->create();
    }
}
