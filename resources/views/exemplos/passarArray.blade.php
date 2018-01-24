<html>

	<header>
			<title>This is title</title>
	</header>
	<body>
		 <ul>
				@foreach($tarefas as $tarefa)

				        <li>{{$tarefa}}</li>

				 @endforeach
 		 </ul>
	</body>
</html>