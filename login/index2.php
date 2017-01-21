<?php
include"config.php";
require_once "session_start.php";

echo"<a href=isi_content.php> TAMBAH CONTENT </a> <br>";

	$bacaisi="select*from sub_kategori";
	
	$okisi=mysql_query($bacaisi);
	while ($dataisi=mysql_fetch_array($okisi))
	{
		
		
	echo"<pre>
		namalink : $dataisi[judul]
		isi      : $dataisi[isi]
			<a href=edit_content.php?no=$dataisi[no]>Edit </a>
			<a href=del.php?pildel=$dataisi[no]> Delete </a>

			
			</pre>";
	}

?>