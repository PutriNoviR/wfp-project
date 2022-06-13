<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List Medicines by Category</h2>
  <p>ID Category: {{ $id_category }} with name: {{ $namecategory }}</p>   
  <p>Total rows: {{ $getTotalData }}</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama Kategori</th>
        <th>Form</th>
        <th>Restriction and Formula</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
       @foreach($result as $li)
      <tr>
        <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_and_formula }}</td>
        <td>{{ $li->price }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
