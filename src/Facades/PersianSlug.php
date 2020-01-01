<?php

namespace hojjabr\PersianSlug\Facades;

use Illuminate\Support\Facades\Facade;

class PersianSlug extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'persianslug';
    }
}
