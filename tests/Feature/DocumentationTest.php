<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DocumentationTest extends TestCase
{
    /** @test */
    public function it_assumes_the_latest_documentation_version()
    {
        $this->get('docs/some-page')->assertRedirect('docs/'.DEFAULT_VERSION.'/some-page');
    }

    /** @test */
    public function it_loads_and_parses_a_markdown_documentation_page()
    {
        $this->get('docs/'.DEFAULT_VERSION.'/stub')
            ->assertSee()

    }
}
