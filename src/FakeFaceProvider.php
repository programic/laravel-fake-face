<?php

namespace Programic\FakeFace;

use Programic\FakeFace\Services\FakeFaceService;
use Faker\{Factory, Generator};
use Illuminate\Support\ServiceProvider;

class FakeFaceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new FakeFaceService($faker));
            return $faker;
        });
    }
}
