<table>
    <thead>
        <tr>
            <th>Chambre régionale</th>
            <th>NbreMembreColJeune</th>
            <th>NbreMembreColFemme</th>
            <th>NbreMembreH</th>
            <th>NbreMembreEntreASPHF</th>
            <th>NbreMembreColPr</th>
            <th>NbreMembreColExplASPHF</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($acs as $ac)
        <tr>
            <td>{{$ac->chambre_regionale->libelleCRA}}</td>
            <td>{{$ac->NbreMembreColJeune}}</td>
            <td>{{$ac->NbreMembreColFemme}}</td>
            <td>{{$ac->NbreMembreH}}</td>
            <td>{{$ac->NbreMembreEntreASPHF}}</td>
            <td>{{$ac->NbreMembreColPr}}</td>
            <td>{{$ac->NbreMembreColExplASPHF}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
