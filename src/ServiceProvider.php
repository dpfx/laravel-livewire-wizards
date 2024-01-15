<?php

namespace Dpfx\LaravelLivewireWizards;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-wizard')
            ->hasConfigFile()
            ->hasViews();
    }
}
