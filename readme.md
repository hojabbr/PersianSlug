# PersianSlug

Persian Slug generator for Laravel 6

## Installation

Via Composer

``` bash
$ composer require hojjabr/persianslug
```

## Usage

``` php
use hojjabr\PersianSlug\Facades\PersianSlug;

$slug = PersianSlug::slug('سلام خوب هستید؟');  // سلام-خوب-هستید
```
