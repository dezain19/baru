<?php

function data($db) {
 mysql_select_db($db,mysql_connect("localhost","root",""));
}


if(isset($_GET['idb'])) {

data('olshop');
$a="select*from sub_kategori where no='$_GET[idb]'";
$kamar=mysql_query($a);

while ($rumah=mysql_fetch_array($kamar)) {


echo "
			<div class='kt-berita'>
				<div class='tumb-berita'>
					<img src=$rumah[file] width=100% height=100%>
				</div>
				<p> <a href=?idb=$rumah[no]> <b> $rumah[judul] </b> </a> </p>
				<p> $rumah[isi] </p>

			</div>

	";
}
}

elseif(isset($_GET['pil'])) {

data('olshop');
$isi="select*from sub_kategori where kategori_id='$_GET[pil]'";
$isida=mysql_query($isi);

while ($is=mysql_fetch_array($isida)) {


echo "
			<div class='kt-produk'>
				<div class='tumb-produk'>
					<img src=$is[file] width=100% height=100%>
				</div>
				<p> <a href=?idb=$is[no]> <b> $is[judul] </b> </a> </p>
				<a href=?idb=$is[no] class='btn beli kiri'> Baca Sekarang </a>
			</div>

	";
}
}

elseif(isset($_GET['nav'])) {

data('olshop');
$isi="select*from navigasi where no='$_GET[nav]'";
$isida=mysql_query($isi);

while ($is=mysql_fetch_array($isida)) {


echo "
		<div class='padd'>
			<p> $is[isi] </p>
		</div>
	";
}
}


elseif ('index.php') {

	data('olshop');
	$isi="select*from sub_kategori";

	$isida=mysql_query($isi);
	while ($is=mysql_fetch_array($isida)) {

echo "
			<div class='kt-produk'>
				<div class='tumb-produk'>
					<img src=$is[file] width=100% height=100%>
				</div>
				<p> <a href=?idb=$is[no]> <b> $is[judul] </b> </a> </p>
				<a href=?idb=$is[no] class='btn beli kiri'> Baca Sekarang </a>
			</div>

	";
}
}


else {
	echo "Data Kosong";
}

?>

