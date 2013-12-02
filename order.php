<?php include 'header.php'; ?>
	<div id="content">
		<h3>Enter Your Information:</h3>
		<div id="shirt" >
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
			</div>
			<div id="boxesForm">
				<form method="post" name="personDetails" onsubmit="return validation()" action="<?php echo 'confirm.php?tcolour=' . $_GET['tcolour'] . '&tlogo=' . $_GET['tlogo'] . '&ttext=' . $_GET['ttext'] . '&tsize=' . $_GET['tsize'] . '&tfont=' . $_GET['tfont'] . '&tfcol=' . $_GET['tfcol']?>">
				<input class="input" id="fname" type="text" name="firstname"><i style="color:red;">*</i>
				<input class="input" id="sname" type="text" name="surname"><i style="color:red;">*</i>
				<input class="input" id="address" type="text" name="addrline1"><i style="color:red;">*</i>
				<input class="input" type="text" name="addrline2"><br>
				<input class="input" id="city" type="text" name="city"><i style="color:red;">*</i>
				<input class="input" id="postcode" type="text" name="postcode"><i style="color:red;">*</i>			
			</div>
		</div>
	
		<div id="inputForm">
			<div id="qttForm">
				Quantity:
				<select id="small" class="input" name="smlQty"> 
					<option value="0">0</option> 
					<option value="1">1</option>  
					<option value="2">2</option>  
					<option value="3">3</option>  
					<option value="4">4</option>  
					<option value="5">5</option>   
				</select><br>
				Size:
				<input class="input" type="text" readonly="readonly" value="Small" size="6">
			</div>
			<div id="qttForm">
				Quantity:
				<select id="medium" class="input" name="medQty"> 
					<option value="0">0</option> 
					<option value="1">1</option>  
					<option value="2">2</option>  
					<option value="3">3</option>  
					<option value="4">4</option>  
					<option value="5">5</option>   
				</select><br>
				Size:
				<input class="input" type="text" readonly="readonly" value="Medium" size="6">
			</div>
			<div id="qttForm">
				Quantity:
				<select id="large" class="input" name="lrgQty"> 
					<option value="0">0</option> 
					<option value="1">1</option>  
					<option value="2">2</option>  
					<option value="3">3</option>  
					<option value="4">4</option>  
					<option value="5">5</option>   
				</select><br>
				Size:
				<input class="input" type="text" readonly="readonly" value="Large" size="6">
			</div>
			<div id="qttForm" style="margin-left:150px;">
				Quantity:
				<select id="xlarge" class="input" name="xlrgQty"> 
					<option value="0">0</option> 
					<option value="1">1</option>  
					<option value="2">2</option>  
					<option value="3">3</option>  
					<option value="4">4</option>  
					<option value="5">5</option>   
				</select><br>
				Size:
				<input class="input" type="text" readonly="readonly" value="X-Large" size="6">
			</div>
			<input class="button" type="submit" name="submit" value="Confirm">
				</form>	
			<div id="validation"> </div>
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