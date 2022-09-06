<table>
    <thead>
        <tr>
            <th>Dénomination du Président</th>
            <th>Contact</th>
            <th>Nombre membre AC (Hommes)</th>
            <th>Nombre membre AC (Femmes)</th>
            <th>Durée du mandat</th>
            <th>Date du début du mandat</th>
            <th>Chambre régionale</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bes as $be)
        <tr>
            <td>{{$be->NomPrenomPresident}}</td>
            <td>{{$be->Contact}}</td>
            <td>{{$be->NbreMembreAssembleConsulaireH}}</td>
            <td>{{$be->NbreMembreAssembleConsulaireF}}</td>
            <td>{{$be->DureeMandat}}</td>
            <td>{{$be->DateDebutMandat}}</td>
            <td>{{$be->chambre_regionale_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
