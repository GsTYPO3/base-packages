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
| [Bootstrap Package](https://get.typo3.dev/wizards/sitepackage/validate/typo3/base-package-bootstrap-package) | For a Sitepackage based on the popular Bootstrap Package | ✅ | ✅ |
| [Community Test Package](https://get.typo3.dev/wizards/sitepackage/validate/typo3/base-package-community-test) | For a Sitepackage based on the Community Test Package | ❌ | ❌ |
| [Fluid Styled Content](https://get.typo3.dev/wizards/sitepackage/validate/typo3/base-package-fluid-styled-content) | For a Sitepackage based on the Fluid Styled Content Extension | ✅ | ✅ |
| [Introduction Package](https://get.typo3.dev/wizards/sitepackage/validate/typo3/base-package-introduction-package) | For a Sitepackage based on the Official TYPO3 Introduction Package | ✅ | ❌ |

## Creating Base Packages

TYPO3 Sitepackage Builder Base Packages are Composer packages of type
`typo3-base-package` and with a predefined folder structure. The `composer.json`
extra section is used to additionally describe the base package e.g. with the
supported TYPO3 core versions.

The following example shows the directory structure of some base packages:

```text
    typo3/
        bootstrap-package/
            public/
                images/
                    preview.png
                templates/
                    skeletons/
                        8.7/
                        9.5/
                        10.4/
                        11.5/
            composer.json
        fluid-styled-content/
            public/
                images/
                    preview.png
                templates/
                    skeletons/
                        8.7/
                        9.5/
                        10.4/
                        11.5/
            composer.json
    vendor/
        base-package/
            public/
                images/
                    preview.png
                templates/
                    skeletons/
                        11.5/
            composer.json
```

### The Manifest (`composer.json`)

The `composer.json` contains the edge information about the base package and
must be of type `typo3-base-package`.

Example `composer.json`:

```json
{
    "name": "typo3/base-package-bootstrap-package",
    "description": "Base package for the generation of a TYPO3 Sitepackage based on bk2k/bootstrap-package at https://get.typo3.org.",
    "license": "GPL-2.0-or-later",
    "type": "typo3-base-package",
    "extra": {
        "typo3/base-package": {
            "title": "Bootstrap Package",
            "description": "Create a Sitepackage based on the popular Bootstrap Package.",
            "core-versions": [
                "8.7",
                "9.5",
                "10.4",
                "11.5"
            ],
            "images": {
                "preview": "images/preview.png"
            }
        }
    }
}
```

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
