<?php
require 'fungsi.php';
$absen = query("SELECT * FROM absen");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css"
</head>

<body>
	<div class="header">
    	<h1>NAMA PESERTA BARU</h1>
    </div>
<!-- table -->
	<table border="1" cellspacing="0" cellpadding="5">
    	<tr>
        	<th rowspan="2">No.</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Kelas</th>
            <th colspan="3">Absen</th>
        </tr>
        <tr>
        	<td>sakit</td>
            <td>izin</td>
            <td>alfa</td>
        </tr>
        <?php $i= 1; ?>
        <?php foreach($absen as $row) : ?>
        <tr name="absen">
        	<td align="center"><?= $i ?></td>
            <td width="200" align="center"><?= $row["nama"] ?></td>
            <td width="100" align="center"><?= $row["kelas"] ?></td>
            <td align="center" name="absen">
            	<input type="radio" />
            </td>
            <td align="center" name="absen">
            	<input type="radio" />
            </td>
            <td align="center" name="absen">
            	<input type="radio" />
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

	<p>ds</p>
	<p>&nbsp;</p>
</body>
</html>