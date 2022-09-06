<table>
    <thead>
        <tr>
            <th>Cooperative</th>
            <th>Denomination Secretariat Cooperative</th>
            <th>Contact Secretariat Cooperative</th>
            <th>Nombre Salarie Homme</th>
            <th>Nombre Salarie Femme</th>
            <th>Date Debut Mandat</th>
            <th>Date Fin Mandat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($secretariatexecutifs as $foncorgcoop)
        <tr>
            <td>{{$foncorgcoop->cooperative->denomination}}</td>
            <td>{{$foncorgcoop->DenominationSecretariatCooperative}}</td>
            <td>{{$foncorgcoop->contactSecretariatCooperative}}</td>
            <td>{{$foncorgcoop->nombreSalarieHomme}}</td>
            <td>{{$foncorgcoop->nombreSalarieFemme}}</td>
            <td>{{$foncorgcoop->dateDebutMandat}}</td>
            <td>{{$foncorgcoop->dateFinMandat}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
