<?php

namespace hojabbr\PersianSlug;

class PersianSlug
{
    public static function slug($string, $separator = '-', $limit = 8)
    {
        $string = str_replace('‌', ' ', $string);
        $string = \Illuminate\Support\Str::words($string, $limit, '');
        $string = mb_ereg_replace('([^آ-ی۰-۹a-z0-9]|-)+', $separator, $string);
        return trim($string, $separator);
    }
}
