tColour = "White";
tLogo = "1";
tText = "";
tSize = "12";
tFont = "Verdana";
tFCol = "Black";
tFontColC = "";

function colours(colour) {
	tColour = colour;
	document.getElementById('shirt').style.backgroundImage = 'url(tshirts/tshirt'+ colour +'.png)';
}

function logos(logo) {
	tLogo = logo;
	document.getElementById('logoShirt').src = "logos/logo"+ logo +".png";
}

function changeThis(){
	tText = document.getElementById('textField').value;
	document.getElementById('textShirt').innerHTML = tText;
}

function fontSize(size){  
	tSize = size;
    document.getElementById("textShirt").style.fontSize = size; 
} 

function fontStyle(font){  
	tFont = font;
    document.getElementById("textShirt").style.fontFamily = font; 
} 

function fontColour(fontColour) {
	tFCol = fontColour;
	document.getElementById('textShirt').style.color = fontColour;	
}


function getAttributes() {
	window.location.href = "order.php?tcolour=" + tColour + "&tlogo=" + tLogo + "&ttext=" + tText + "&tsize=" + tSize + "&tfont=" + tFont + "&tfcol=" + tFCol; 
}

function validation() {
	var fname=document.forms["personDetails"]["firstname"].value;
		if (fname==null || fname=="")
		{	
			document.getElementById("fname").style.backgroundColor ="#ff4040";
			
		}
		
	var sname=document.forms["personDetails"]["surname"].value;
		if (sname==null || sname=="")
		{	
			document.getElementById("sname").style.backgroundColor ="#ff4040";
			
		}
		
	var addr=document.forms["personDetails"]["addrline1"].value;
		if (addr==null || addr=="")
		{	
			document.getElementById("address").style.backgroundColor ="#ff4040";
			
		}
		
	var city=document.forms["personDetails"]["city"].value;
		if (city==null || city=="")
		{	
			document.getElementById("city").style.backgroundColor ="#ff4040";
			
		}
		
	var pcode=document.forms["personDetails"]["postcode"].value;
		if (pcode==null || pcode=="")
		{	
			document.getElementById("postcode").style.backgroundColor ="#ff4040";
			
		} 
	
	var lqty = document.getElementById("large").value;
	var mqty = document.getElementById("medium").value;
	var sqty = document.getElementById("small").value;
	var xlqty = document.getElementById("xlarge").value;
	
		if (lqty == 0 && mqty == 0 && sqty == 0 && xlqty == 0)
		{	
			document.getElementById("small").style.backgroundColor ="#ff4040";
			document.getElementById("medium").style.backgroundColor ="#ff4040";
			document.getElementById("large").style.backgroundColor ="#ff4040";
			document.getElementById("xlarge").style.backgroundColor ="#ff4040";
			document.getElementById('validation').innerHTML = "You must fill in all the details with * and choose at least one size of tshirt.";
			
		} 
	
		if (fname==null || fname=="" || sname==null || sname=="" || addr==null || addr=="" || city==null || city=="" || pcode==null || pcode=="" || (lqty == 0 && mqty == 0 && sqty == 0 && xlqty == 0))
		{
			return false;
		}
}