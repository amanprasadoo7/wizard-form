<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    h2 {
      text-align: center;
    }
  </style>
</head>
<body>
    <form action="{{ route('wizard.step1') }}" method="GET">
    <h2>Table</h2>

<div class="container">

  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Username</th>
        <th>Domain</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($allData as $index => $data)
        <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $data->field1 }}</td>
        <td>{{ $data->field2 }}</td>
        <td>{{ $data->field3 }}</td>
        <td>{{ $data->contact_number }}</td>
        <td>{{ $data->field4 }}</td>
        <td>{{ $data->field5 }}</td>
        <td>{{ $data->email }}</td>
      </tr>
      @endforeach
    </tbody>
  <button type="submit">New Post</button>
  </table>
  </table>
</div>
</form>

</body>
</html>
