<!DOCTYPE html>
<html>
<head>
	<title>Notebooks</title>
	{{ Html::style('css/style.css') }}
    {{ Html::style('css/bootstrap.min.css') }}
</head>
<body>
	<div class="topo text-center"><h1><a href="{{ url('notebooks')}}">CRUD Notebooks</a></h1></div>
	<div class="text-center"><h3> Novo Notebook </h3></div>
	<div class="text-center">
		{{Form::open(['url' => 'notebooks', 'method' => 'post'])}}		
			{{Form::label('marca', 'Marca:')}}<br>
			{{Form::text('marca', null, ['placeholder' => 'Nome da marca'])}}<br>
				
			{{Form::label('memoria', 'Memoria:')}}<br>
			{{Form::text('memoria', null, ['placeholder' => 'Memoria RAM'])}}<br>
			
			{{Form::label('hd', 'HD:')}}<br>
			{{Form::text('hd', null, ['placeholder' => 'Capacidade em HD'])}}<br>

			{{Form::label('processador', 'Processador:')}}<br>
			{{Form::text('processador', null, ['placeholder' => 'Processador'])}}<br>

			<div class="ajuste">{{Form::submit('Criar', ['class' => 'btn btn-large btn-success openbutton'])}}</div>

		{{Form::close()}}
	</div>
</body>
</html>