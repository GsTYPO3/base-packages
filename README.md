# TYPO3 Sitepackage Builder Base Packages

TYPO3 Sitepackage Builder Base Packages are used for the generation of TYPO3
Sitepackages at <https://get.typo3.org>.

This repository contains the base packages available at <https://get.typo3.org>.
There are various types of base packages, some are listed at the Sitepackage Builder,
others are only usable by manually calling the URL or by using the REST API.

## List of Base Packages

The following base packages are currently available:

| Package | Description | Listed | Official |
| --- | --- | :---: | :---: |
| [Bootstrap Package](https://get.typo3.dev/wizards/sitepackage/detail/typo3/bootstrap-package) | Create a Sitepackage based on the popular Bootstrap Package | ✅ | ✅ |
| [Community Test Package](https://get.typo3.dev/wizards/sitepackage/detail/typo3/community-test) | Create a Sitepackage based on the Community Test Package | ❌ | ❌ |
| [Fluid Styled Content](https://get.typo3.dev/wizards/sitepackage/detail/typo3/fluid-styled-content) | Create a Sitepackage based on the Fluid Styled Content Extension | ✅ | ✅ |
| [Introduction Package](https://get.typo3.dev/wizards/sitepackage/detail/typo3/introduction-package) | Create a Sitepackage based on the Official TYPO3 Introduction Package | ✅ | ❌ |

### Rules to submit a new Base Package

In order for a pull request from a new base package to be accepted, it must meet
some conditions. A base package:

* must offer added value for the community.
* must not contradict the best practices recommended by the TYPO3 Core Team.
* must follow the TYPO3 Coding Standards.
* must include a web optimized preview image with the size 460x720 pixels
  (width x height) and a maximum file size of 100 kilobytes. PNG is the
  preferred file format.
* must include a support contact in the `composer.json`, which can be assigned
  to new issues.
* ....

### Rules to get listed at get.typo3.org

During the creation of a pull request, an option can be selected to additionally
get listed at <https://get.typo3.org>. A group of people from various TYPO3 teams
will make the final decision, if a base package gets listed or not. And some
additional rules apply, namely a base package:

* must support all TYPO3 LTS releases.
* must be updated after the x.1.0 and before the x.2.0 minor TYPO3 Core releases.
* ....

## Creating a Base Package

To [create a new Base Package](https://github.com/GsTYPO3/base-package-skeleton/generate)
use the provided template repository <https://github.com/GsTYPO3/base-package-skeleton>.
Make the changes and commit and push them to your repository. Also register the
Base Package at [Packagist](https://packagist.org/packages/submit).

Once the Base Package is ready, [submit](https://github.com/GsTYPO3/base-packages/issues/new/choose)
it using the `Submit a Base Package` issue template. A pull request containing
your Base Package will automatically be created from the default branch and
linked to the created issue.

## Updating a Base Package

After updating the Base Package, request an [update](https://github.com/GsTYPO3/base-packages/issues/new/choose)
using the `Update a Base Package` issue template. A pull request containing
your Base Package will automatically be created from the default branch and
linked to the created issue.

## Base Package explained

TYPO3 Sitepackage Builder Base Packages are Composer packages of type
`typo3-base-package` and with a predefined folder structure. The `composer.json`
extra section is used to additionally describe the base package e.g. with the
supported TYPO3 core versions.

### Directory Structure

The following example shows the directory structure of a base package:

```text
public/
    images/
        preview.png
    templates/
        skeletons/
            10.4/
            11.5/
            share/
composer.json
```

#### The `public/images` folder

This folder contains the preview image `preview.png`. It is web optimized image
with the size 460x720 pixels (width x height) and a maximum file size of
100 kilobytes. PNG is the preferred file format.

If you create an other image file format, you also have to change the file name
with `images.preview` see below.

#### The `templates/skeletons` folder

This folder contains the a subfolder for each supported core version containing
the templates. The templates are Twig files, images, css, or scss files only.

#### The `templates/skeletons/share` folder

This folder contains shared templates used for all core version.

### The Manifest (`composer.json`)

The `composer.json` contains the edge information about the Base Package. The
following keys are supported in `extra.typo3/base-package`.

#### The `title` property

This property contains the title shown at the overview of the base packages and
is mandatory.

#### The `description` property

This property contains the description shown at the overview of the base
packages and is mandatory.

#### The `core-versions` property

This property contains the array of supported core versions by this base package
which is shown at the overview of the base packages and is mandatory.

#### The `images.preview` property

This property contains the image shown at the overview of the base packages and
is optional. It is the relative path from the `public` folder to the image. The
default value is `images/preview.png`.
