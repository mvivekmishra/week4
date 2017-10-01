<?php

$obj = new main();

   
    class main {

    	public function __construct() {
			$date=date('Y-m-d');
			$display= 'The value of $date :'.$date.'<br>';
			allfunction::printthis($display);

			$tar= "2017/05/24";
			echo 'The value of $tar: ' . $tar.'<br>';
			$year= array("2012","396","300","2000","1100","1089");
	
	
			echo 'The value of $ year: ';
			print_r($year);
			echo '<hr>';
	
	
			echo 'output for 2 :'.str_replace("-" ,"/",$date);
			
			echo '<hr>'. 'output for 3:';
			allfunction::compare($date,$tar);
	
			echo '<hr>'. 'ouput 4:' . $date.'<br>';
			allfunction::match();
	
			echo '<hr>' .'output 5:'.'<br>';
			echo str_word_count($date);
			echo '<br>'.'another way to cpunt :'. '<br>';
			allfunction::wrdcount($date);
			
			echo '<hr>'.'output 6:'. 'lenth of string :'.strlen($date).'<br>';
			
			echo '<hr>'.'output 7:'. 'ASCII Value:' .ord("$date") ;
			
			echo '<hr>'.'output 8:'. 'Last two char:' .substr($date, -2);
			
			echo '<hr>'.'output 9:'. 'array:' ;
			allfunction ::strarr();
			
			echo '<hr>'.'output 10:'. 'Leap year' ;
			allfunction::leap();
	
    }
		}
	class allfunction {
		
		// for print 

		static public function printthis($text) {
		print($text);
		}				
		
		//for compare

		static public function compare($text1, $text2)
		{
			$result=strnatcasecmp($text1, $text2);
		
			if ($result>0)
			{
				echo 'the future';
			}elseif($result<0)
			{
				echo 'the past';
			}elseif ($result===0)
						{
							echo 'Oops';
						}
		}

		//For string match

		static public function match()
		{
			$test=date('Y/m/d');
			//$j= strlen($test);
			//$count = 0;
			$find = "/";
			$positions = array();
			$pos = -1;
				while (($pos = strpos($test, $find, $pos+1)) !== false) {
						$positions[] = $pos;
					}

						$result = implode(' ', $positions);
						print_r($result);
		}
		
		
		// word count

		static public function wrdcount($text)
		{
			echo str_word_count($text);

		}
		
		//into array

		static public function strarr()
		{
			$text="2017/09/30";
			$text_new=explode("/",$text);
			 print_r($text_new);
		}
		
		//for leap year
		
		static public function leap()
		{
		$years = range(2000, 2017);

		foreach ($years as $year) {
		$isLeapYear = (bool) date('L', strtotime("$year-01-01"));
		printf(
        '%d %s a leap year%s',
        $year,
        $isLeapYear ? 'is' : 'is not',
        PHP_EOL
    );
		
		}
		}
		
	
	}  
	  
	

?>
