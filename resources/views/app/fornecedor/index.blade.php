<h3>fornecedor</h3>

@isset($fornecedores)
    @forelse ( $fornecedores as $indice => $fornecedor )

    Iteração Atual: {{ $loop->iteration}}
    <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br/>
        Status: {{$fornecedor['status']}}
        <br/>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
        <br/>
        Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
        <hr/>

        @empty
        Não existem fornecedores cadastrados
    @endforelse
@endisset

<br>

