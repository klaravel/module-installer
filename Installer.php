<?php

namespace Klaravel\ModuleInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $name = $package->getPrettyName();

        $split = explode("/", $name);

        $vendor = ucfirst($split[0]);
        $name = ucfirst($split[1]);

        return 'Modules/' . $vendor . '/' . $name;
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'klaravel-module' === $packageType;
    }
}
