<table>
    <thead>
        <tr>
            <th>Nombre d'hommes </th>
            <th>Nombre de femmes</th>
            <th>Début du mandat</th>
            <th>Fin du mandat</th>
            <th>Nombre de mandats consécutifs </th>
            <th>Nom Prénom du Rapporteur</th>
            <th>Contact du Rapporteur</th>
            <th>Genre</th>
            <th>Associations</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($commissariataucompteassociations as $commissariataucompteassociation)
        <tr>
            <td>{{$commissariataucompteassociation->nbreMembreH}}</td>
            <td>{{$commissariataucompteassociation->nbreMembreM}}</td>
            <td>{{$commissariataucompteassociation->debutMandat}}</td>
            <td>{{$commissariataucompteassociation->finMandat}}</td>
            <td>{{$commissariataucompteassociation->nbreMandatConsecuti}}</td>
            <td>{{$commissariataucompteassociation->nomPrenomRapporteur}}</td>
            <td>{{$commissariataucompteassociation->contactRapporteur}}</td>
            <td>{{$commissariataucompteassociation->sexeRapporteur}}</td>
            <td>{{$commissariataucompteassociation->association->denomination}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
