<head>
  <title>User DashBoard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.33/sweetalert2.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="user.png" class="navbar-brand" alt="" style="height:50px;width:50px;border-radius:50%"><a class="navbar-brand" href="#"></a><br>
        <span style="margin-left:35px ;color:white"></span>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="applyCertificate">Add Birth Certificate</a></li>
        <li><a href="viewbirthCertificate">View Birth Certificate Applcation Status </a>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>





  <div class="container">
    <h2 style="color:green">View Birth Certificate Applicaiton Status</h2>
    <div class="row">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Applicaiton Type</th>
            <th scope="col">Applied On</th>
            <th scope="col">Applicant Name</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          ?>
          @foreach ($cerdata as $viewData)
          <tr>
            <th scope="row"><?php echo $i; ?></th>

            <td>Birth Certificate</td>
            <td>{{$viewData->dateofapply}}</td>
            <td>{{$viewData->cname}}</td>
            <td><?php
                if ($viewData->status == 0) {
                  echo ("Pending");
                ?>
                <i class="fa fa-hourglass-start" style="font-size:24px"></i>
              <?php
                } elseif ($viewData->status == 1) {
              ?>

                <a href="certificate?id={{$viewData->id}}"><?php echo ("Approved"); ?></a>
                <?php
                ?>
                <!-- <a href="certificate?id={{$viewData->id}}"><i class="fa fa-download" style="font-size:24px"></i></a> -->

              <?php
                } else {
                  echo ("Reject  ");
                }
              ?>
            </td>
            <td>
              <?php
              if ($viewData->status == 1) {
              ?>
                <a href="pdf?id={{$viewData->id}}"><i class="fa fa-download" style="font-size:24px"></i></a>
            </td>
          <?php
              }else{
                ?>
                <i class="fa fa-times" style="font-size:24px"></i>
                <?php
              }
          ?>

          <?php $i++; ?>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

</body>

</html>