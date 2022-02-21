<?php

namespace Fadlisaad\ExtEnvManager;

use Encore\Admin\Extension;

class ExtEnvManager extends Extension
{
    public $name = 'ext-env-manager';

    public $menu = [
        'title' => 'Extended Env Manager',
        'path'  => 'ext-env-manager',
        'icon'  => 'fa-gears',
    ];
}
