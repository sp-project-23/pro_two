<html>
<head>
	<title>Generate Password Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">	
		<div class="col-md-4">
			<h2> Generate Password</h2>					
			<div class="form-group">
				<input type="text" id="password" class="form-control" placeholder="Click on the Generate">
			</div>								
			<div class="form-group">
				<button type="button" class="btn btn-primary" onclick="autogeneratePassword()">Generate</button>				
				<button type="button" class="btn btn-primary" onclick="reset()">Clear</button>				
			</div>					
		</div>		
	</div>
</body>
<script> 
	function autogeneratePassword() 	
	{		
		var pass = '';
		var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'+'abcdefghijklmnopqrstuvwxyz'+'0123456789'+'@#$!^&(/=\+-))*%';              
		for (let i = 1; i <= 8; i++) {
			var char = Math.floor(Math.random()* str.length + 1);                  
			pass += str.charAt(char);
		}   			
		document.getElementById("password").value = pass;
	}      
	function reset() 	
	{		
		document.getElementById("password").value = '';
	}      

</script>
</html>
