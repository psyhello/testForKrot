<?php 
/*
* small library for Промокрот Раша 
* searches string in file
*/
$upload = $_SERVER['DOCUMENT_ROOT'];
$file = $upload . basename($_FILES['file']['name']);
$string = $_POST['string'];

if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
	echo "File uploaded on server. Path to file: ".$file."</br>";
	search($file,$string);
}else{
	echo "Sory, can't upload file";}

 function search($file,$string)
{
	$openFile = file_get_contents($file);
	$position = stripos($openFile, $string);

	if ($position) {
		echo "Find '$string' в '$file' в строке '$position'";
	}else{
		echo "Sory can't find this string :( ";
	}

}