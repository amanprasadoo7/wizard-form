<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    * {
    box-sizing: border-box;
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
    body {
    background-color: #f1f1f1;
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
{{-- {{dd($step1DataId)}} --}}

<form action="{{ route('wizard.postStep2') }}" method="POST">
  @csrf
  @if(session('error'))
  <div class="alert alert-danger">
      {{ session('error') }}
@endif

  </div>
  <input type="hidden" name="step1_data_id" value="{{ $step1DataId }}" >

  <div class="form-group">
    <label for="field4">Username</label>
    <input type="text" name="field4" id="field4" placeholder="Username" required>
  </div>

  <div class="form-group">
    <label for="field5">Domain</label>
    <input type="text" name="field5" id="field5" placeholder="Domain" required>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" required>
  </div>
  <button type="submit">Next</button>
</form>
</body>
</html>
