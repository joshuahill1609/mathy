<?php

namespace jjh\Mathy;

use Illuminate\Database\Eloquent\Model;

class Mathy extends Model
{
    public function sumz($a, $b)
    {
       return $a + $b;
    }
}
