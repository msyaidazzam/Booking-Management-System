<?php include("config.php"); ?>
<?php
 session_start();
 // cek apakau user sudah login
 if($_SESSION['login'] == false){
  header('Location: index.php');
 }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Invoice Service Mobil</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
    <?php

    $id = $_GET['id'];
    $sql = "SELECT * FROM `listservis` WHERE ID = $id";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_array($query);

    ?>

		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									
								</td>

								<td>
									Invoice  <br />
									Servis Tanggal: <?php echo $data['TanggalService'];?>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Pemilik Mobil : <?php echo $data['Nama'];?><br />
									Plat Mobil    : <?php echo $data['PlatMobil'];?><br />
									TipeMobil     : <?php echo $data['TipeMobil'];?><br />
                                    TahunMobil    : <?php echo $data['TahunMobil'];?>

								</td>

								<td>
									Teknisi<br />
                                    <?php echo $data['Teknisi'];?>
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Keluhan</td>

					<td></td>
				</tr>

				<tr class="details">
					<td><?php echo $data['Keluhan'];?><br /></td>

					<td></td>
				</tr>

				<tr class="heading">
					<td>Pemeriksaan</td>

					<td></td>
				</tr>

				<tr class="item">
					<td><br><br><br><br><br><br><br><br><br><br></td>

					<td></td>
				</tr>

				</table>
		</div>
	</body>
</html>