<?php

/**
 * This file is part of the Miny framework.
 * (c) Dániel Buga <daniel@bugadani.hu>
 *
 * For licensing information see the LICENSE file.
 */

namespace Modules\Annotation;

use Miny\Application\BaseApplication;

class Module extends \Miny\Modules\Module
{
    public function init(BaseApplication $app)
    {
        //Alias the old interface name to the current interface
        $app->getContainer()->addAlias(
            'Modules\\Annotation\\Reader',
            'Annotiny\\Reader'
        );
        //Alias the interface to the implementation
        $app->getContainer()->addAlias(
            'Annotiny\\Reader',
            'Annotiny\\AnnotationReader'
        );
    }
}
