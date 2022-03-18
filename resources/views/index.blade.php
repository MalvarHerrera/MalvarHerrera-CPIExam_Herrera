<!DOCTYPE html>
<html>
<head>
	<title>DOH EXAM</title>
	<style type="text/css">
		table{
			width: 80%;
			text-align: center;
			border-collapse: collapse;
		}
		td{
			padding: 5px;
			border: 1px solid;
		}
		.add button{
			border: none;
			background-color: blue;
			color: white;
			font-size: 20px;
			padding: 5px;
		}
		.edit button{
			border: none;
			background-color: orange;
			color: white;
			font-size: 20px;
			padding: 5px;
		}
		.delete button{
			border: none;
			background-color: red;
			color: white;
			font-size: 20px;
			padding: 5px;
		}
		body{
			margin-left: 20%;
		}
		.a{
			background-color: green;
			margin-right: 20%;
			padding: 5px;
			color: white;
		}
	</style>
</head>
<body>
	<div>
		<h1>VIEW RECORDS</h1>
	</div>
	<div class="add">
		<a href="{{route('add')}}"><button>ADD RECORD +</button></a><br><br>
	</div>
	<div class="a">
		@if(Session::has('addmsg'))
		<span>{{Session::get('addmsg')}}</span>
		@endif
		@if(Session::has('updatemsg'))
		<span>{{Session::get('updatemsg')}}</span>
		@endif
		@if(Session::has('deletemsg'))
		<span>{{Session::get('deletemsg')}}</span>
		@endif
	</div>
	<div>
		<table>
		<tr>
			<td>NO.</td>
			<td>FULL NAME</td>
			<td>E-mail Address</td>
			<td>Birth Date</td>
			<td>POSITION</td>
			<td>Why we hire you ?</td>
			<td colspan="2">ACTION</td>
		</tr>
		@foreach($var as $her)
		<tr>
			<td>{{$her->id}}</td>
			<td>{{$her->Full_Name}}</td>
			<td>{{$her->email}}</td>
			<td>{{$her->birth}}</td>
			<td>{{$her->position}}</td>
			<td>{{$her->msg}}</td>
			<td class="edit"><a href="/edit/{{$her->id}}"><button>EDIT</button></a></td>
			<td class="delete"><a href="/delete/{{$her->id}}"><button>DELETE</button></a></td>
		</tr>
		@endforeach

	</table>
	</div>
	
	
</body>
</html>