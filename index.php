<?php 
require 'helper_function.php';

$arrData = [
    'A' => [
            'A1',
            'A2',
        ],
    'B' => [
            'B1',
            'B2',
        ],
    'C' => [
            'C1',
            'C2',
        ],
    'D' => [
            'D1'
        ],
];

    $arrKeys = array_keys( $arr );
    $totalArrEl = count( $arrKeys );
    $variationList = [];
    $v = [];
    createArrayCombination( $totalArrEl, 0, $arrKeys, $arr, $v, $variationList );

    foreach( $variationList as &$v ){
        $v = implode( ', ',$v);
    }

    print_r( $variationList );

    // RESULT:
    /**
     Array
        (
            [0] => A:A1, B:B1, C:C1, D:D1
            [1] => A:A1, B:B1, C:C2, D:D1
            [2] => A:A1, B:B2, C:C1, D:D1
            [3] => A:A1, B:B2, C:C2, D:D1
            [4] => A:A2, B:B1, C:C1, D:D1
            [5] => A:A2, B:B1, C:C2, D:D1
            [6] => A:A2, B:B2, C:C1, D:D1
            [7] => A:A2, B:B2, C:C2, D:D1
        )


     *  */ 