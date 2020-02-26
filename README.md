[![pipeline status](https://gitlab.com/jitesoft/open-source/php/exceptions/badges/master/pipeline.svg)](https://gitlab.com/jitesoft/open-source/php/exceptions/commits/master)
[![coverage report](https://gitlab.com/jitesoft/open-source/php/exceptions/badges/master/coverage.svg)](https://gitlab.com/jitesoft/open-source/php/exceptions/commits/master)
[![Back project](https://img.shields.io/badge/Open%20Collective-Tip%20the%20devs!-blue.svg)](https://opencollective.com/jitesoft-open-source)
[![PHP-Version](https://img.shields.io/packagist/php-v/jitesoft/exceptions.svg)](https://packagist.org/packages/jitesoft/exceptions)

# Exceptions

Exception classes commonly used in Jitesoft php projects.  

All the exception classes implements a toArray method and implements the JsonSerializable interface.  
The structure of the classes is supposed to be as logic as possible. If anything seems off, please post a issue or make a pull-request.
No Exceptions will be moved or renamed without a new major version release.  

## Good to know!

The master branch (and versions above and equal to 3.x) requires php 7.4.2 or greater. The `v2` branch will although be 
maintained with new exceptions just as with the other branches, while they will not be able to make use of the latest
php features which v3+ requires.

## Changes

#### 3.0.0

* Bumped minimum version of php to 7.4.2

#### 2.0.0

* All namespaces have had the `Exception` part of their name removed.
