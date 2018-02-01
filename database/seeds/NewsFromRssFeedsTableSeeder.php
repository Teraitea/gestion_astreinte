<?php

use Illuminate\Database\Seeder;
use App\NewsFromRssFeed;

class NewsFromRssFeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\NewsFromRssFeed::class, 30)->create();
    }
}
