<?php

namespace Reliva\EnvManager;

use OpenAdmin\Admin\Extension;

class EnvManager extends Extension
{
    public $name = 'env-manager';

    public $menu = [
        'title' => 'Env Manager',
        'path'  => 'env-manager',
        'icon'  => 'fa-gears',
    ];
}
