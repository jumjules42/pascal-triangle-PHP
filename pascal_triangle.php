<?php
    function pascalTriangle($height) {
        $floors = array(array(1));

        for($i = 0; $i < $height; $i++) {
            $newArray = array();
            for($j = 0; $j <= sizeof($floors[$i]); $j++) {
                if($j == 0 || $j == sizeof($floors[$i])) {
                    array_push($newArray, 1);
                    continue;
                } 
                $valueToPush = $floors[$i][$j-1] + $floors[$i][$j];
                array_push($newArray, $valueToPush);
            }
            array_push($floors, $newArray);
        }
        echo '<pre>';
        print_r($floors);
        echo  '</pre>';
    }

    pascalTriangle(10);
