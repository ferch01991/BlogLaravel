@extends('admin.template.main')

@section('title', 'Listado de categorias')

@section('content')

	<a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoria</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach ($categories as $category)
				<tr> 
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>
						<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
						<a href="{{ route('admin.categories.destroy', $category->id) }}" class="btn btn-warning" onclick="return confirm('Quiere borrar este usuario?')"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div align="center">	
			{!! $categories->render() !!}
		</div>
@endsection