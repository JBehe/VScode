<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form Project</title>
</head>
  <body>
    <div class = "container">
    <form class="row g-3">
        <div class="col-md-6">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" class="form-control" id="fname">
        </div>
        <div class="col-md-6">
          <label for="lname" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lname">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-select">State</label>
          <div>
          <select id="inputState" style = "width: 300px; height: 40px;">
            <option value = "in"> Indiana </option>
            <option value = "oh" > Ohio</option>
            <option value = "mi" selected> Michigan </option>
            <option value = "fl"> Florida </option>
            <option value = "ny"> New York</option>
          </select>
</div>
        </div>
        
        <div class= "col-md-4">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-auto">
        <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="radio" id="radio1" name="gender" value="male"> Male </label>
        </div>
        </div>
        <div class="col-auto">
        <div class="form-check">
          <label class="form-check-label"><input class="form-check-input" type="radio" id="radio2" name="gender" value="female"> Female </label>
        </div>
        </div>
        
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>



  </div>
  </body>
</html>