<?php
	//echo "Yes";
	
	include 'db.php';

	$stnd_arr=array(
			array("studentId"=>"ABC","studentName"=>"ABC DEF","studentEmail"=>"abc@def.com","studentPhone"=>"017xxxxxxxx"),
			
			array("studentId"=>"ABCD","studentName"=>"ABC DEF","studentEmail"=>"abcd@def.com","studentPhone"=>"017xxxxxxxx"),
			
			array("studentId"=>"ABCDE","studentName"=>"ABC DEF","studentEmail"=>"abcde@def.com","studentPhone"=>"017xxxxxxxx"),
		);

	//print_r($stnd_arr);
	
	foreach ($stnd_arr as $student) {
		//print_r($student);
		
			$strinsertStm="";
			echo $strinsertStm."<br/>";
			$stmInsert=$myPDO->prepare("INSERT INTO stInfo (stID,stName,stEmail,stPhone) VALUES (:studentId, :studentName, :studentEmail, :studentPhone)");


		$stmInsert->bindParam(':studentId',$student['studentId']);
		$stmInsert->bindParam(':studentName',$student['studentName']);
		$stmInsert->bindParam(':studentEmail',$student['studentEmail']);
		$stmInsert->bindParam(':studentPhone',$student['studentPhone']);
		
		/*

		
		foreach ($student as $key => $value) {
			# code...
			
			echo ":{$key} => {$value} <br/>";
			$stmInsert->bindParam( ":{$key}", $value);

			
		}
		
		*/


		$stmInsert->execute();

		$stmInsert->debugDumpParams();
		echo "<br/>";
		echo "<br/>";
		$stmInsert=null;
	}
	
	//$myDb
	
?>