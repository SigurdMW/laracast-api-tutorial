<?php 

use Illuminate\Database\Seeder;
use App\Tag;
use App\Lesson;
use Faker\Factory as Faker;

class LessonTagsTableSeeder extends Seeder {
	
	public function run()
	{

	$faker = Faker::create();

	$lessonIds = Lesson::lists('id');
	$tagIds = Tag::lists('id');

	foreach(range(1,30) as $index)
	{
		DB::table('lesson_tags')->insert([
			'lesson_id' => $faker->randomElement($lessonIds),
			'tag_id'	=> $faker->randomElement($tagIds),
		])
	}

	}

}