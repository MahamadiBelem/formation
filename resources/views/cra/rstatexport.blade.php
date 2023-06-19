<table>
    <thead>
        <tr>
            <th>Chambre régionale</th>
            <th>NbreAsConsulairePrevAn</th>
            <th>NbreRencBurExecutif</th>
            <th>NbreRencComOrganisation</th>
            <th>NbreRencComFinan</th>
            <th>NbreRencComFoncierDecen</th>
            <th>NbreRencComPromoModerAgri</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rstats as $rstat)
        <tr>
            <td>{{$rstat->chambre_regionale->libelleCRA}}</td>
            <td>{{$rstat->NbreAsConsulairePrevAn}}</td>
            <td>{{$rstat->NbreRencBurExecutif}}</td>
            <td>{{$rstat->NbreRencComOrganisation}}</td>
            <td>{{$rstat->NbreRencComFinan}}</td>
            <td>{{$rstat->NbreRencComFoncierDecen}}</td>
            <td>{{$rstat->NbreRencComPromoModerAgri}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
