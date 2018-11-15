<html>
    <head>
        <title>AJAX</title>
        <script type="text/javascript">



          if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                
            }
            
            
            
function makerequest(given_text,objID)
 {
	//alert(given_text);
        //var obj = document.getElementById(objID);
        serverPage='text.php?text='+given_text;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			//alert(xmlhttp.responseText);
                        document.getElementById(objID).innerHTML = xmlhttp.responseText;
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
		 }
	}
xmlhttp.send(null);
}

function textSearch(given_text)
 {
	//alert(given_text);
        //var obj = document.getElementById(objID);
        serverPage='text.php?text='+given_text;
        
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			//alert(xmlhttp.responseText);
                        if(xmlhttp.responseText == 1){
                            document.getElementById('res').innerHTML = 'Email address exist';
                            document.getElementById('btn').disabled = true;
                        }else{
                            document.getElementById('res').innerHTML = 'Email address available';
                            document.getElementById('btn').disabled = false;
                            
                        }
                        
                        
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
		 }
	}
xmlhttp.send(null);
}
 
</script>
    </head>
    <body>
        Text : <input type="text" name="name" onkeyup="textSearch(this.value)">
        <button id="btn">Submit</button>
        <span id="res"></span>
    </body>
</html>