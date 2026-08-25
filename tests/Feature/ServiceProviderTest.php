<?php

declare(strict_types=1);

use MarekMiklusek\PackageSkeleton\PackageSkeletonServiceProvider;

it('registers the package service provider', function (): void {
    expect(app()->getLoadedProviders())
        ->toHaveKey(PackageSkeletonServiceProvider::class);
});

it('boots the application without errors', function (): void {
    expect(app()->isBooted())->toBeTrue();
});
