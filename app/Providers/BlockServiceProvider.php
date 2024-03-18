<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use VanOns\Laraberg\Laraberg;

class BlockServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Laraberg::registerBlockType(
            'accent/jeffrey',
            [],
            function ($attributes, $content) {
                return view('blocks.jeffrey', compact('attributes', 'content'));
            }
        );
    }
}
