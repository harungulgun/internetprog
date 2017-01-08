<?php

session_start();

include('../baglan.php');

if (!$_SESSION['kadi']) {
	
	header('location:../index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html>
	<head>
		<title>Personel İletişim Bilgisi</title>

		<meta name="keywords" content="telefon,defteri,uygulaması" />
		<meta name="description" content="Telefon numarlarının saklanacağı bir yazılım" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../css/genel.css" charset="UTF-8" media="all" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
		<script type="text/javascript" src="../js/genel.js"></script>
	</head>
	<body>
		<div class="rehberDiv">
			
			<h2 class="baslik">Personel İletişim Bilgisi</h2>
			<span style="margin-left:280px;">
			<a href="kisi_ekle.php">Yeni Kişi Ekle</a>
			<a href="kisi_listesi.php">Eklenen Kişi Listesi</a>
			<a href="kisi_ara.php">Kişi Ara</a>
			<a href="cikis.php">Çıkış Yap</a>
			</span>
			<hr />

			<table width="637" cellspacing="1" id="kisiListe" summary="Telefon Rehberi">
				<thead>
					<tr>
						<th scope="row" id="bos"></th>
						<th scope="row" abbr="ad-soyad">Ad Soyad</th>
						<th scope="row" abbr="cep">Cep Telefonu</th>
						<th scope="row" abbr="cep">Cep Telefonu</th>
						<th scope="row" abbr="cep">Cep Telefonu</th>
						<th scope="row" abbr="ev">Ev Telefonu</th>
						<th scope="row" abbr="adres">Adres</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$yaz= $baglanti->query('SELECT * FROM kisi ORDER BY ad ASC');
					$adet=0;
					foreach($yaz as $row) {
							$adet++;
						echo"
					<tr>
						<th>".$adet."</th>
						<td>".$row['ad']."</td>
						<td>".$row['cep']."</td>
						<td>".$row['cep2']."</td>
						<td>".$row['cep3']."</td>
						<td>".$row['ev']."</td>
						<td width='180'>".$row['adres']."</td>
						<td class='kayitSil'><a href='".$row['ad']."' id='".$row['id']."'><img src='../resim/delete.png'></a></td>
					</tr>
						";
					}
				?>
				</tbody>
			</table>
		</div>
	</body>
</html>