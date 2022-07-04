<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_list = config ('comics');
            foreach($comics_list as $comic) {
                $new_comic = new Comic ();
                $new_comic->fill($comic);
                $new_comic->save();
            }
    }
}
