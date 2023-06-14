<table>
<tr>
<td>id</td>
<td>nombreProyecto</td>
<td>fuenteFondos</td>
<td>montoPlanificado</td>
<td>montoPatrocinado</td>
<td>montoFondosPropios</td>
</tr>    
@foreach ($listaProyectos as $proyecto)
    <tr>
        <td>{{ $proyecto->id  }}</td>
        <td>{{ $proyecto->nombreProyecto }}</td>
        <td>{{ $proyecto->fuenteFondos }}</td>
        <td>{{ $proyecto->montoPlanificado }}</td>
        <td>{{ $proyecto->montoPatrocinado }}</td>
        <td>{{ $proyecto->montoFondosPropios }}</td>
    </tr>  
@endforeach
</table>