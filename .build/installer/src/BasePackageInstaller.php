<?php

namespace TYPO3\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class BasePackageInstaller extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        return '../' . $package->getPrettyName();
    }

    public function supports($packageType)
    {
        return $packageType === 'typo3-base-package';
    }
}
