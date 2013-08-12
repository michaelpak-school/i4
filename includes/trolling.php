<?php
class Filler {

	private function random($arr, $seed_number = NULL) {
		if(!$seed_number) {
			return $arr[array_rand($arr)]; 
		}
		else {
			return $arr[$seed_number % count($arr)]; 
		}
	}

	public function random_quote($seed_number = NULL) {	
		$quotes = query(query_select(array(
			"TABLE" => "i3_Quotes"))); 
		$tmp = array(); 
		foreach($quotes as $quote) {
			$tmp[] = $quote["quote"]; 
		}
		return $this->random($tmp, $seed_number); 
	}

	private $celebs = array(
		"Michael Bluth", 
		"John Harvard", 
		"Barack Obama", 
		"Bill Gates", 
		"Amanda Bynes", 
		"Ender Wiggin",
		"Peter Wiggin", 
		"Valentine Wiggin", 
		"Bean Delphiki", 
		"Hilary Duff", 
		"Hannah Montana", 
		"Miley Cyrus"); 
	
	public function random_celeb($seed_number = NULL) {		
		return $this->random($this->celebs, $seed_number); 
	}
} 

$filler = new Filler(); 
?>
