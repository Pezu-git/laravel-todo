<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  table td,
  table th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  table tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  table tr:hover {
    background-color: #ddd;
  }

  table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04A;
    color: white;
  }
</style>

<body>

  <table>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
    @foreach($todos as $todo)
    <tr>
      <td>{{ $todo->id }}</td>
      <td>{{ $todo->title }}</td>
      <td>{{ $todo->description }}</td>
      <td>{{ $todo->created_at }}</td>
      <td>{{ $todo->updated_at }}</td>
    </tr>
    @endforeach
  </table>


</body>

</html>