<table>
    <thead>
        <tr>
            <th>Chambre régionale</th>
            <th>Dénomination du Secretaire Général</th>
            <th>Contact</th>
            <th>Date de Prise de Service</th>
            <th>Nombre Salariés (Hommes)</th>
            <th>Nombre Salariés (Femmes)</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($secra as $secr)
                <tr>
                    <td>{{$secr->chambre_regionale->libelleCRA}}</td>
                    <td>{{$secr->NomPrenomSecretaireGeneral}}</td>
                    <td>{{$secr->Contact}}</td>
                    <td>{{$secr->DatePriseServiceSecretaireGeneral}}</td>
                    <td>{{$secr->NbreSalaireH}}</td>
                    <td>{{$secr->NbreSalaireF}}</td>
                </tr>
        @endforeach
    </tbody>
</table>
