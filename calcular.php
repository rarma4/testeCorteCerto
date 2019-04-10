<?php
	include "includes/header.php";
	session_start();
?>

<h1><?php echo "Calcular"; ?></h1>	<hr>
<div>
<?php include "includes/form.php";?>
</div>
<?php
	if (isset($_SESSION['msg']) && $_SESSION['msg']!= null){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
	}
?>

<?php include "includes/footer.php";?>