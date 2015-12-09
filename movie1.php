<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo 'response>';

	$film = $_GET['movie'];
	$filmArray = array('spectre', 'jurassic world', 'max max', 'black mass', 'the martian' );
	if(in_array($film, $filmArray))
		echo 'We do have '.$film.'!';
	elseif($film=='')
		echo 'Please enter a movie';
		else
			echo 'Sorry we have not reviewed'.$film.'!';
	echo '</response>';


echo '</respone>';

?>