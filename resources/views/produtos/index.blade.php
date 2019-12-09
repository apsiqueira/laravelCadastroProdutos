@extends('layout.app')
@section('title','Lista de produtos')
@section('content')


<h1>Produtos</h1>
@if ($menssage = Session::get('success'))
<div class="alert alert-success">
    {{$menssage}}
</div>
@endif
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>

        @endforeach

    </ul>
</div>
@endif


<div class="row">
    @foreach ($produtos as $produto)

    <div class="col-md-3">


        @if(file_exists("./img/produtos/".md5($produto->id).".jpg"))

        <img src="{{url('img/produtos/'.md5($produto->id).'.jpg')}}" alt="Imagem Produto"
            class="img-fluid img-thumbnail">

        @endif
        <h4 class="text-center"><a href="{{URL::to('produtos')}}/{{$produto->id}}">{{$produto->titulo}}</a></h4>
        <div class="mb=3 " >


            <form method="POST"
                action="{{action('ProdutoController@destroy',$produto->id)}}">
                @csrf
                <a href="{{URL::to('produtos/'.$produto->id.'/edit')}}" class="btn btn-primary">Editar</a>
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger">Excluir</button>


        </div>

    </div>
    @endforeach

</div>


@endsection