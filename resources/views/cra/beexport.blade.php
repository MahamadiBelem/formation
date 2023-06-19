<table>
    <thead>
        <tr>
            <th>Chambre régionale</th>
            <th>Dénomination du Président</th>
            <th>Contact</th>
            <th>Nombre membre AC (Hommes)</th>
            <th>Nombre membre AC (Femmes)</th>
            <th>Durée du mandat</th>
            <th>Date du début du mandat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bes as $be)
        <tr>
            <td>{{$be->chambre_regionale->libelleCRA}}</td>
            <td>{{$be->NomPrenomPresident}}</td>
            <td>{{$be->Contact}}</td>
            <td>{{$be->NbreMembreAssembleConsulaireH}}</td>
            <td>{{$be->NbreMembreAssembleConsulaireF}}</td>
            <td>{{$be->DureeMandat}}</td>
            <td>{{$be->DateDebutMandat}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
