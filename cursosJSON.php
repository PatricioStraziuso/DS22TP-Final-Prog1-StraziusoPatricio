<?php
$o = $_GET['o'];
if ($o === "i" || $o === "I"){
    $v = [
        ['code' => '111', 'curso' => 'IS11'],
        ['code' => '112', 'curso' => 'IS12'],
        ['code' => '121', 'curso' => 'IS21'],
		['code' => '122', 'curso' => 'IS22'],
		['code' => '131', 'curso' => 'IS31'],
		['code' => '132', 'curso' => 'IS32']
    ];
}
elseif ($o === "p" || $o === "P"){
    $v = [
        ['code' => '211', 'curso' => 'PP11'],
        ['code' => '212', 'curso' => 'PP12'],
        ['code' => '221', 'curso' => 'PP21'],
		['code' => '222', 'curso' => 'PP22'],
		['code' => '231', 'curso' => 'PP31'],
		['code' => '232', 'curso' => 'PP32']
    ];
}
elseif ($o === "i" || $o === "I"){
    $v = [
        ['code' => '311', 'curso' => 'ITI11'],
        ['code' => '312', 'curso' => 'ITI12'],
        ['code' => '321', 'curso' => 'ITI21'],
		['code' => '322', 'curso' => 'ITI22'],
		['code' => '331', 'curso' => 'ITI31'],
		['code' => '332', 'curso' => 'ITI32']
    ];
}
else{
    $v = [
        ['code' => 'e', 'curso' => 'ERROR: NO ENCONTRADO'],
    ];
}
header('Content-Type: application/json');
echo json_encode($v);