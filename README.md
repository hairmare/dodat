# Do Da Travis

[![Build Status](https://travis-ci.org/hairmare/dodat.svg?branch=develop)](https://travis-ci.org/hairmare/dodat) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hairmare/dodat/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/hairmare/dodat/?branch=develop) [![Code Coverage](https://scrutinizer-ci.com/g/hairmare/dodat/badges/coverage.png?b=develop)](https://scrutinizer-ci.com/g/hairmare/dodat/?branch=develop)

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
