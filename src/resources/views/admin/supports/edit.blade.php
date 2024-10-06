<h1>Duvida {{ $support->id }} </h1>

<x-alert/>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    {{-- <input type="text" value="PUT" name="_method"> --}}
    @method('PUT')
    @include('admin.supports.partials.form', [
        'support' => $support
    ])
</form>