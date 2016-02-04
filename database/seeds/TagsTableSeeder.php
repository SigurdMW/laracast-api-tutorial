<?php 
use App\Tag;
use Illuminate\Database\Seeder;
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