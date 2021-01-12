<?php
$conn = mysqli_connect("localhost", "root", "", "phpku");
$res = mysqli_query($conn, "SELECT kelas FROM absen WHERE kelas = x");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<div>Belajar HTML</div>
    <!--table-->
    <table cellpadding="5" cellspacing="0" border="1">
    	<tr>
        	<th rowspan="2">NO.</th>
            <th rowspan="2">NAMA</th>
            <th rowspan="2">KELAS</th>
            <th colspan="3">ABSEN</th>
        </tr>
        <tr>
        	<td>hadir</td>
            <td>sakit</td>
            <td>izin</td>
        </tr>
        <?php $i = 1 ?>
        <?php while($ro = mysqli_fetch_assoc($res)) : ?>
        <tr>
        	<td><?= $i ?></td>
            <td><?= $ro["nama"]?></td>
            <td><?= $ro["kelas"]?></td>
            <td><input type="radio" /></td>
            <td><input type="radio" /></td>
            <td><input type="radio" /></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>