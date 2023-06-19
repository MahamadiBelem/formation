<table>
    <thead>
    <tr>
      <th>Filière </th>

      <th>Actions</th>
    </tr>
    </thead>
    <tbody>
      @foreach ($filieres as $filiere)
      <tr>
        <td>{{$filiere->LibelleFiliere}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
