<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} else {
		$page = $_GET['page'];
		include __DIR__ . '/../pages/'. $page . '.php';
	}
}


function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}


function getUserData() {
	$json_source = file_get_contents('../data/user.json');
	$array = json_decode($json_source);
	echo "bonjour"." ".$array->{'name'};
	// var_dump(json_decode($json_source));
}
?>