
<!--<html>
    <head>
        <title>Table</title>
        <body >
            <table  border="1px solid"> 
                </body>
           </html>-->
               
<?php
//First question
 /*function numpat($n){ 
    
  
    for ($i = 0; $i < $n; $i++){ 
    
        
        for ($j = 0; $j <= $i; $j++ ){
    
            echo "*";
            echo "&nbsp; &nbsp;";
     } 

echo "<br>";


    }
}

$n = 5;
 numpat($n);*/
 
    //Second question
 /*for ($i = 0; $i < 5; $i++){ 
    
        
    for ($j = 0; $j <5; $j++ ){
        if($j<=$i){

        echo "*";
        echo "&nbsp; &nbsp;";
 } 
}

echo "<br>";
 }
    for ($i = 0; $i < 5; $i++){ 
    
        
        for ($j = 0; $j <5; $j++ ){
            if($j>=$i){
    
            echo "*";
            echo "&nbsp; &nbsp;";
     } 
    }

echo "<br>";
    }
    */
    //Third Question
    /*for($i=0; $i<10; $i++){
        for( $j=0; $j<10; $j++){
            if($i==$j || $i!==$j){
            echo "$i$j, ";
        }
    }
    echo"<br>";
}
    // Fourth Question
    /*$i=1;
    $j=1;
    $product=$i*$j;
   for($i=1; $i<=6; $i++){
    echo"<tr>";
    for($j=1; $j<=5; $j++){
        $product=$i*$j;
        echo"<td>$i * $j = $product </td> ";
       // echo "$product, ";
    }
   }
echo"<tr>";
    
    </table>*/
   /*for($i=1; $i<=8; $i++){
    echo"<tr>";
    for($j=1; $j<=8; $j++){
        $sum= $i+$j;
        if($sum%2==0){
            echo"<td width=30px height=30px bgcolor= #ffffff></td>";
        }else{
            echo"<td width=30px height=30px bgcolor= #000000></td>";
        }
    }
   }
   echo "</tr>";
   ?>
   </table>*/
   $i=0;
   $j=0;
   for($i=0; $i<=5; $i++){
    for($j=0; $i<=5; $j++){
        if($j==$i){
        echo"*";
        echo"<br>";
    }
   }
}

   ?>
     

