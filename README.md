# Yandex OAuth2 client provider

[![Build Status](https://img.shields.io/travis/rakeev/oauth2-yandex.svg)](https://travis-ci.org/rakeev/oauth2-yandex)
[![Latest Version](https://img.shields.io/packagist/v/aego/oauth2-yandex.svg)](https://packagist.org/packages/aego/oauth2-yandex)
[![License](https://img.shields.io/packagist/l/aego/oauth2-yandex.svg)](https://packagist.org/packages/aego/oauth2-yandex)

This package provides [Yandex](https://passport.yandex.ru) integration for [OAuth2 Client](https://github.com/thephpleague/oauth2-client) by the League.

## Installation

```sh
composer require sergey-sla/oauth2-yandex
```

## Usage

```php
$provider = new Aego\OAuth2\Client\Provider\Yandex([
    'clientId' => 'b80bb7740288fda1f201890375a60c8f',
    'clientSecret' => 'f23ccd066f8236c6f97a2a62d3f9f9f5',
    'redirectUri' => 'https://example.org/oauth-endpoint',
]);
```
