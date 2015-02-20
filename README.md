# Do Da Travis

[![Build Status](https://travis-ci.org/hairmare/dodat.svg?branch=develop)](https://travis-ci.org/hairmare/dodat) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hairmare/dodat/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/hairmare/dodat/?branch=develop) [![Code Coverage](https://scrutinizer-ci.com/g/hairmare/dodat/badges/coverage.png?b=develop)](https://scrutinizer-ci.com/g/hairmare/dodat/?branch=develop) [![Latest Stable Version](https://poser.pugx.org/hairmare/dodat/v/stable.svg)](https://packagist.org/packages/hairmare/dodat) [![Total Downloads](https://poser.pugx.org/hairmare/dodat/downloads.svg)](https://packagist.org/packages/hairmare/dodat) [![Latest Unstable Version](https://poser.pugx.org/hairmare/dodat/v/unstable.svg)](https://packagist.org/packages/hairmare/dodat) [![License](https://poser.pugx.org/hairmare/dodat/license.svg)](https://packagist.org/packages/hairmare/dodat)

Run scripts from ``.travis.yml``.

## Install

```bash
composer require --dev hairmare/dodat
```

## Usage

Run all the ``scripts`` from ``.travis.yml``.

```bash
./vendor/bin/dodat
```

Display help and options.

```bash
./vendor/bin/dodat help
```

## Limitiations

* Does not properly pass along color in output
* Has no way to skip running certain scripts (like ocular upload)
* Can't run anything besides basic scripts (no before_script support)
* Doesnt pass exit codes (so not usable in a commit hook yet)
