<?php
if(isset($_SESSION['pseudo'])){
	if($_SESSION['pseudo'] == 'admin'){
		include('tableaux_admin.php');
	}
	else{
		include("tableaux_connecter.php");
	}
}
else{
	include("tableaux_non_connecter.php");
}
?>