# Monster.com RSS Client

[![Latest Version](https://img.shields.io/github/release/jobapis/jobs-monster.svg?style=flat-square)](https://github.com/jobapis/jobs-monster/releases)
[![Software License](https://img.shields.io/badge/license-APACHE%202.0-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/jobapis/jobs-monster/master.svg?style=flat-square&1)](https://travis-ci.org/jobapis/jobs-monster)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/jobapis/jobs-monster.svg?style=flat-square)](https://scrutinizer-ci.com/g/jobapis/jobs-monster/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/jobapis/jobs-monster.svg?style=flat-square)](https://scrutinizer-ci.com/g/jobapis/jobs-monster)
[![Total Downloads](https://img.shields.io/packagist/dt/jobapis/jobs-monster.svg?style=flat-square)](https://packagist.org/packages/jobapis/jobs-monster)

This package provides [Monster](https://www.monster.com/) RSS feed support for [Jobs Common](https://github.com/jobapis/jobs-common).

## Installation

To install, use composer:

```
composer require jobapis/jobs-monster
```

## Usage
Create a Query object and add all the parameters you'd like via the constructor.

*Note: The Monster RSS feed only provides jobs from the past 24 hours.*
 
```php
// Add parameters to the query via the constructor
$query = new JobApis\Jobs\Client\Queries\MonsterQuery();
```

Or via the "set" method. All of the parameters documented in Indeed's documentation can be added.

```php
// Add parameters via the set() method
$query->set('q', 'engineering');
```

You can even chain them if you'd like.

```php
// Add parameters via the set() method
$query->set('where', 'Chicago, IL')
    ->set('page', '2');
```
 
Then inject the query object into the provider.

```php
// Instantiating a provider with a query object
$client = new JobApis\Jobs\Client\Provider\MonsterProvider($query);
```

And call the "getJobs" method to retrieve results.

```php
// Get a Collection of Jobs
$jobs = $client->getJobs();
```

The `getJobs` method will return a [Collection](https://github.com/jobapis/jobs-common/blob/master/src/Collection.php) of [Job](https://github.com/jobapis/jobs-common/blob/master/src/Job.php) objects.

## Testing

``` bash
$ ./vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/jobapis/jobs-monster/blob/master/CONTRIBUTING.md) for details.


## Credits

- [Karl Hughes](https://github.com/karllhughes)
- [All Contributors](https://github.com/jobapis/jobs-monster/contributors)


## License

The Apache 2.0. Please see [License File](https://github.com/jobapis/jobs-monster/blob/master/LICENSE) for more information.
