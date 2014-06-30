<?php

    $country = $_POST['ch'];

    //$password = $_POST['ch'];

   // echo $word;

    //echo $lastName;

mysql_connect("localhost","kumar109_puntu","!countries2014") or die(mysql_error());
mysql_select_db("kumar109_countries") or die(mysql_error());
//mysql_connect("mysql11.000webhost.com","a4377512_hitlar","!webhost123") or die(mysql_error());
//mysql_select_db("a4377512_login") or die(mysql_error());
$sql = mysql_query("SELECT * FROM councap WHERE country='$country' LIMIT 1");

$row = mysql_num_rows($sql);

if($row>0)
{
	while($row = mysql_fetch_array($sql)){

		$country = $row[1];
		$capital = $row[2];
		$description = $row[3];


		echo "Capital city: " .$capital. "<br/>" .$description ; }   	
}

else
echo "No such word found";



?>