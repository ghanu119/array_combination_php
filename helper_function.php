
<?php

function createArrayCombination ( $totalCount, $index, $arrKeys, $data, &$variation, &$variationList) {
    $currentKey = $arrKeys[ $index ];
    $currentData = $data[ $currentKey ];
    foreach( $currentData as $d ){
        if( $index == 0 ){
            $variation = [];
        }
        $nextIndex = $index + 1;
        if( $nextIndex< $totalCount ){
            $variation[$index] = $currentKey . ':' . $d;
            createArrayCombination( $totalCount, $nextIndex, $arrKeys, $data, $variation, $variationList);
        }else{
            $tmp = [
                $currentKey . ':' . $d
                ];
                
            $variationList[] = array_merge( $variation, $tmp); 
        }
    }
    
}