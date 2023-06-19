<table>
    <thead>
        <tr>
            <th>Dénomination</th>
            <th>Immatriculation</th>
            <th>Date de Création</th>
            <th>Télephone</th>
            <th>Email</th>
            <th>Boite postal</th>
            <th>Latitude(GPS)</th>
            <th>Longitude(GPS)</th>
            <th>Site Web</th>
            <th>Faitiére</th>
            <th>capital</th>
            <th>Nombre Homme</th>
            <th>Nombre Femme</th>
            <th>limite Mandat</th>
            <th>Mandat Organe Gestion</th>
            <th>Mandat Organe Controle</th>
            <th>Commune</th>
            <th>juridique</th>
            <th>Type organisation</th>
            <th>Genre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cooperatives as $cooperative)
        <tr>
            <td>{{$cooperative->denomination}}</td>
            <td>{{$cooperative->noImmatriculation}}</td>
            <td>{{$cooperative->dateCreation}}</td>
            <td>{{$cooperative->telephone}}</td>
            <td>{{$cooperative->email}}</td>
            <td>{{$cooperative->boitepostal}}</td>
            <td>{{$cooperative->coordonnegpslat}}</td>
            <td>{{$cooperative->coordonnegpslong}}</td>
            <td>{{$cooperative->siteWeb}}</td>
            <td>{{$cooperative->nomFaitiereAffliation}}</td>
            <td>{{$cooperative->montantCapital}}</td>
            <td>{{$cooperative->noMembreHomme}}</td>
            <td>{{$cooperative->noMenbreFemme}}</td>
            <td>{{$cooperative->limitationNombreMandat}}</td>
            <td>{{$cooperative->dureeMandatOrganeGestion}}</td>
            <td>{{$cooperative->dureeMandatOrganecontrol}}</td>
            <td>{{$cooperative->commune->libelleCommune}}</td>
            <td>{{$cooperative->forme_juridique->libelleformejuridique}}</td>
            <td>{{$cooperative->type_organisation->libelletypeorganisation}}</td>
            <td>{{$cooperative->genre->libellegenre}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
