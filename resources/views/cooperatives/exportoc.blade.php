<table>
    <thead>
        <tr>
            <th>Cooperative</th>
            <th>Nombre Menbre Homme</th>
            <th>Nombre Menbre Femmme</th>
            <th>Date Debut Mandat</th>
            <th>Date Fin Mandat</th>
            <th>Nombre Mandat Consecutif</th>
            <th>Nom Prenom Premier Responsable</th>
            <th>Contact Premier Responsable</th>
            <th>Sexe Premier Responsable</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($organescontroles as $foncorgcoop)
        <tr>
            <td>{{$foncorgcoop->cooperative->denomination}}</td>
            <td>{{$foncorgcoop->nombreMenbreHomme}}</td>
            <td>{{$foncorgcoop->nombreMenbreFemmme}}</td>
            <td>{{$foncorgcoop->dateDebutMandat}}</td>
            <td>{{$foncorgcoop->dateFinMandat}}</td>
            <td>{{$foncorgcoop->nombreMandatConsecutif}}</td>
            <td>{{$foncorgcoop->nomPrenomPremierResponsable}}</td>
            <td>{{$foncorgcoop->contactPremierResponsable}}</td>
            <td>{{$foncorgcoop->sexePremierResponsable}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
