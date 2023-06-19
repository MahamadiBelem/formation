<table>
    <thead>
    <tr>
      <th>Maillon </th>

      <th>Actions</th>
    </tr>
    </thead>
    <tbody>
      @foreach ($maillons as $maillon)
      <tr>
        <td>{{$maillon->Libelle}}</td>
      </tr>
      @endforeach
    </tbody>
</table>
