@section('content')
<h4 id="titulo_tabla">{{ $titulo }}</h4>
<table class="table">
    <thead>
        <tr>
            @foreach($headers as $header)
            <th scope="col">{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    @forelse($datos as $item)
        <tr>
            <td>{{ $item->fecha }}</td>
            <td>{{ $item->materia }}</td>
            <td>{{ $item->presidente }} - {{ $item->vocal_1 }} - {{ $item->vocal_2 }}</td>
        </tr>
    @empty
    <tr>
        <td></td>
        <td><p>No hay datos para mostrar</p></td>
        <td></td>
    </tr>
    @endforelse
    </tbody>
</table>

@endsection
