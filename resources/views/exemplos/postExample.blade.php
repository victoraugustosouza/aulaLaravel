<!doctype html>
	<html>
		<head>
			
		</head>

		<title>Teste</title>

		<body>
			<!-- action="/postRequest" também funciona -->
			
				<form action="{{ route('exemplo') }}" enctype="multipart/form-data" method="POST">
				  {{ csrf_field() }}

				  First name:<br>
				  <input type="text" name="firstname" value="Mickey">
				  <br>
				  Last name:<br>
				  <input type="text" name="lastname" value="Mouse">
				  <br><br>
				  <input type="submit" value="Submit">
				</form> 

		</body>
	</html>