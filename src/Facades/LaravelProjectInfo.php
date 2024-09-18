<?php

namespace KaanAtalay\LaravelProjectInfo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KaanAtalay\LaravelProjectInfo\LaravelProjectInfo
 */
class LaravelProjectInfo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \KaanAtalay\LaravelProjectInfo\LaravelProjectInfo::class;
    }
}
