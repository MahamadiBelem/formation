<table>
    <thead>
        <tr>
            <th>Associations </th>
            <th>Année</th>
            <th>Nom Prénom SP</th>
            <th>Contact SP</th>
            <th>Nombre de salaire PH</th>
            <th>Nombre de salaire PF</th>
        </tr>
    </thead>
    <tbody>
    </tr>
</thead>
<tbody>
    @foreach ($secretariatexecutifassociations as $secretariatexecutifassociation)
    <tr>
        <td>{{$secretariatexecutifassociation->association->denomination}}</td>

        <td>{{$secretariatexecutifassociation->annee}}</td>
        <td>{{$secretariatexecutifassociation->nomPrenomSP}}</td>
        <td>{{$secretariatexecutifassociation->contactSP}}</td>
        <td>{{$secretariatexecutifassociation->nbreSalairePH}}</td>
        <td>{{$secretariatexecutifassociation->nbreSalairePF}}</td>



        </tr>
        @endforeach
    </tbody>
</table>
