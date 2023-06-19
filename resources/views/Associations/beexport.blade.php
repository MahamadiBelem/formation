<table>
    <thead>
        <tr>
            <th>Associations</th>
            <th>Nombre d'hommes </th>
            <th>Nombre de femmes</th>
            <th>Début du mandat</th>
            <th>Fin du mandat</th>
            <th>Nom Prénom du Président</th>
            <th>Contact du Président</th>
            <th>Genre</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bureauexecutifassociations as $bureauexecutifassociation)
        <tr>
            <td>{{$bureauexecutifassociation->association->denomination}}</td>
            <td>{{$bureauexecutifassociation->nbreMembreH}}</td>
            <td>{{$bureauexecutifassociation->nbreMembreM}}</td>
            <td>{{$bureauexecutifassociation->debutMandat}}</td>
            <td>{{$bureauexecutifassociation->finMandat}}</td>
            <td>{{$bureauexecutifassociation->nomPrenomPresident}}</td>
            <td>{{$bureauexecutifassociation->contactPresident}}</td>
            <td>{{$bureauexecutifassociation->sexePresident}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
