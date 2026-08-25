<?php

declare(strict_types=1);

use MarekMiklusek\PackageSkeleton\PackageSkeletonServiceProvider;

it('is registered for package auto-discovery', function (): void {
    $composer = json_decode(
        (string) file_get_contents(__DIR__.'/../../composer.json'),
        true,
        flags: JSON_THROW_ON_ERROR,
    );

    expect($composer)->toBeArray();

    $providers = data_get($composer, 'extra.laravel.providers');

    expect($providers)
        ->toBeArray()
        ->toContain(PackageSkeletonServiceProvider::class);
});
