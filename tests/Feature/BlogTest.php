<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BlogTest extends TestCase
{
    /** @test */
    public function it_loads_the_page()
    {
        $this->get('/blog')
             ->assertDontSee('Whoops')
             ->assertSee('Blog');
    }
}
