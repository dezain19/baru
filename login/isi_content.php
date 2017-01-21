<?php include "session_start.php"; ?>

<form action="simpan_content.php" method="post" enctype="multipart/form-data">

No : <input type="text" name="no" id="no"> <br>
Kategori : <input type="text" name="kategori" id="kategori"> <br>
Namalink : <input type="text" name="judul" id="judul"> <br>
Isi : <textarea name="isi" id="isi" cols="45" rows="5"> </textarea> <br>
File : <input type="file" name="file" id="file"> <br>

<input type="submit" name="button" id="button" value="Kirim"> <br>

</form>