<?php

    $namesArray = array();
    $errors = array();
    $page = 1;
    $chosenOne = '';

    if(isset($_GET['names'])){
        if(!empty($_GET['names'])){
            $names = $_GET['names'];
            

            $namesArray = removeWhite(explode(",",trim($names,",")));

            $hasErrors = validate($namesArray);

            if(!$hasErrors){
                $page = 2;
                if(isset($_GET['do_math'])){
                    $page = 3;
                    $chosenOne = $namesArray[array_rand($namesArray)];
                }
                
            }

            
        }else {
            array_push($errors, 'Sorry, you need add at least one name');
        }
    }


    function removeWhite($names){
            $array = array();
            foreach($names as $name) {
                array_push($array, trim($name, ' '));
            }
            return $array;
    }



    function validate($names){
        global $errors;
        $hasErrors = false;

        if(count($names) <= 1){
            array_push($errors, 'Sorry, you need at least two names');
            $hasErrors = true;
        }

        foreach($names as $name){
            if(strlen($name) < 3 ){
                array_push($errors, 'Sorry, names must be at least three characters');
                $hasErrors = true;
            }
        }

        return $hasErrors;
    }

?>
