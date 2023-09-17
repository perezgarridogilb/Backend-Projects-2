<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <h4>Listado de Etiquetas</h4>
    </head>
<body>

    {{--  
    forelse es básicamente un shorthand para:   
    @foreach($tags as $tag)

    @endforeach

    @if(count($tags) == 0)
    <tr>
	    <td>
		<p>No hay etiquetas</p>
	    </td>
    </tr>
    @endif 
    --}}
    <form action="tags" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Agregar">
    </form>
    <h4>Listado de Etiquetas</h4>
<table>
    @forelse ($tags as $tag)
       <tr>
        <td>
            {{ $tag->name }}
        </td>
        <td>
            <form action="tags/{{ $tag->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Eliminar">
            </form>
        </td>
        </tr> 
    @empty
        <tr>
            <td>
                <p>No hay etiquetas</p>
            </td>
        </tr>
    @endforelse
</table>
</body>
</html>
