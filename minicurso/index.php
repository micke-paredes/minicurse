<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
        crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/config.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form-row">
          <div class="form-row">
            <div class="col-md-3">
              <label class="form-label">Full name</label>
              <input type="text" class="form-control" id="fullName" placeholder="Jhon">
            </div>
            <div class="col-md-3">
              <label class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Perez">
            </div>
            <div class="col-md-3">
               <label class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="email@domain.com">
            </div>
            <div class="col-md-3">
               <label class="form-label">Phone</label>
              <input type="number" min="0" max="9999999999" id="phone" maxlenght="10" class="form-control" placeholder="5611135447">
            </div>
            <div class="col-md-4">
               <label class="form-label">Street</label>
              <input type="text" class="form-control" id="street" placeholder="Av. 309">
            </div>
            <div class="col-md-4">
               <label class="form-label">External number</label>
              <input type="text" class="form-control" id="extNumber" placeholder="A316">
            </div>
            <div class="col-md-4">
               <label class="form-label">Internal number</label>
              <input type="text" class="form-control" id="intNumber" placeholder="Dept 105">
            </div>
            <div class="col-md-2">
               <label class="form-label">Zip Code</label>
              <input type="number" class="form-control" id="zipCode" placeholder="Zip Code">
            </div>
            <div class="col-md-3">
               <label class="form-label">State</label>
              <input type="text" class="form-control" id="state" placeholder="State">
            </div>
            <div class="col-md-3">
               <label class="form-label">City</label>
              <input type="text" class="form-control" id="city" placeholder="City">
            </div>
            <div class="col-md-4">
               <label class="form-label">Municipality</label>
              <input type="text" class="form-control" id="municipality" placeholder="Municipality">
            </div>
            <div class="col-md-12">
               <label class="form-label">Colony</label>
              <input type="text" class="form-control" id="colony" placeholder="Colony">
            </div>
            <div class="col-md-12">
              <input type="button" class="btn btn-success" value="Send" onclick="sendForm()">
            </div>
          </div>
        </div>
    <div>
</body>
</html>