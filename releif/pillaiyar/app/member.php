<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class member extends Eloquent
{
    protected $collection = 'members';
}
