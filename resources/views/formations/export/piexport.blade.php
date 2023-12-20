<table>
    <thead>
        <tr>
            <th>Apprenants</th>
            <th>centreformation</th>
            <th>libelleProjetInstallation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pi as $foncorgcoop)
        <tr>
            <td>{{$foncorgcoop->apprenant->matricule}}</td>
            <td>{{$foncorgcoop->centreformation->denomination}}</td>
            <td>{{$foncorgcoop->libelleProjetInstallation}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
