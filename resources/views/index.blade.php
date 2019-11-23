@extends('layout.layout', ["current"=>"home"])

@section('body')
<div class="card border">
	<div class="card-body">
		<h5 class="card-title">Orçamentos</h5>
		
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
				
				
				<tr>
					<td>#</td>
					<td>#</td>
					<td>#</td>
					<td>#</td>
					<td>#</td>
					<td>#</td>
					<td>
						<a href="#" class="btn btn-sm btn-primary">Editar</a>
						<a href="#" class="btn btn-sm btn-danger">Apagar</a>
					</td>
				</tr>
								
			</tbody>			
		</table>
				
	</div>
	
</div>	
@endsection