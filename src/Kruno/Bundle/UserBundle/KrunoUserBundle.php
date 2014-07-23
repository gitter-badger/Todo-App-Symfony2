<?php

namespace Kruno\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KrunoUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
