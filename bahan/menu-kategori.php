<?php
mysql_connect("localhost", "root", "");
mysql_select_db("olshop");

$a="select*from kategori order by nama asc";
$kamar=mysql_query($a);

while($rumah=mysql_fetch_array($kamar)) {

	echo "
		<ul>
			<a href=?pil=$rumah[kategori_id]> <li> <h5>  $rumah[nama] </h5> </li> </a>
		</ul>";
}