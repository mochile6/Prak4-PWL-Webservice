<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  use DatabaseMigrations;
  use RefreshDatabase;


  public function test_the_application_returns_a_successful_response()
  {
    $response = $this->get('/api/komentars');

    $response->assertStatus(200);
  }
}
