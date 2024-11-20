<?php

declare(strict_types=1);


namespace Laraspark\Framework\Foundation;

use Illuminate\Foundation\Application;

class WordPressPlugin extends Application
{

    const VERSION = '0.0.0-alpha';

    public function __construct($basePath = null)
    {
        parent::__construct($basePath);
        dd($this);
    }

}
