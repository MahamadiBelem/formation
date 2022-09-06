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
            @foreach ($cps as $cp)
                <tr>
                    <td>{{$cp->NbreAsConsulairePrevAn}}</td>
                    <td>{{$cp->NbreRencBurExecutif}}</td>
                    <td>{{$cp->NbreRencComOrganisation}}</td>
                    <td>{{$cp->NbreRencComFinan}}</td>
                    <td>{{$cp->NbreRencComFoncierDecen}}</td>
                    <td>{{$cp->NbreRencComPromoModerAgri}}</td>
                    <td>{{$cp->chambre_regionale_id}}</td>
                </tr>
        @endforeach
    </tbody>
</table>
