
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSP</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <div class="paragraph border border-primary p-2">
<!-- <h1 style="text-align: center;">///CSM</h1> -->
<h1 style="text-align: center;">
    <span style="color:#ee9f27;">/</span>
    <span style="color:#FF0000;">/</span>
    <span style="color:#6610f2;">/</span>
    <span >CSM</span>
    </h1>
    
                </div>
            </div>
            <div class="col-md-5">
                <h4 style="color:red">User Log in</h4>
            <form action="index" method="post">
                @csrf
                <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
            <input type="email" id="email" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
           
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control form-control-lg"
              placeholder="Enter password" />
           
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">           
          </div>
          </form>
            </div>
        </div>
    </div>
</body>
</html>