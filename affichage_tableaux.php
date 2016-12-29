<?php
if(isset($_SESSION['pseudo'])){
	if($_SESSION['pseudo'] == 'admin'){
		include('tableaux/tableaux_admin.php');
	}
	else{
		include("tableaux/tableaux_connecter.php");
	}
}
else{
	include("tableaux/tableaux_non_connecter.php");
}
?>