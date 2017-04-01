<?php
function nom(){
	if(isset($_SESSION['prenom'])){
		return ': '.$_SESSION['prenom'];
	}
	else{
		return '';
	}
}
?>