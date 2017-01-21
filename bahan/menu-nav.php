<?php
mysql_connect("localhost", "root", "");
mysql_select_db("olshop");

$a="select*from navigasi";
$kamar=mysql_query($a);

while($rumah=mysql_fetch_array($kamar)) {

	echo "
		<a href=?nav=$rumah[no]> <div class='h-nav'> <p> $rumah[nama] </p> </div> </a>";
}