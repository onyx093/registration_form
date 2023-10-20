<?php

namespace Tests\Feature\View;

use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic view test example.
     */
    public function test_it_can_render(): void
    {
        $contents = $this->view('register', [
            //
        ]);

        $contents->assertSee('');
    }
}
