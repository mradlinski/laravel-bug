<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BladeTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAtParentInInput()
    {
        $this->visit('/withAtParent')
            ->see('This is the child view.')
            ->see('@parent')
            ->dontSee('This is the parent view.');
    }

    public function testWithoutAtParent()
    {
        $this->visit('/withoutAtParent')
            ->see('This is the child view.')
            ->see('Just some test input.')
            ->dontSee('This is the parent view.');
    }
}
