<table>
    <thead>
        <tr>
            <th>Libellé</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Boite postale</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Site Web</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cra as $cr)
        <tr>
            <td>{{$cr->LibelleCRA}}</td>
            <td>{{$cr->telephone}}</td>
            <td>{{$cr->email}}</td>
            <td>{{$cr->boitepostal}}</td>
            <td>{{$cr->gpslatitude}}</td>
            <td>{{$cr->gpslongitude}}</td>
            <td>{{$cr->siteWeb}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
