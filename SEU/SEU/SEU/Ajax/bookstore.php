<?php
	include '../dbConnectivity/db.php';

	$strSelect="SELECT * FROM stInfo where stID=:stID";
	//$strSelect="SELECT * FROM stInfo where stID like %:stID%";
	$stmSelect=$myPDO->prepare($strSelect);

	$stmSelect->bindParam(':stID',$_POST['stid']);

	$stmSelect->execute();

	$registrationList=$stmSelect->fetchAll();

	foreach ($registrationList as $row) {
		# code...
		echo $row['stID'];
		echo " ";

		echo $row['stName'];
		echo " ";

		echo $row['stEmail'];
		echo " ";

		echo $row['stPhone'];
		echo " ";



		echo "<br />";
	}
	

	//print_r($registrationList);

?>