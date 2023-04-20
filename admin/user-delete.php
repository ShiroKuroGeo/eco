<?php require_once('header.php'); 

if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM tbl_user WHERE user_id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	}
}




	// Delete from user
	$statement = $pdo->prepare("DELETE FROM tbl_user WHERE user_id=?");
	$statement->execute(array($_REQUEST['id']));


	header('location: user.php');
?>