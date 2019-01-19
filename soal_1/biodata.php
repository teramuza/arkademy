<?php

$myObj->name = "Teuku Raja";
$myObj->address = "Jl. Sandratek Rempoa Ciputat-Timur";
$myObj->hobbies = array("Code","Listening Music","Watching Anime");
$myObj->is_married = false;
$myObj->school = array(
	"highSchool" => "SMK Nusantara 1 Ciputat",
	"university" => "Universitas Pamulang"
);
$myObj->skills = array(
	"programLanguage" => array("Php","Cpp","Java"),
	"framework" => array("Codeigniter","Laravel")
);

$json = json_encode($myObj);

echo $json;