<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ProjectTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  use DatabaseMigrations;


  public function test_the_application_returns_a_successful_response()
  {
    $response = $this->get('/api/komentars');

    $response->assertStatus(200);
  }
}
