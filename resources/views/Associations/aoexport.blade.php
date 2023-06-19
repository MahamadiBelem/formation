<table>
    <thead>
    <tr>
      <th>Activités </th>

      <th>Actions</th>
    </tr>
    </thead>
    <tbody>
      @foreach ($activiteorganes as $activiteorgane)
      <tr>
        <td>{{$activiteorgane->activitePrincipale}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
