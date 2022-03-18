<!DOCTYPE html>
<html>
<head>
	<title>ADD</title>
	<style type="text/css">
		body{
			margin-left: 20%;
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<h1>EDIT RECORDS</h1>
	<div>
		<form method="post" action="{{route('update')}}">
		@csrf
		<input type="hidden" name="id" value="{{$row->id}}">
		FULL NAME: <br> <input type="text" name="fname" value="{{$row->Full_Name}}"><br><br>
		E-mail Address: <br> <input type="text" name="email" value="{{$row->email}}"><br><br>
		Birth Date: <br> <input type="date" name="birth" value="{{$row->birth}}"><br><br>
		Position: <br> <select type="dropdown" name="position">
						<option>{{$row->position}}</option>
						<option></option>
						<option>Computer Programmer I</option>
						<option>Computer Programmer II</option>
						<option>Computer Programmer III</option>
						</select><br><br>
		Why we hire you ?: <br> <textarea name="why">{{$row->msg}}</textarea><br>
		<br> <input type="submit" name="submit"><br>
	</form>
	</div>
	
</body>
</html>