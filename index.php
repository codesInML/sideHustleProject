<h1>Recharge Card Generator</h1>

<?php
	

	// first generate a random number given recharge card length
	function genRandomNumber($length = 15) {
	    $nums = '0123456789';

	   // First number shouldn't be zero
	    $out = $nums[mt_rand( 1, strlen($nums)-1 )];  

	   // Add random numbers to your string
	    for ($p = 0; $p < $length-1; $p++)
	        $out .= $nums[mt_rand( 0, strlen($nums)-1 )];

	    return $out;
	}

	// generate the other recharge cards
	function generateRechargeCards($total, $length){
		// get the first number
		$card = genRandomNumber($length);
		echo('1: ' . $card);
		echo('<br/>');

		for ($i = 2; $i <= $total; $i++) {
			$card += 7;
			echo("$i: " .$card);
			echo '<br/>';
		}
	}

	generateRechargeCards(200, 12);

