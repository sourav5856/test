<html>
	<body>
<?php
	include 'db.php';

	$strSelect="SELECT * FROM stInfo where stID=:stID";
	
	if(isset($_GET['stphone'])){
		$strSelect.=" and stPhone=:studentPhone";
	}
	$stmSelect=$myPDO->prepare($strSelect); //str=string

	$stmSelect->bindParam(':stID',$_GET['stid']);
	
	if(isset($_GET['stphone']))
		$stmSelect->bindParam(':studentPhone',$_GET['stphone']);

	$stmSelect->execute();
	
	$stmSelect->debugDumpParams();

	$registrationList=$stmSelect->fetchAll();
	
	//print_r($registrationList);
	//die();
	
	$count=0;
	foreach ($registrationList as $row) {
		# code...
		if($count==0){
		?>
			<table border=1>
				
		<?php
		}
		?>
		<tr>
			<td><?php echo $row['stID'];?></td>
			<td><?php echo $row['stName'];?></td>
			<td><?php echo $row['stEmail'];?></td>
			<td><?php echo $row['stPhone'];?></td>
		</tr>	
		<?php
		/*
		echo " ";

		echo $row['stName'];
		echo " ";

		echo $row['stEmail'];
		echo " ";

		echo $row['stPhone'];
		echo " "; */
		$count++;
		?>
			
		<?php
	

		//echo "<br />";
	}
		if($count!=0)
		{
			?>
				</table>
			<?php
		}

	//print_r($registrationList);

?>
	</body>
</html>