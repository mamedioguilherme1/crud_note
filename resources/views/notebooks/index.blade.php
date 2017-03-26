<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Notebooks</title>
    {{ Html::style('css/style.css') }}
    {{ Html::style('css/bootstrap.min.css') }}
</head>
<body>
	<div class="topo text-center"><h1><a href="{{ url('notebooks')}}">CRUD Notebooks</a></h1></div>
	<div class="text-center btn-criar">
		<button class="btn-success"><a href="{{ url('/notebooks/create')}}">Criar</a></button>
	</div>
	<div class="text-center">
		@foreach($notes as $note)
		<h1><strong>{{$note->marca}}</strong> </h1>
		<p><strong>Memória: </strong> {{$note->memoria}}</p>
		<p><strong>HD: </strong> {{$note->hd}}</p> 
		<p><strong>Processador: </strong>{{$note->processador}}</p>
		<div class="buttons">
			<button ><a href="{{ url('notebooks/'.$note->id.'/edit')}}">Editar</a></button>
			<button ><a href="{{ url('notebooks/' . $note->id . '/delete')}}">Deletar</a></button>
			<button ><a href="{{ url('notebooks/' . $note->id)}}">Detalhes</a></button>
		</div>
		<hr>
	@endforeach
	</div>
	
</body>
</html>