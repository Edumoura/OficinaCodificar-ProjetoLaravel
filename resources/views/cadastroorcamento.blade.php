@extends('layout.layout', ["current"=>"home"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="{{route('orcamento')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome do cliente</label>
                <input type="text" class="form-control" name="name_cliente" 
                       id="name_cliente" placeholder="Digite o nome do cliente">

                <label for="nomeCategoria">Nome do vendedor</label>
                <input type="text" class="form-control" name="name_vendedor" 
                       id="name_vendedor" placeholder="Digite o nome do vendedor"> 
                
                <label for="nomeCategoria">Descrição</label>
                <input type="text" class="form-control" name="descricao" 
                       id="descricao" placeholder="Digite a descrição">

                <label for="nomeCategoria">Valor orçado</label>
                <input type="number" class="form-control" name="preco" 
                       id="preco" placeholder="Digite o valor">                                
                

            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            
        </form>
    </div>
</div>

@endsection