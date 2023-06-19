<table>
    <thead>
        <tr>
            <th>Dénominations </th>
            <th>N° Recepisse</th>
            <th>Date de Création</th>
            <th>Genre</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Site Web</th>
            <th>Nombre de Membre Hommes</th>
            <th>Nombre de Membre Femmes</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($associations as $association)
        <tr>
            <td>{{$association->denomination}}</td>
            <td>{{$association->noRecepisse}}</td>
            <td>{{$association->dateCreation}}</td>
            <td>{{$association->genre}}</td>
            <td>{{$association->telephone}}</td>
            <td>{{$association->email}}</td>
            <td>{{$association->siteWeb}}</td>
            <td>{{$association->nbreMembreH}}</td>
            <td>{{$association->nbreMembreF}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
