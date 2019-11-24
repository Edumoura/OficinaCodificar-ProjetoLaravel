@extends('layout.layout', ["current"=>"home"])

@section('body')
<div class="card border">
	<div class="card-body">
		<h5 class="card-title">Orçamentos</h5>
		
		<div class="col-md-6">
			<form action="{{route('search')}}" method="GET">
				@csrf
			<div class="input-group">
				<input type="search" name="search" class="form-control">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-primary">Search</button>					
				</span>
			</div>			
		</form>			
		</div>

		<table class="table table-ordered table-hover">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome do cliente</th>					
					<th>Nome do vendedor</th>
					<th>Descrição</th>
					<th>Valor orçado</th>
					<th>Data/hora do orçamento</th>
						  
					
				</tr>
			</thead>
			<tbody>
				@foreach($orc as $orc)				
				
				<tr>
					<td>{{$orc->id}}</td>
					<td>{{$orc->name_cliente}}</td>
					<td>{{$orc->name_vendedor}}</td>
					<td>{{$orc->descricao}}</td>
					<td>{{$orc->preco}}</td>
					<td>{{\Carbon\Carbon::parse($orc->created_at)->format('d/m/Y H:i:s')}}</td>
					<td>
						<a href="{{route('editar.edit',$orc->id)}}" class="btn btn-sm btn-primary">Editar</a>
						<a href="{{route('delete.destroy',$orc->id)}}" class="btn btn-sm btn-danger">Apagar</a>
					</td>
				</tr>
				@endforeach					
			</tbody>			
		</table>
							
	</div>	
</div>	
@endsection