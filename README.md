# This repository is no longer maintained

Due to lack of interest, we had to decide to discontinue this repository. 
The CMF project focusses on the [Routing component](https://github.com/symfony-cmf/routing) and [RoutingBundle](https://github.com/symfony-cmf/routing-bundle), which are still in active use by other projects.

This repository will no longer be upgraded and marked as abandoned, but will be kept available for legacy projects or if somebody wants to experiment with the CMF.

You can contact us in the #symfony_cmf channel of the [Symfony devs slack](https://symfony.com/slack).

# Symfony CMF Block Bundle

[![Latest Stable Version](https://poser.pugx.org/symfony-cmf/block-bundle/v/stable)](https://packagist.org/packages/symfony-cmf/block-bundle)
[![Latest Unstable Version](https://poser.pugx.org/symfony-cmf/block-bundle/v/unstable)](https://packagist.org/packages/symfony-cmf/block-bundle)
[![License](https://poser.pugx.org/symfony-cmf/block-bundle/license)](https://packagist.org/packages/symfony-cmf/block-bundle)

[![Total Downloads](https://poser.pugx.org/symfony-cmf/block-bundle/downloads)](https://packagist.org/packages/symfony-cmf/block-bundle)
[![Monthly Downloads](https://poser.pugx.org/symfony-cmf/block-bundle/d/monthly)](https://packagist.org/packages/symfony-cmf/block-bundle)
[![Daily Downloads](https://poser.pugx.org/symfony-cmf/block-bundle/d/daily)](https://packagist.org/packages/symfony-cmf/block-bundle)

Branch | Travis | Coveralls | Scrutinizer |
------ | ------ | --------- | ----------- |
2.1   | [![Build Status][travis_stable_badge]][travis_stable_link]     | [![Coverage Status][coveralls_stable_badge]][coveralls_stable_link]     | [![Scrutinizer Status][scrutinizer_stable_badge]][scrutinizer_stable_link] |
dev-master | [![Build Status][travis_unstable_badge]][travis_unstable_link] | [![Coverage Status][coveralls_unstable_badge]][coveralls_unstable_link] | [![Scrutinizer Status][scrutinizer_unstable_badge]][scrutinizer_unstable_link] |


This package is part of the [Symfony Content Management Framework (CMF)](https://cmf.symfony.com/) and licensed
under the [MIT License](LICENSE).

The BlockBundle provides integration with
[SonataBlockBundle](https://github.com/sonata-project/SonataBlockBundle).
It is used to manage fragments of content, so-called blocks, that are persisted
in a database and can be incorporated into any page layout. The BlockBundle also
provides a few commonly used standard blocks, including the ability to edit them.


## Requirements

* PHP 7.1 / 7.2 / 7.3
* Symfony 3.4 / 4.1 / 4.2
* See also the `require` section of [composer.json](composer.json)

## Documentation

For the install guide and reference, see:

* [symfony-cmf/block-bundle Documentation](https://symfony.com/doc/master/cmf/bundles/block/index.html)

See also:

* [All Symfony CMF documentation](https://symfony.com/doc/master/cmf/index.html) - complete Symfony CMF reference
* [Symfony CMF Website](https://cmf.symfony.com/) - introduction, live demo, support and community links

## Support

For general support and questions, please use [StackOverflow](https://stackoverflow.com/questions/tagged/symfony-cmf).

## Contributing

Pull requests are welcome. Please see our
[CONTRIBUTING](https://github.com/symfony-cmf/blob/master/CONTRIBUTING.md)
guide.

Unit and/or functional tests exist for this package. See the
[Testing documentation](https://symfony.com/doc/master/cmf/components/testing.html)
for a guide to running the tests.

Thanks to
[everyone who has contributed](contributors) already.

## License

This package is available under the [MIT license](src/Resources/meta/LICENSE).

[travis_stable_badge]: https://travis-ci.org/symfony-cmf/block-bundle.svg?branch=2.1
[travis_stable_link]: https://travis-ci.org/symfony-cmf/block-bundle
[travis_unstable_badge]: https://travis-ci.org/symfony-cmf/block-bundle.svg?branch=dev-master
[travis_unstable_link]: https://travis-ci.org/symfony-cmf/block-bundle

[coveralls_stable_badge]: https://coveralls.io/repos/github/symfony-cmf/block-bundle/badge.svg?branch=2.1
[coveralls_stable_link]: https://coveralls.io/github/symfony-cmf/block-bundle?branch=2.1
[coveralls_unstable_badge]: https://coveralls.io/repos/github/symfony-cmf/block-bundle/badge.svg?branch=dev-master
[coveralls_unstable_link]: https://coveralls.io/github/symfony-cmf/block-bundle?branch=dev-master

[scrutinizer_stable_badge]: https://scrutinizer-ci.com/g/symfony-cmf/block-bundle/badges/quality-score.png?b=2.1
[scrutinizer_stable_link]: https://scrutinizer-ci.com/g/symfony-cmf/block-bundle/?branch=2.1
[scrutinizer_unstable_badge]: https://scrutinizer-ci.com/g/symfony-cmf/block-bundle/badges/quality-score.png?b=dev-master
[scrutinizer_unstable_link]: https://scrutinizer-ci.com/g/symfony-cmf/block-bundle/?branch=dev-master
