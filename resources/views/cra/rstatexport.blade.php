<table>
    <thead>
        <tr>
            <th>NbreAsConsulairePrevAn</th>
            <th>NbreRencBurExecutif</th>
            <th>NbreRencComOrganisation</th>
            <th>NbreRencComFinan</th>
            <th>NbreRencComFoncierDecen</th>
            <th>NbreRencComPromoModerAgri</th>
            <th>Chambre régionale</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rstats as $rstat)
        <tr>
            <td>{{$rstat->NbreAsConsulairePrevAn}}</td>
                <td>{{$rstat->NbreRencBurExecutif}}</td>
                <td>{{$rstat->NbreRencComOrganisation}}</td>
                <td>{{$rstat->NbreRencComFinan}}</td>
                <td>{{$rstat->NbreRencComFoncierDecen}}</td>
                <td>{{$rstat->NbreRencComPromoModerAgri}}</td>
                <td>{{$rstat->chambre_regionale_id}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
