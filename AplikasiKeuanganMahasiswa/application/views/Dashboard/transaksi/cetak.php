<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Struk</title>
<style type="text/css">
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	color: #000;
	text-transform: uppercase;}
</style>
</head>
<!-- onload="print()" -->
<body onload="print()">
<table width="300" cellspacing='0' celpadding="0" style="border:line 1px black" align="center">
  <tr>
    <td colspan="5" align="center" height="20">B Express Fried Chicken</td>
  </tr>
  <tr>
    <td colspan="5" align="center" height="20"> Cigombong, Bogor, Jawa Barat 16110</td>
  </tr>
  <tr>
    <td colspan="5" align="center" height="20">081383397234</td>
  </tr>
  <tr>
    <td colspan="5" height="20" style="border-bottom: dotted 1px #000">RECEIPT <?= $data->no_struk ?> <?= $data->createdAt?></td>
  </tr>
  <tr>
    <td>No</td>
    <td height="17">BRG</td>
    <td>JML</td>
    <td>HRG</td>
    <td>SUB TTL</td>
  </tr>
<?php 
$no=1;
foreach($data_detail as $value){
?>
  <tr>
    <td><?= $no ?></td>
    <td><?= $value->barangId ?></td>
    <td><?= $value->jumlah ?></td>
    <td><?= rupiah($value->harga) ?></td>
    <td><?= rupiah($value->total_harga) ?></td>
  </tr>
  <?php $no++; } ?>

  <tr >
    <td style="border-top: dotted 1px #000">&nbsp;</td>
    <td style="border-top: dotted 1px #000">&nbsp;</td>
    <td style="border-top: dotted 1px #000">&nbsp;</td>
    <td style="border-top: dotted 1px #000">Total Harga</td>
    <td height="20" style="border-top: dotted 1px #000"><?= rupiah($data->total) ?></td>
  </tr>
  <tr>
    <td colspan="5" align="center" height="20">
    TERIMA KASIH ATAS KUNJUNGAN ANDA</td>
  </tr>
</table>
</body>
</html>