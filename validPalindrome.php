<?php

class Palindrome {
	
	protected $str;
	
	function __construct($str) {
		$this->str = $str;
	}
	
	function checkPalindrome($string) {
		$length = strlen($string);
		if($length == 1 || $length == 0) {
			return TRUE;
		}
		
		if(substr($string, 0, 1) == substr($string, ($length-1), 1)) {
			return $this->checkPalindrome(substr($string, 1, ($length-2)));
		}
		else {
			return FALSE;
		}
	}
		
	function canItBePalindrome($uString = NULL) {
		$uString = (empty($uString)) ? $this->str : $uString;
		
		if($this->checkPalindrome($uString)) { 
			//return "It is Palindrome";
			return TRUE;
		}
		else {
			for($i=0; $i<strlen($this->str); $i++) {
				//echo substr($this->str, 0, $i).substr($this->str, $i+1, (strlen($this->str)-$i)). " - ";
				$checkPalindrome = $this->checkPalindrome(substr($uString, 0, $i).substr($uString, $i+1, (strlen($uString)-$i)));
				//echo ($checkPalindrome) ? "Palindrome<br>" : "No<br>";
				if($checkPalindrome) return TRUE;
			}
		}
		
		return FALSE;
	}
}

$palindrome = new Palindrome("abc");
//echo $palindrome->canItBePalindrome();
var_dump($palindrome->canItBePalindrome());