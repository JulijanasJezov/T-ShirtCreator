<?php include 'header.php'; ?>	
	<div id="content">
		<div id="shirt">
			<img class="logoShirt" id="logoShirt" src="logos/logo1.png" width="70px" height="70px"/>
			<div class="textShirt" id="textShirt">
			</div>
		</div>
			
		<div class="col">
			<h3>Logo</h3>
			<img class="logos" id="1" onClick="logos(id)" src="logos/logo1.png">
			<img class="logos" id="2" onClick="logos(id)" src="logos/logo2.png">
			<img class="logos" id="3" onClick="logos(id)" src="logos/logo3.png">
			<img class="logos" id="4" onClick="logos(id)" src="logos/logo4.png">
		</div>
		<div class="col">
			<h3>Colours</h3>
			<div class="colourButton" id="Black" onClick="colours(id)" style="background-color:black;"></div>
			<div class="colourButton" id="Brown" onClick="colours(id)" style="background-color:brown;"></div>
			<div class="colourButton" id="Blue" onClick="colours(id)" style="background-color:blue;"></div>
			<div class="colourButton" id="Red" onClick="colours(id)" style="background-color:red;"></div>
			<div class="colourButton" id="Green" onClick="colours(id)" style="background-color:green;"></div>
			<div class="colourButton" id="Yellow" onClick="colours(id)" style="background-color:yellow;"></div>
			<div class="colourButton" id="White" onClick="colours(id)" style="background-color:white;"></div>
		</div>
		<div class="col">
			<h3>Text</h3>
			<div id="inputForm">
				<div id="textForm">
					Text<br>
					Select a font size: <br>
					Select a font style:  <br>
				</div>
				<div id="boxesForm">
					<input class="input" onKeyUp="changeThis()" type="text" id="textField" name="textField" maxlength="20"><br>
					<select class="input" onchange="fontSize(this.value)">  
						<option value="12px">12</option>  
						<option value="14px">14</option>  
						<option value="16px">16</option>  
						<option value="18px">18</option>  
						<option value="20px">20</option>  
						<option value="24px">24</option>  
						<option value="30px">30</option>  
					</select>
				 <br>
					<select class="input" onchange="fontStyle(this.value)">  
						<option value="Verdana">Verdana</option>  
						<option value="Times New Roman">Times New Roman</option>  
						<option value="Algerian">Algerian</option>  
						<option value="Broadway">Broadway</option>  
						<option value="Cooper Black">Cooper Black</option>  
						<option value="Papyrus">Papyrus</option>  
						<option value="Showcard Gothic">Showcard Gothic</option>  
					</select>
				</div>
				<br><br><br><br><br>
				<div id="colours">
					<div class="colourButton" id="Black" onClick="fontColour(id)" style="background-color:black;"></div>
					<div class="colourButton" id="Brown" onClick="fontColour(id)" style="background-color:brown;"></div>
					<div class="colourButton" id="Blue" onClick="fontColour(id)" style="background-color:blue;"></div>
					<div class="colourButton" id="Red" onClick="fontColour(id)" style="background-color:red;"></div>
					<div class="colourButton" id="Green" onClick="fontColour(id)" style="background-color:green;"></div>
					<div class="colourButton" id="Yellow" onClick="fontColour(id)" style="background-color:yellow;"></div>
					<div class="colourButton" id="White" onClick="fontColour(id)" style="background-color:white;"></div>
				</div>
			</div>
		</div>		
	</div>
<?php include 'footer.php' ?>