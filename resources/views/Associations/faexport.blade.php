<table>
    <thead>
        <tr>
            <th>Associations </th>
            <th>Nombre d'assemblées générales prévu</th>
            <th>Nombre de rencontres des organes de gestion</th>
            <th>Nombre de rencontres des organes de surveillance</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fonctionnementassociations as $fonctionnementassociation)
        <tr>
            <td>{{$fonctionnementassociation->association->denomination}}</td>

            <td>{{$fonctionnementassociation->nbreAssembleeGeneralesOrdinairePrevu}}</td>
            <td>{{$fonctionnementassociation->nbreRencontreOrganeGestion}}</td>
            <td>{{$fonctionnementassociation->nbreRencontreOrganeSurveillance}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
