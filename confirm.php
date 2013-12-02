<?php include 'header.php'; ?>
		<div id="content">
			<h3>Order Confirmation</h3>
			<div id="shirt">
					<img class="logoShirt" id="logoShirt" src="logos/logo1.png" width="70px" height="70px"/>
					<div class="textShirt" id="textShirt">
					</div>
			</div>
			<div id="inputForm">
				<div id="textForm">	
					First name: <br>
					Last name: <br>
					Address Line 1: <br>
					Address Line 2: <br>
					City: <br>
					Post Code: <br>		
					Small T Quantity: <br>		
					Medium T Quantity: <br>		
					Large T Quantity: <br>
					X-Large T Quantity: <br><br>
					Total Price: <br>
				</div>
				<div id="textForm">
					<?php
						$count = 0;
						$firstname = $_POST['firstname'];
						$surname = $_POST['surname'];
						$addrline1 = $_POST['addrline1'];
						$addrline2 = $_POST['addrline2'];
						$city = $_POST['city'];
						$postcode = $_POST['postcode'];	
						$smlQty = $_POST['smlQty'];	
						$medQty = $_POST['medQty'];	
						$lrgQty = $_POST['lrgQty'];	
						$xlrgQty = $_POST['xlrgQty'];	
						$tcolour = $_GET['tcolour'];
						$tlogo = $_GET['tlogo'];
						$ttext = $_GET['ttext'];
						$tsize = $_GET['tsize'];
						$tfont = $_GET['tfont'];
						$tfcol = $_GET['tfcol'];
						
						$textFile = "confirmation0.txt";
						while (file_exists($textFile)) {
							$textFile = "confirmation". $count .".txt";
							$count++;
						}
						
						
						$openFile = fopen($textFile, 'w') or die("can't open file");
						fwrite($openFile, $firstname . "\r\n");
						fwrite($openFile, $surname . "\r\n");
						fwrite($openFile, $addrline1 . "\r\n");
						fwrite($openFile, $addrline2 . "\r\n");
						fwrite($openFile, $city . "\r\n");
						fwrite($openFile, $postcode . "\r\n");
						fwrite($openFile, $smlQty . "\r\n");
						fwrite($openFile, $medQty . "\r\n");
						fwrite($openFile, $lrgQty . "\r\n");
						fwrite($openFile, $xlrgQty . "\r\n");
						fwrite($openFile, $tcolour . "\r\n");
						fwrite($openFile, $tlogo . "\r\n");
						fwrite($openFile, $ttext . "\r\n");
						fwrite($openFile, $tsize . "\r\n");
						fwrite($openFile, $tfont . "\r\n");
						fwrite($openFile, $tfcol . "\r\n");
						fclose($openFile);
						
						$openFile = fopen($textFile, 'r');
						for ($i = 0; $i < 10; $i++) 
						{
							$ordInfo = fgets($openFile);
							echo $ordInfo . "<br>";
						}
						fclose($openFile);
						
						$total = ($smlQty * 14) + ($medQty * 15) + ($lrgQty * 16) + ($xlrgQty * 17);
						echo "<br>£" . $total . ".00";
					?>
				</div>
			</div>		
		</div>
		<?php echo "<script type='text/javascript'>
						var teeColour =\"" . $_GET['tcolour'] . "\";
						document.getElementById('shirt').style.backgroundImage = 'url(tshirts/tshirt'+ teeColour +'.png)';
						var teeLogo =\"" . $_GET['tlogo'] . "\";
						document.getElementById('logoShirt').src = 'logos/logo'+ teeLogo +'.png';
						var teeText =\"" . $_GET['ttext'] . "\";
						document.getElementById('textShirt').innerHTML = teeText;
						var teeSize =\"" . $_GET['tsize'] . "\";
						document.getElementById('textShirt').style.fontSize = teeSize; 
						var teeFont =\"" . $_GET['tfont'] . "\";
						document.getElementById('textShirt').style.fontFamily = teeFont;
						var teeFCol =\"" . $_GET['tfcol'] . "\";
						document.getElementById('textShirt').style.color = teeFCol;
					</script>" ?>
<?php include 'footer.php' ?>