<!DOCTYPE html>
<html>
<body>

<?php
function myfunction($num)//Array Map Example
{
  return($num*$num);
}

$a=array(1,2,3,4,5);
echo ("Array Map"); 
echo "<br>";
print_r(array_map("myfunction",$a));

echo "<br>";
echo "<br>";

function test_odd($var) //Array Filter Example
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
echo ("Array Filter"); 
echo "<br>";
print_r(array_filter($a1,"test_odd"));

echo "<br>";
echo "<br>";

//Array column Example
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name', 'id');
echo ("Array Column"); 
echo "<br>";
print_r($last_names);

?>

</body>
</html>