@extends('plantilles/plantilla')
@section('principal')
    <table>
        @foreach($listado as $p)
            <tr>
                <td>{{ $p->TITULO }} </td>
                <td><a href='/pelicula/{{ $p->ID }}'>Mostra</a></td>
            </tr>
        @endforeach
    </table>

@endsection
