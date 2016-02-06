<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder {
	
	public function run()
	{

		$faker = Faker::create();

		foreach(range(1,10) as $index)
		{
			Tag::create([
				'name' => $faker->word
			]);
		}
	}
}