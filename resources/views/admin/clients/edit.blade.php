@extends('layouts.layout')

@section('content')
    <h3>Novo Cliente</h3>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="post" action="{{route('clients.update',['client' => $client->id])}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control" id="name" name="name" value="{{$client->name}}">
        </div>

        <div class="form-group">
            <label for="document_number">Documento</label>
            <input class="form-control" id="document_number" name="document_number"
                   value="{{$client->document_number}}">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input class="form-control" id="email" name="email" type="email" value="{{$client->email}}">
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input class="form-control" id="phone" name="phone" value="{{$client->phone}}">
        </div>

        <div class="form-group">
            <label for="marital_status">Estado Civil</label>
            <select class="form-control" name="marital_status" id="marital_status" value="{{$client->marital_status}}">
                <option value="">Selecione o Estado Civil</option>
                <option value="1">Solteiro</option>
                <option value="2">Casado</option>
                <option value="3">Divorciado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date_birth">Data Nasc.</label>
            <input class="form-control" id="date_birth" name="date_birth" type="date" value="{{$client->date_birth}}">
        </div>

        <div class="radio">
            <label>
                <input type="radio" name="sex" value="m" {{$client->sex == 'm' ? 'checked' : ''}}>Masculino
            </label>
        </div>

        <div class="radio">
            <label>
                <input type="radio" name="sex" value="f" {{$client->sex == 'f' ? 'checked' : ''}}>Feminino
            </label>
        </div>

        <div class="form-group">
            <label for="physical_disability">Deficiência Física</label>
            <input class="form-control" id="physical_disability" name="physical_disability"
                   value="{{$client->physical_disability}}">
        </div>

        <div class="checkbox">
            <input type="checkbox" name="defaulter" id="defaulter" {{$client->defaulter ? 'checked' : ''}}>Inadimplente?
            </label>
        </div>
        <br/>
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
@endsection