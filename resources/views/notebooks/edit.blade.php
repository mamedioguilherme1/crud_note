<!DOCTYPE html>
<html>
<head>
	<title>Notebooks</title>
	{{ Html::style('css/style.css') }}
    {{ Html::style('css/bootstrap.min.css') }}
</head>
<body>
	<div class="topo text-center"><h1><a href="{{ url('notebooks')}}">CRUD Notebooks</a></h1></div>
	<div class="text-center"><h3> Editar Notebook </h3></div>
	<div class="text-center">
		{{Form::open(['url' => 'notebooks/'.$note->id.'/edit', 'method' => 'put'])}}
			{{Form::label('marca', 'Marca:')}}<br>
			{{Form::text('marca', $note->marca, ['placeholder' => 'Marca do notebook'])}}<br>

			{{Form::label('memoria', 'Memoria:')}}<br>
			{{Form::text('memoria', $note->memoria, ['placeholder' => 'Memoria do notebook'])}}<br>

			{{Form::label('hd', 'HD:')}}<br>
			{{Form::text('hd', $note->hd, ['placeholder' => 'HD do notebook'])}}<br>

			{{Form::label('processador', 'Processador:')}}<br>
			{{Form::text('processador', $note->processador, ['placeholder' => 'Processador do notebook'])}}

			<div class="ajuste">{{Form::submit('Editar', ['class' => 'btn btn-large btn-success openbutton'])}}</div>
		{{Form::close()}}
	</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Notebooks</title>

</head>
<body>

	
</body>
</html>