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
            @foreach ($cps as $cp)
                <tr>
                    <td>{{$cp->chambre_regionale->libelleCRA}}</td>
                    <td>{{$cp->NbreAsConsulairePrevAn}}</td>
                    <td>{{$cp->NbreRencBurExecutif}}</td>
                    <td>{{$cp->NbreRencComOrganisation}}</td>
                    <td>{{$cp->NbreRencComFinan}}</td>
                    <td>{{$cp->NbreRencComFoncierDecen}}</td>
                    <td>{{$cp->NbreRencComPromoModerAgri}}</td>
                </tr>
        @endforeach
    </tbody>
</table>
