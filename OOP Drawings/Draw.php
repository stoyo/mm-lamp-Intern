<?php

/*  
 Copyright 2016 All Rights Reserved.
 *
 * Draw
 *
 * @file Draw.php
 * @subpackage Draw
 * @category Packages
 * @author Stoyan Genchev
 *
*/

class Draw{
    
    private $x;
    
    public function __construct($x) {
        $this->x = $x;
    }
    
    # draw a rectangular
    public function rectangular(){
        for($i = 0; $i < $this->x; $i++){
            echo "*";
        }
        echo '<br>';
        
        for($i = 0; $i < $this->x - 2; $i++){
            echo "*" . str_repeat("&nbsp;", ($this->x - 2) * 2) . "*";
            echo "<br>";
        }
        
        for($i = 0;$i < $this->x;$i++){
            echo "*";
        }
    }
    
    # draw a triangle with a bottom left 90° corner
    public function triangle(){
        for($i = 1;$i <= $this->x;$i++){
            echo str_repeat("*", $i);
            echo '<br>';
        }
    }
    
    # draw a triangle with a top left 90° corner
    public function reversedTriangle(){
        for($i = $this->x;$i >= 1;$i--){
            echo str_repeat("*", $i);
            echo '<br>';
        }
    }
   
    # draw a triangle with a top right 90° corner
    public function WeirdTriangle(){
        
        $incrementor = 0;
        
        for($i = $this->x + 1;$i >= 1;$i--){
            echo str_repeat("&nbsp;", ($incrementor++) * 2).str_repeat("*", $i - 1);
            echo "<br>";
        }
    }
    
    # draw a chessboard
    public function chessboard(){
        $white = "<div style=\"width:".($this->x*3)."px;height:".($this->x*3)."px;background-color:#fff; display:inline-block;\"></div>";
        $black = "<div style=\"width:".($this->x*3)."px;height:".($this->x*3)."px;background-color:#000; display:inline-block;\"></div>";

        for($row = 1;$row <= $this->x;$row++){
            for($col = 1;$col <= $this->x;$col++){
                $total = $col + $row;
                if($total % 2 == 0){
                    echo $white;
                }else{
                    echo $black;
                }
            }
            echo '<br>';
        }
    }
    
    #draw a christmas tree
    public function christmastree(){
       
        $firstLine = "";
        
        for($i = 1;$i < $this->x;$i++){
            
            if($i==1){
                $firstLine = str_repeat("_", floor($this->x - $i - 1)) . str_repeat("*", 2 * $i - 1) . str_repeat("_", floor($this->x - $i - 1));
            }
            
            echo str_repeat("_", floor($this->x - $i - 1));
            
            echo str_repeat("*", 2 * $i - 1);
          
            echo str_repeat("_", floor($this->x - $i - 1));
            
            echo "<br>";
            
        }
        
        echo str_repeat($firstLine."<br>", 2);
    }
}