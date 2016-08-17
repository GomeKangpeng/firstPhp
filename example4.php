<?php

namespace foo;

use My\Full\Classname as Another;
use My\Full\NSname;
use \ArrayObject;

$obj = new namespace\Another ();
$obj = new Another ();
NSname\subns\func ();
$a = new ArrayObject (array (1));
?>