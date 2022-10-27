@extends('themes.base')

@section('content')

<div class="container py-5 text-center">
    <h1 >Listado de clientes</h1>
    <a href="{{ route('client.create') }}" class="btn btn-primary">Crear Cliente</a>

@if (Session::has('mensaje'))
<div class="alert alert-info my-5">
    {{Session::get('mensaje')}}
</div>

@endif
        <table class="table table-primary">
            <thead>

                    <th>Nombre</th>
                    <th>Saldo</th>
                    <th>Acciones</th>

            </thead>
            <tbody>
                @forelse ($clients as $detail)
                <tr class="">
                    <td>{{ $detail->name }}</td>
                    <td>{{ $detail->due }}</td>
                    <td>
                        <a href="{{route('client.edit', $detail) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('client.destroy', $detail) }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro que queres eliminar el cliente?')">Eliminar</button>

                        </form>

                    </td>

                </tr>
                @empty
                <tr class="">
                    <td colspan="3">No hay registros</td>

                @endforelse



            </tbody>
        </table>

            {{ $clients->links() }}

        @if ($clients->count())
            {{ $clients->links() }}
        @endif



    </div>

</div>

@endsection
