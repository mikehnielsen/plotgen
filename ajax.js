function fetch(xml, php, html) {
	
	if (xml=="") {
					
		document.getElementById(html).innerHTML="";
		return;
	}
	if (window.XMLHttpRequest) {
	// code for IE7+, Firefox, Chrome, Opera, Safari
 		xmlhttp=new XMLHttpRequest();
		document.getElementById(html).innerHTML=xmlhttp.responseText;
	} else {  // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById(html).innerHTML=xmlhttp.responseText;
		}
  	}
  	xmlhttp.open("GET",php+".php?q="+xml,true);
 	xmlhttp.send();
}