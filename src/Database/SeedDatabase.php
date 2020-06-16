<?php

namespace Database;

use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Trait SeedDatabase
 */
trait SeedDatabase
{
    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $uses = array_flip(class_uses_recursive(static::class));
        if (!isset($uses[DatabaseMigrations::class])) {
            return;
        }
        $this->seedDatabase();
    }

    /**
     * Seed the database.
     *
     * @return void
     */
    public function seedDatabase()
    {
        $this->artisan('db:seed --no-interaction');
    }
}