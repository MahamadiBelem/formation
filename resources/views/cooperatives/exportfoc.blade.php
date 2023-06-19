<table>
    <thead>
        <tr>
            <th>Cooperative</th>
            <th>Nombre AG Ordinaire</th>
            <th>Nombre Rencontre Organe Gestion</th>
            <th>Nombre Rencontre Surveillance</th>
            <th>Semestre</th>
            <th>Année</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fonctionement_organe_cooperatives as $foncorgcoop)
        <tr>
            <td>{{$foncorgcoop->cooperative->denomination}}</td>
            <td>{{$foncorgcoop->nombreAgOrdinaire}}</td>
            <td>{{$foncorgcoop->nombreRencontreOrganeGestion}}</td>
            <td>{{$foncorgcoop->nombreRencontreSurveillance}}</td>
            <td>{{$foncorgcoop->semestre}}</td>
            <td>{{$foncorgcoop->annee}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
