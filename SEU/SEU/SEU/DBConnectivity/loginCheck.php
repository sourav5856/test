<?php
	//echo "Yes";
	
	//include 'db.php';

	$stnd_arr=array(
			array("uname"=>"ABC","pass"=>"123","utype"=>"admin"),
			array("uname"=>"ABCD","pass"=>"1234","utype"=>"report"),
			array("uname"=>"DEFS","pass"=>"1123","utype"=>"admin")
		);

	//print_r($stnd_arr);
	
	foreach ($stnd_arr as $student) {
		print_r($student);
		
		foreach ($student as $key => $value) {
			# code...
			echo "{$key} => {$value} <br/>";
		}
	}
	
	//$myDb
	
?>