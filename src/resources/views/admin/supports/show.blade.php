<h1>Detalhes da duvida {{ $support->id }}</h1>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descricao: {{ $support->body }}</li>
</ul>

<form action="{{ route('supports.destroy', $support->id) }}" method="post">
    @method('DELETE')
    @csrf()
    <button type="submit">Deletar</button>
</form>
