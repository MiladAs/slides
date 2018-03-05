<?php

/*
  By: Ravexina (Milad As)
  --: Design Pattern Basics
  --: Adapter Pttern
    : https://github.com/ravexina
    : https://github.com/ravexina/slides
*/

/// -----------------

if($method == 'x')
{
	$bbank = new abank();
	$bbank->pay($key, $amount);
}
elseif($method == 'y')
{
	$cbabk = new cbank();
	$cbank->('key', $key);
	$cbank->('amount', $amount);
	$cbank->payment();
}
else
{
	//...
}
// we might use it over and over
// what if something changes ...
/// -----------------

class bbankAdaptee{
	function do_payment($id, $amount, $key)
	{
		$bbank = new abank();
        	$bbank->pay($key, $amount);
	}
}

class cbankAdaptee{
	function do_payment($id, $amount, $key)
	{
		$cbabk = new cbank();
	        $cbank->('key', $key);
	        $cbank->('amount', $amount);
	        $cbank->pay();
	}
}

// create object - factory
$object->do_payment($id, $amount, $key);

//end of file
