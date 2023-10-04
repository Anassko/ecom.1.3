<?php   

function namelengthIsValid($nameToValid){

$length =strlen($nameToValid);
$responses=[
    'isValid'=> true,
    'msg'=>''
];
};

if ($length <2) {
    $responses=[
        'isValid'=> false,
        'msg'=>'trop court'
    ];
};
elseif ($length >10 ) {
    $responses=[
        'isValid' =>false,
        'msg'=>'trop long'
    ];
}
return $responses
};