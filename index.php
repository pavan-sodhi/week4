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
	$date21=date('Y/m/d');
	$str="Rocky Balboa";
	$year= array("2012", "396", "300","2000", "1100", "1089");
	echo br.hr."<h3> Week 4 HomeWork </h3>".hr."<h3> 1.</h3> ";
	echo br."The value of \$date: ".$date.br;
	$tar = "2017/05/24"; 
	echo "<h3>The value of \$tar:</h3> ".$tar;
	echo br."The value of \$year: ";
	print_r($year);
//	echo br."var dump".br;
//	var_dump($tar);
	echo br.hr;
	//Call diifferent functions

 	homework::replace1($date);
	homework::compare1($date,$tar);
	homework::search22($date21);
	homework::wordc($date);
	homework::six($str);
	homework::seven($str);
	homework::eight($date);
	homework::nine($date);
	homework::ten($year);


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

	public static function search22($date21)  
	{
	echo "<h3>4.</h3>";
	echo "The positions of '/' in \$date ".$date21." are : ";
	
	$chr = '/';
	$lastPos = 0;
	$positions = array();
	while (($lastPos = strpos($date21, $chr, $lastPos)) !== false)
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
	echo hr."<h3> 5.</h3>";
	$wc1=str_word_count($date);	
	echo br." Number of words in the date ".$wc1.hr;
	}


	Public static function six($str)
	{
	echo "<h3>6.</h3>";
        echo br." Length of my string including space  ".$str.br;
	echo "is ".strlen($str).br.hr;

	} // End of function six

	public static function seven($str)
	{
	echo "<h3>7.</h3>";
	echo br."The ASCII value of the first character of my string ".$str." is ".ord($str).hr; 
	}// end of seven

	public static function eight($date)
	{
	
	echo "<h3>8.</h3>";
	echo "Last 2 characters in ".$date." are :".substr($date, -2).br;
	echo "Last 2 charcters in ".$date." individually are :".$date[Strlen($date)-2]." and ".$date[strlen($date)-1];
	}
	
	public static function nine($date) 

	{
	 echo hr."<h3>9.</h3>".br;
	 $x1=(str_replace("-","/",$date));
	 echo "Replacing with / : ".$x1.br;
	 $x2=explode("/",$x1);
	 print_r($x2);
	 $x3=implode(" ",$x2);
	 echo br."Implode :";
	 echo $x3;
	 echo br."Array Values with Space in between : ";
	 foreach ($x2 as $value)
	 {echo "$value ";
	 }

	
	}//class 9


	public static function ten($year)
	{ 
	echo hr.br."<h3> 10 </h3>";
	print_r($year);
	foreach($year as $value1)
	 { echo br."$value1 ";
	 	$value1= date('L', strtotime("$value1-01-01"));
	  	for ($i = 0; $i < 1; $i++)
	 	{
	   	 switch($value1)
	    	{ 
	  	 case '1':
	  	 print("is a Leap Year.");
	  	 break;
	  	 default:
	  	print("is not a Leap year. ");
	     	break;
	        }  //end switch
	
		} //end for
	 } //end foreach

     }// class ten

	
} //class homework

?>
