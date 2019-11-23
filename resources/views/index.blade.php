@extends('layout.layout', ["current"=>"home"])

@section('body')
<div class="card border">
	<div class="card-body">
		<h5 class="card-title">Orçamentos</h5>
		@if(count($orc) > 0)
		<table class="table table-ordered table-hover">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome do cliente</th>					
					<th>Nome do vendedor</th>
					<th>Descrição</th>
					<th>Valor orçado</th>
					<th>Data do orçamento</th>
						  
					
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
					<td>{{$orc->created_at}}</td>
					<td>
						<a href="#" class="btn btn-sm btn-primary">Editar</a>
						<a href="#" class="btn btn-sm btn-danger">Apagar</a>
					</td>
				</tr>
				@endforeach					
			</tbody>			
		</table>
		@endif					
	</div>	
</div>	
@endsection