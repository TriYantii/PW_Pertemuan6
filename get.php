<head>
    <title> Data Pengisian </title>
</head>
<body style="background-color: rgb(213, 229, 182)">
    <center>
       <h1> Keterangan Data Pengisian </h1>
</center>
<hr>
<h3> Berikut Tanggapan Pengisian Ikan Endemik Indonesia </h3>
<br>
<?php

$nama = $_GET['nama'];
$nik = $_GET['nik'];
$nohp = $_GET['nohp'];
$ttl = $_GET['ttl'];
$alamatrmh = $_GET['alamatrmh'];
$namaikan = $_GET['namaikan'];
$filum = $_GET['filum'];
$class = $_GET['class'];
$ordo = $_GET['ordo'];
$family = $_GET['family'];
$subfam = $_GET['subfam'];
$genus = $_GET['genus'];
$spesies = $_GET['spesies'];
$asal = $_GET['asal'];
$link = $_GET['link'];
$tombol = $_GET['tombol'];


echo "Nama : ".$nama."<br>"; 
echo "NIK : ".$nik."<br>"; 
echo "Tempat, tanggal lahir : ".$ttl."<br>";
echo "No Hp : ".$nohp."<br>"; 
echo "Alamat/tempat tinggal : ".$alamatrmh."<br>"; 
echo "Nama Ikan : ".$namaikan."<br>"; 
echo "Fylum : ".$filum."<br>"; 
echo "Class : ".$class."<br>"; 
echo "Ordo : ".$ordo."<br>";
echo "Family : ".$family."<br>";
echo "Sub Family : ".$subfam."<br>";
echo "Genus : ".$genus."<br>";
echo "Spesies : ".$spesies."<br>";
echo "Asal daeran : ".$asal."<br>";
echo "Link gambar : ".$link."<br>";
?>
<br>
<br>
<table border="1">
    <tr>
        <td colspan="2" align ="center"><b>
            Form Anda</b>
</td>
</tr>

<tr>
    <td> Nama : </td>
    <td> <?php echo $nama; ?> </td>
</tr>
<tr>
    <td> NIK : </td>
    <td> <?php echo $nik; ?> </td>
</tr>
<tr>
    <td> Tempat, tanggal lahit : </td>
    <td> <?php echo $ttl; ?> </td>
</tr>
<tr>
    <td> No Hp : </td>
    <td> <?php echo $nohp; ?> </td>
</tr>
<tr>
    <td> Alamat/tempat tinggal : </td>
    <td> <?php echo $alamatrmh; ?> </td>
</tr>
<tr>
    <td> Nama Ikan : </td>
    <td> <?php echo $namaikan; ?> </td>
</tr>
<tr>
    <td> Fylum : </td>
    <td> <?php echo $filum; ?> </td>
</tr>
<tr>
    <td> Class : </td>
    <td> <?php echo $class; ?> </td>
</tr>
<tr>
    <td> Ordo : </td>
    <td> <?php echo $ordo; ?> </td>
</tr>
<tr>
    <td> Family : </td>
    <td> <?php echo $family; ?> </td>
</tr>
<tr>
    <td> Sub Family : </td>
    <td> <?php echo $subfam; ?> </td>
</tr>
<tr>
    <td> Genus : </td>
    <td> <?php echo $genus; ?> </td>
</tr>
<tr>
    <td> Spesies : </td>
    <td> <?php echo $spesies; ?> </td>
</tr>
<tr>
    <td> Asal ikan : </td>
    <td> <?php echo $asal; ?> </td>
</tr>
<tr>
    <td> Link gambar : </td>
    <td> <?php echo $link; ?> </td>
</tr>
</table>
<br>
</div>
<hr>
<center>
<h1>Terima Kasih</h1>
<h3>Semoga Hari Anda Menyenangkan</h3>
<img src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/09/17/2555339328.png" width="250" height="176"></img>
</center>
</body>