<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	for ($i=0; $i < 10; $i++) { 
	    	DB::table('blogs')->insert([
            'title' => 'testTitle',
            'description' => 'testDescription',
            'slug' =>	'testSlug',
            'url'	=>	'testUrl',
            'image'	=>	'testImage.png'
        ]);
	    }

    }
}
