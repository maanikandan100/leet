<?php

function divideString($s, $k, $fill) {
      $total_length =  strlen($s);
      $a=[];
      $b ="";
        $j =1;

      for($i=0;$i < $total_length; $i++){

        $factor =  $total_length % $k;
        $factor_data =floor($factor);
        // echo "dgbfjhf" . ' '. $factor_data;
       $last_segment = $total_length - $factor_data;
      $last_index_find =  $total_length - $factor_data;
      $last_index_data = $factor_data + $last_segment;
    
          
      	if($j <= $k){
                 
                
      		$b .= $s[$i];
                  $l = $j;
                  if($j == $k){
                        $a[] = $b;
                        $b='';
                        $l = $j;
                     
                       
                  } 
   
                  if($last_index_find  <= $i && $factor_data < $k){
                        $p =1;
                
                        if($i == ($total_length-1)){
                       
                              $data = $k-$factor_data;
                              for($O =0; $O < $data; $O++){
                                  
                                      $b .='x';

                              }
                              
                              $a[] = $b;
                              $b='';
                        } 
         $p++;
                  } else {
                  
                  }
                  $j++;

                  if($l == $k){
                           $j=1;

                  }


      	} else {
                
            }



      }
      print_r($b);
      echo "<br>";
      print_r($a);
        
    }

 

$s = "abcdefghijkl";
$k = 5; $fill = "x";

divideString($s,$k,$fill);
