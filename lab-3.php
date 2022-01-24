<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title> резултати </title>
</head>
<body>
 <h1> РЕЗУЛТАТИ </h1>

<?php
$pr1 = $_POST['pr1'];
$sub = $_POST['sub'];
$question= $_POST['question'];
$pecati= $_POST['pecati'];
$odgovor1 = $_POST['odgovor1'];
$izbor = $_POST['pr7'];
?>

<?php
$result=0; // promenliva za rezultat
if(isset($_POST['pr1'] )) // ZA RADIO BUTTONS 
{
$pr1=$_POST['pr1'];
if($pr1=="dinamicni") //vrednosta od value 
$result++;
}
echo "<br>";

if(isset($_POST['pr2'] ))
{
	$pr2=$_POST['pr2'];
	if($pr2=="bnp")
		$result++;
}
echo "<br>";

 
 if(isset($_POST['pr3'] ))
{
	$pr3=$_POST['pr3'];
	if($pr3=="tri")
		$result++;
}


 if(isset($_POST['pr9'] ))
{
	$pr9=$_POST['pr9'];
	if($pr9=="tip")
		$result++;
}


 if(isset($_POST['pr10'] ))
{
	$pr10=$_POST['pr10'];
	if($pr10=="xis7")
		$result++;
}


///////////////////////////////

if(isset($_POST['pr4-1'])  // ZA CHECKBOX
&& isset($_POST['pr4-2']) // od NAME se site vrednosti ['pr4-1'] ,2,3,4

&& empty($_POST['pr4-3']) 
&&empty( $_POST['pr4-4']))
$result++;

///////////////////////////////
if($pecati=="16")//$pecati e od NAME od 5to prasanje za textarea
{
	$result++; 
} 
	


echo "<br>" . "<br>";
echo "Прашање 5. На излез ќе испечати: " . $pecati; echo "<br>"; 

if ($odgovor1 == "5") // $odgovor1 e od NAME  od 6to prasanje za textarea
	$result++;

echo "Прашање 6. На излез ќе испечати: " . $odgovor1; echo "<br>"; 

if($_POST['pr7']=="c") //pr7 e od SELECT NAME za prasanje 7mo za LISTBOX // "c" e od  OPTION VALUE
	$result ++;


if ($question == "// . /* . <!-- -->")
$result++;

echo "Прашање 8. Коментарите што ги пишавте се :" . $question; echo "<br>";



$vkupno = $result;
echo  "Вкупно освноени бодови: " . $vkupno . "/10";
?>
<a href="labvezba3/lab3-dom.html"> <h3> Обидете се повторно </h3> </a> 
</body>
</html>