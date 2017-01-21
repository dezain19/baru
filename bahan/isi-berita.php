<?php

if(isset($_GET['idb'])) {

data('olshop');
$a="SELECT *from sub_kategori where no='$_GET[idb]'";
$kamar=mysql_query($a);

while ($rumah=mysql_fetch_array($kamar)) {


echo "
			<div class='kt-produk'>
				<div class='tumb-produk'>
					<img src=$rumah[file] width=100% height=100%>
				</div>
				<p> <a href=?idb=$rumah[no]> <b> $is[judul] </b> </a> </p>
				<h2> $rumah[isi] </h2>

			</div>

	";
}
}



?>