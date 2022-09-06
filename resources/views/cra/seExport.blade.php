<table>
    <thead>
        <tr>
            <th>Dénomination du Secretaire Général</th>
            <th>Contact</th>
            <th>Date de Prise de Service</th>
            <th>Nombre Salariés (Hommes)</th>
            <th>Nombre Salariés (Femmes)</th>
            <th>Chambre régionale</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($secra as $secr)
                <tr>
                    <td>{{$secr->NomPrenomSecretaireGeneral}}</td>
                    <td>{{$secr->Contact}}</td>
                    <td>{{$secr->DatePriseServiceSecretaireGeneral}}</td>
                    <td>{{$secr->NbreSalaireH}}</td>
                    <td>{{$secr->NbreSalaireF}}</td>
                    <td>{{$secr->chambre_regionale_id}}</td>
                </tr>
        @endforeach
    </tbody>
</table>
