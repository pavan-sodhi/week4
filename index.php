<?php

const br= '</br>';
const hr= '<hr>';
$obj = new main();
$i=0;
class main
{
	function __construct() 
	{
	date_default_timezone_set("America/New_York");
	$date=date('Y-m-d');
	$year= array("2012", "396", "300","2000", "1100", "1089");
	echo br.hr."<h3> Week 4 HomeWork </h3>".br.hr;
	echo br."The value of \$date: ".$date.br;
	$tar = "2017/05/24"; 
	echo "The value of \$tar: ".$tar;
	echo br."The value of \$year: ";
	print_r($year);
//	echo br."var dump".br;
//	var_dump($tar);
	echo br.hr;
	//Call diifferent functions

 	homework::replace1($date);
	homework::compare1($date,$tar);
	homework::search22($tar);
	homework::wordc($date);

// public function ten ($year)
//{
//foreach($year as $years) {
//$years = date('L', strtotime("$years-01-01"));
//for ($i = 0; $i < 1; $i++)
//{
//switch($years)
//{
//case '1':
//print("TRUE ");
//break;
//default:
//print("False ");
//break;
//}  //end switch
//	
//	} //end for
//	}  //end foreach

//}

//homework::ten($year);

  }// End of Construct


	public function __destruct() 
	{
	echo br.hr.'this is destructor'.hr;
	var_dump();
	}

}// End of Class main

// Homework Parts 
// Replace “-“ in $date with “/“ and print out the result. (8%)

Class homework 
{
	public function replace1($date)
	{
	$date11 = str_replace('-', '/', $date);
	echo br."<h3>2. </h3>"."Replacing - with / : ".$date11.br.hr;
	}

	public static function compare1($date,$tar)
	{
	echo "<h3>3.</h3>"."Comparing ".$date." with ".$tar.br;
	//echo $date.br.$tar;
	if (strcmp($date, $tar) >0) { echo '"The Future"'.br.hr;} 
	else if (strcmp($date, $tar) <0) { echo '"The Past"'.br.hr;}
	else if (strcmp($date, $tar) ==0) { echo '"Oops"'.br.hr;}
	}

	public static function search22($tar)  
	{
	echo "<h3>4.</h3>";

	echo "The positions of '/' in \$date are: ";
	$chr = '/';
	$lastPos = 0;
	$positions = array();
	while (($lastPos = strpos($date, $chr, $lastPos)) !== false)
	{ 		
	$positions[] = $lastPos;
	$lastPos = $lastPos + strlen($chr);
	}
	foreach ($positions as $value)
	{
	echo $value.' ';
	}

	}// search class
 
 	public static function wordc($date)	
	{
	echo "<h3> 5.</h3>";
	$wc1=str_word_count($date);	
	echo hr." Number of words in the date ".$wc1;
	}
	
//	public static function ten($year)
//	{
//	foreach($year as $years)
//	{
//	$years = date('L', strtotime("$years-01-01"));
//	for ($i = 0; $i < 1; $i++)
//	{
//	switch($years)
//	{
//	 case '1':
//	 print("TRUE ");
//	 break;
//	 default:
//	 print("False ");
//	 break;
//	}  //end switch
	
//	} //end for
//	}  //end foreach

//}

	
} //class homework

?>
