<!-- Task 1 === php string 1. Write a PHP script to : -->
<?php
echo('=====Task One=====');
echo '<br><br>';
$string="Class a backend";
$a = strtolower($string);
$b = strtoupper($string);
$c = ucfirst($string);
$d = ucwords($string);

echo"$a","<br> ","$b", "<br> ","$c", "<br> ","$d";

?>
<br>
<br>


<!-- Task 2 === Write a PHP script to split the following string -->

<?php 
echo('=====Task Two=====');
echo '<br><br>';
   $str = '082307';
   echo substr(chunk_split($str, 2 , ":"), 0,-1);
 
   ?>
<br>
<br>

<!--Task 3 === Write a PHP script to check whether a string contains a specific string? -->

<?php
echo('=====Task Three=====');
echo '<br><br>';
$str = 'Hello';
if (strpos($str,'Hello') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }

?>
<br>
<br>

<!-- Write a PHP script to extract the file name from the following -->
<?php
echo('=====Task Four=====');
echo '<br><br>';
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>



<br>
<br>
<!-- Write a PHP script to extract the user name from the following email ID -->
<?php
echo('=====Task Five=====');
echo '<br><br>';
$emailID  = 'Hello@example.com';
$user = strstr($emailID, '@' , true);
echo $user."\n";
?>

<br>
<br>

<!-- Write a PHP script to get the last three characters of a string -->
<?php
echo('=====Task Six=====');
echo '<br><br>';
$str1 = 'Hello@example.com';
echo substr($str1, -3)."\n";
?>
<br> <br>

<!-- Write a PHP script to generate simple random passwords [do not use rand() function] from a given string -->

<?php
echo('=====Task Seven=====');
echo '<br><br>';
function generateRandom($len){
$str_original="orange coding academy";
$shuffled = str_shuffle($str_original);
$result= substr($shuffled, 0, $len);
return $result;
};

echo generateRandom(7);
?>

<br>
<br>
<!-- Write a PHP script to replace the first 'the' of the following string with 'That' -->
<?php
echo('=====Task Eight=====');
echo '<br><br>';
$str="the quick brown fox jumps over the lazy dog.";
echo preg_replace("/the/","Hey",$str,1);

?>

<br>
<br>
<!-- Write a PHP script to find the first character that is different between two strings -->
<?php 
echo('=====Task Nine=====');
echo '<br><br>';
$string1="Football";
$string2="Footboll";
$pos = strspn($string1 ^ $string2, "\0");
printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);

?>
<br>
<br>
<!-- Write a PHP script to put a string in an array. -->
<?php
echo('=====Task Ten=====');
echo '<br><br>';
$print1="Twinkle, twinkle, little star,\n How I wonder what you are.\n Up above the world so high,\n Like a diamond in the sky.";
$arrayTest=explode("\n",$print1);

var_dump($arrayTest);

?>

<br>
<br>
<!-- Write a PHP script to print the next character of a specific  -->
<?php 
echo('=====Task Eleven=====');
echo '<br><br>';
function nextcharacter($character){
  $character_ascii=ord($character);
  if($character_ascii == 122 ){
      return "a";
  } else if ($character_ascii == 90)
  {
      return "A";
  }
  else{
      $next_character_ascii=$character_ascii+1;
      $next_character=chr($next_character_ascii);
      return $next_character;
  }

}

echo nextcharacter("z");
?>
<br> <br>

<!-- Write a PHP script to remove a part of a string from the beginning.  -->

<?php
echo('=====Task Twelve=====');
echo '<br><br>';
$str = 'Orange@example.com';
$str= substr($str, strlen('Orange@'));
?>
<br> <br>

<!--  Write a PHP script to insert a string at the specified position in a given string-->

<?php
echo('=====Task Thirteen=====');
echo '<br><br>';
$original_string = 'The brown fox';
$string_to_insert = 'quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert. ' ', $insert_pos, 0);
echo $new_string."\n";
?>
<br> <br>


<!-- Write a PHP script to get the first word of a sentence.  -->

<?php
echo('=====Task Fourteen=====');
echo '<br><br>';
$word = 'The quick brown fox';
$word2 = explode(' ',trim($word));
echo $word2[0];
// $str_original = " " , "kkj";
// $pos2=strpos($str_original," ");
// $str_first_word_removed=substr($str_original,$pos2);

?>

<br> <br>

<!-- Write a PHP script to remove all leading zeroes from a string -->

<?php
echo('=====Task Fifteen=====');
echo '<br><br>';

// $Str = '000547023.24';
// $str2 = ltrim($str, '0');
// echo $str2."\n";
$number = "000005555.24";
$zero_removed=ltrim($number,"0");

echo "original number :(".$number.") <br>";
echo "leading zeros removed :" .$zero_removed. "<br>";

?>

<br> <br>
<!-- Write a PHP script to remove trailing slash from a string -->
<?php
echo('=====Task Sixteen=====');
echo '<br><br>';
$trail = "Go Go Go//";
echo rtrim($trail, '/')."\n";
?>
<br> <br>

<!-- Write a PHP script to get the characters after the last '/' in an url -->
<?php
echo('=====Task Seventeen=====');
echo '<br><br>';

$url2 = "http://www.example.com/5478631";
$file_name = substr(strrchr($url2,"/"),1);

echo "original url(".$url2.") <br>";
echo "file_name is :".$file_name."<br>";
?>
<br> <br>

<!-- Write a PHP script to replace Special  characters from the following string -->

<?php
echo('=====Task Eighteen=====');
echo '<br><br>';
//String containing non-alphanumeric characters
$str = "this*is-a'test ()";
var_dump($str);

//Remove any character that isn't A-Z, a-z or 0-9.
$str = preg_replace("/[^A-Za-z0-9]/", '', $str);
var_dump($str);

?>
<br> <br>

<!-- Write a PHP script to select first 5 words from the following string -->

<?php
echo('=====Task Ninteen=====');
echo '<br><br>';

// $my_string = 'So What Are you doing right now ??';
// echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";

$str5_original="The quick brown fox jumps over the lazy dog";
$str5_seperated=explode(" ",$str5_original);
$array_sliced=array_splice($str5_seperated,0,5);
$str_updated2=implode($array_sliced," ");

echo "- original string (".$str5_original." )<br>";
echo "first 5 words :".$str_updated2."<br>";
?>
<br> <br>

<!-- Write a PHP script to remove comma(s) from the following numeric string -->

<?php
echo('=====Task twenty=====');
echo '<br><br>';

$str6_original='2,543.12';
$commas_removed=str_replace(",","",$str6_original);

echo "- original string (".$str6_original." )<br>";
echo "Commas removed :".$commas_removed."<br>";

?>

<br> <br>

<!-- Write a PHP script to print letters from 'a' to 'z' -->


<?php
echo('=====Task twenty-one=====');
echo '<br><br>';

 
$alpha = range( 'A', 'Z' );
 
foreach ( $alpha as $alpha1 ){
    echo "$alpha1\n";
}
 
?>