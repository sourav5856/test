<html>
	<head>
		<script type="text/javascript">
		function book_suggestion()
			{
			var book = document.getElementById("txtbookName").value;
			var xhr;
			 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
			    xhr = new XMLHttpRequest();
			} else if (window.ActiveXObject) { // IE 8 and older
			    xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xhr.onreadystatechange = display_data;
				function display_data() { //change
				 if (xhr.readyState == 4) {
			      if (xhr.status == 200) {
			      	if(xhr.responseText=="")
			      		document.getElementById("suggestion").innerHTML="";
			      	else		
			       		document.getElementById("suggestion").innerHTML = xhr.responseText;
			      } else {
			      	document.getElementById("suggestion").innerHTML="Not Matched!!"; //change
			        //alert('There was a problem with the request.');
			      }
			     }
			  }

			var data = "stid=" + book;
				 xhr.open("POST", "bookstore.php", true); 
			     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
			     xhr.send(data);
			}
	</script>
	</head>
	<body>
		<input type="text" id="txtbookName" onkeyup="book_suggestion()">
		<br/>
		<div id="suggestion"></div>
	</body>
</html>