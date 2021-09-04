<?php
    // The app that checks the chances of a hit 4/6 in lotto game

    function lotto(){
        $numbers = $_GET['numbers'];
        $numbers = [9, 14, 28, 36, 41, 49];

        foreach($numbers as $num){
            echo $num."<br>";
        }
    
        echo "<br><br><br>";
    
        $win = [];
        $i = 1;
    
        while($i < 13){
            $number = mt_rand(1, 49);
    
            if(($i%2) == 0){
                if(!in_array($number, $win)){
                    $win[$i] = $number;
                    $i++;
                }
            } else{
                $i++;
            }
        }
    
        sort($win);
    
        foreach($win as $w){
            echo $w."<br>";
        }
    
        echo "<br><br><br>";
    
        $same = [];
    
        foreach($numbers as $player){
            $count = count($same);
            foreach($win as $computer){
                if($player == $computer){
                    $same[$count] = $player;
                }
            }
        }
    
        sort($same);
    
        foreach($same as $w){
            echo $w."<br>";
        }
    }
    
    $i = 1;
    while(!isset($true)){
        $numbers = [9, 14, 28, 36, 41, 49];

        foreach($numbers as $num){
            echo $num."<br>";
        }
    
        echo "<br><br><br>";
    
        $win = [];
        $i = 1;
    
        while($i < 13){
            $number = mt_rand(1, 49);
    
            if(($i%2) == 0){
                if(!in_array($number, $win)){
                    $win[$i] = $number;
                    $i++;
                }
            } else{
                $i++;
            }
        }
    
        sort($win);
    
        foreach($win as $w){
            echo $w."<br>";
        }
    
        echo "<br><br><br>";
    
        $same = [];
    
        foreach($numbers as $player){
            $count = count($same);
            foreach($win as $computer){
                if($player == $computer){
                    $same[$count] = $player;
                }
            }
        }

        if(count($same) == 4){
            $true = "";
        }

        if(!isset($e)){
            $e = 1;
        }

        $e++;
        echo "<br><br>No.".$e."<br>";
    }