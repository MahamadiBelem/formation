<table>
    <thead>
        <tr>
            <th>Libellé </th>
            <th>Actions </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($activites as $activite)
        <tr>

            <td>{{$activite->Libelle}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
