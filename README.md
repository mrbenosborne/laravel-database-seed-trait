# Laravel Database Seed Trait
Seed a database within Laravel tests just by using a trait.

# Install
```
composer require mrbenosborne/laravel-database-seed-trait
```

# Example
The trait will use the default seeder "DatabaseSeeder", and the default connection specified in your app config.

### Before
```php
<?php

namespace Tests\Feature;

use DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(DatabaseSeeder::class);
    }
}
```

### After
```php
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Database\SeedDatabase;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use DatabaseMigrations, SeedDatabase;
}
```