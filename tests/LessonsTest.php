<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Lesson;

class LessonsTest extends ApiTester
{
    /** @test */
    public function it_fetches_lessons()
    {

        // arrange
        $this->makeLesson();

        // act
        $this->getJson('api/v1/lessons');

        // assert
        $this->assertResponseOk();
    }

    private function makeLesson($lessonFields = [])
    {
        $lesson = array_merge([
            'title' => $this->fake->sentence,
            'body' => $this->fake->paragraph,
            'boolean' => $this->fake->boolean
        ], $lessonFields);

        while($this->times--) Lesson::create($lesson);
    }
}
