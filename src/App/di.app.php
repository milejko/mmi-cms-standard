<?php

namespace App;

use Cms\App\CmsSkinsetConfig;
use CmsAdmin\App\CmsNavigationConfig;
use Mmi\Mvc\RouterConfig;
use Mmi\Navigation\NavigationConfig;

use function DI\create;

return [
    //configs
    RouterConfig::class                 => create(AppRouterConfig::class),
    NavigationConfig::class             => create(CmsNavigationConfig::class),
    CmsSkinsetConfig::class             => create(AppSkinsetConfig::class),
];