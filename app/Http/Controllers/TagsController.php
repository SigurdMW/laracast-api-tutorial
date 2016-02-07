<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Smw\Transformers;

use App\Tag;
use App\Lesson;

class TagsController extends ApiController
{

	protected $tagTransformer;

	function __construct(\Smw\Transformers\TagTransformer $tagTransformer)
	{
		$this->tagTransformer = $tagTransformer;
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lessonId = null)
    {
		$tags = $this->getTags($lessonId);

        return $this->respond([
        	'data' => $this->tagTransformer->transformCollection($tags->toArray())
        ]);
    }

   private function getTags($lessonId)
   {
   	$tags = $lessonId ? Lesson::findOrFail($lessonId)->tags : Tag::all(); //remember, using ::all() is bad.
   	return $tags;

   }
}
