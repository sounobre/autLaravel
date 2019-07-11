<h1>Listagem de Clientes</h1>
<br/><br/>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CNPJ/CPF</th>
        <th>Data Nasc.</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Sexo</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->document_number}}</td>
            <td>{{$client->date_birth}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->sex}}</td>
            <td>

            </td>
        </tr>
    @endforeach
    </tbody>

</table>