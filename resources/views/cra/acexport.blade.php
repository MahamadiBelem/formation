<table>
    <thead>
        <tr>
            <th>NbreMembreColJeune</th>
            <th>NbreMembreColFemme</th>
            <th>NbreMembreH</th>
            <th>NbreMembreEntreASPHF</th>
            <th>NbreMembreColPr</th>
            <th>NbreMembreColExplASPHF</th>
            <th>Chambre régionale</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($acs as $ac)
        <tr>
            <td>{{$ac->NbreMembreColJeune}}</td>
            <td>{{$ac->NbreMembreColFemme}}</td>
            <td>{{$ac->NbreMembreH}}</td>
            <td>{{$ac->NbreMembreEntreASPHF}}</td>
            <td>{{$ac->NbreMembreColPr}}</td>
            <td>{{$ac->NbreMembreColExplASPHF}}</td>
            <td>{{$ac->chambre_regionale_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
