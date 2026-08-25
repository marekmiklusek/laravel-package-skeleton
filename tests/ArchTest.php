<?php

declare(strict_types=1);

use Illuminate\Support\ServiceProvider;
use MarekMiklusek\PackageSkeleton\PackageSkeletonServiceProvider;

arch('source code uses strict types')
    ->expect("MarekMiklusek\PackageSkeleton")
    ->toUseStrictTypes();

arch('source code declares no debug statements')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'die', 'exit'])
    ->not->toBeUsed();

arch('service providers are final and extend the framework provider')
    ->expect(PackageSkeletonServiceProvider::class)
    ->toBeFinal()
    ->toExtend(ServiceProvider::class);
