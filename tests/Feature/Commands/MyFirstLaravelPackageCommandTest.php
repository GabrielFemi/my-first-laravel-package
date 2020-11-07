<?php


namespace Feature\Commands;


use Gabrielfemi\MyFirstLaravelPackage\Commands\MyFirstLaravelPackageCommand;
use Gabrielfemi\MyFirstLaravelPackage\Tests\TestCase;

class MyFirstLaravelPackageCommandTest extends TestCase
{
    /** @test */
    public function the_first_laravel_package_command_works()
    {
        $this->artisan('my-first-laravel-package')->assertExitCode(0);
    }
}
