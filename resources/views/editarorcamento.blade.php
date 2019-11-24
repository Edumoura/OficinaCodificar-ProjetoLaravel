@extends('layout.layout', ["current"=>"home"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="{{route('editar.update',$orc->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome do cliente</label>
                <input type="text" class="form-control" name="name_cliente" value="{{$orc->name_cliente}}" 
                       id="name_cliente" placeholder="Digite o nome do cliente">

                <label for="nomeCategoria">Nome do vendedor</label>
                <input type="text" class="form-control" name="name_vendedor" value="{{$orc->name_vendedor}}" 
                       id="name_vendedor" placeholder="Digite o nome do vendedor"> 
                
                <label for="nomeCategoria">Descrição</label>
                <input type="text" class="form-control" name="descricao" value="{{$orc->descricao}}" 
                       id="descricao" placeholder="Digite a descrição">

                <label for="nomeCategoria">Valor orçado</label>
                <input type="number" class="form-control" name="preco" value="{{$orc->preco}}"  
                       id="preco" placeholder="Digite o valor">                                
                

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            
        </form>
    </div>
</div>

@endsection