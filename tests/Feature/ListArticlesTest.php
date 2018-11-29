<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * //notazione "test" necessaria se non usi test come suffisso del metodo
     *
     * @test
     */
    public function shouldListArticles()
    {
        $response = $this->get('api/articles');
        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
