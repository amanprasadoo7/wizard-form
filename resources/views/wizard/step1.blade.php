<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>

    * {
    box-sizing: border-box;
    }

    body {
    background-color: #f1f1f1;
    }

    .form-group {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  input[type="text"] {
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    width: 300px;
  }
    #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
    }

    h1 {
    text-align: center;  
    }

    input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    }

    input.invalid {
    background-color: #ffdddd;
    }

    .tab {
    display: none;
    }

    button {
    background-color: #04AA6D;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
    }

    button:hover {
    opacity: 0.8;
    }

    #prevBtn {
    background-color: #bbbbbb;
    }

    .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;  
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
    }

    .step.active {
    opacity: 1;
    }

    .step.finish {
    background-color: #04AA6D;
    }
</style>
<body>

<form action="{{ route('wizard.postStep1') }}" method="POST">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

  @csrf
  @if(session('error'))
  <div class="alert alert-danger">
      {{ session('error') }}
  </div>
@endif
  <div class="form-group">
    <label for="field1">First Name</label>
    <input type="text" name="field1" id="field1" placeholder="First Name" required>
  </div>

  <div class="form-group">
    <label for="field2">Last Name</label>
    <input type="text" name="field2" id="field2" placeholder="Last Name" required>
  </div>

  <div class="form-group">
    <label for="field3">Address</label>
    <input type="text" name="field3" id="field3" placeholder="Address" required>
  </div>

  <div class="form-group">
    <label for="contact_number">Contact Number</label>
    <input type="text" name="contact_number" id="contact_number" pattern="\d{10}" placeholder="Contact Number" required>
  </div>

  <input type="submit" value="Submit">
</form>

</body>
</html>
