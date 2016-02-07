<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Faker\Factory as Faker;

class ApiTester extends TestCase
{
    protected $fake;
    protected $times = 1;

    function __construct(){
        $this->fake = Faker::create();
    }

    private function times($count)
    {
        $this->times = $count;

        return $this;
    }

     public function getJson($uri){
        return json_encode($this->call('GET', $uri)->getContent());
    }

}
