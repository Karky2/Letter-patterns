<?php 
// Outer loop handles number of rows
/*for ($i = 0; $i < 5; $i++)
{
// inner loop handles number of columns
for($j = 0; $j <= $i; $j++ )
{
// Print stars
echo "* ";
}
// go to new line after each row pattern is printed
echo "\n";
}
*/

//Call function and send number of lines as parameter


/*function print_pattern($num)
{
// Outer loop handles number of rows
for ($i = 0; $i < $num; $i++)
{
// inner loop handles indentation
for($k = $num; $k > $i+1; $k-- )
{
// Print stars
echo "  ";
}
// inner loop handles number of stars
for($j = 0; $j <= $i; $j++ )
{
// Print stars
echo "* ";
}
// go to new line after each row pattern is printed
echo "\n";
}
}
//Call function and send number of lines as parameter
$num = 5;
print_pattern($num);
*/
// Php code to demonstrate
// star pattern
 
// Function to demonstrate
// printing pattern
/*$i =0;
$j =0;
function pypart($n)
{
  
 // Outer loop to handle number
 // of rows in this case
 for ($i = 0; $i < $n; $i++)
 {
   
  // inner loop to handle
  // number of columns
  // values changing acc.
  // to outer loop
  for($j = 0; $j <= $i; $j++ )
  {
    
   // Printing stars
   echo "* ";
  }
 
  // ending line after
  // each row
  echo "\n";
 }
}
 
 // Driver Code
 $n = 5;
 pypart($n);*/
 /*function numpat($n)
{
  
 // initializing starting number
 $num = 1;
 
 // outer loop to handle
 // number of rows
 // n in this case
 for ($i = 0; $i < $n; $i++)
 {
 
  // inner loop to handle
  // number of columns
  // values changing acc.
  // to outer loop
  for ($j = 0; $j <= $i; $j++ )
  {
    
   // printing number
   echo "$num";
  }
   
   // incrementing number
   // at each column
   $num = $num + 1;
 
  // ending line after
  // each row
  echo "<br>";
 }
}
 
 // Driver Code
 $n = 5;
 numpat($n);
 */
 
 
?>
