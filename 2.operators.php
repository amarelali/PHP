<?PHP
//Arithmetique

//1. addition
$a = 2 + 5;
echo "2 + 5 =";
echo $a;
$a += 1; // $a= $a+1;
echo "\n".$a;
//2. substraction 
$b = 8 - 7;
echo "\n8 - 7 =";
echo $b;
$b -= 1; // $b= $b-1;
echo "\n".$b;
//3. multiplication
$c = 7 * 9;
echo "\n7 * 9 =";
echo $c;
$c *= 2; // $c= $c*2;
echo "\n".$c;
//4. division
$d = 15 / 3;
echo "\n15 / 3 =";
echo $d;
$d /= 2; // $d= $d/2;
echo "\n".$d;
//Module, the rest of division 
$e = 15 % 3;
echo "\n15 % 3 =";
echo $e;
$e %= 2; // $e= $e/2;
echo "\n".$e;

echo "-------------------Comparision------------------";
echo "\n equals :\n";
$a = "1";
$b = 1;
echo "\n".$a == $b; //1 -> true
echo "\n";
echo var_dump($a == $b);
echo "Trying a === b \n";
echo var_dump($a === $b);

echo "\n not equals :\n";
$c = "2";
$d = 3;
echo "\n".$c != $d; //1 -> true
echo "\n";
echo var_dump($c != $d);
echo "Trying c !== d \n";
echo var_dump($c !== $d);
echo var_dump("2" !== 2); 
echo var_dump(3 < 2); 


