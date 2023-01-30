<!DOCTYPE html>
<html lang="en">

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

</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="user.png" class="navbar-brand" alt="" style="height:50px;width:50px;border-radius:50%"><a class="navbar-brand" href="#"></a><br>
        <span style="margin-left:35px ;color:white"></span>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="viewApplicaiton">View All Applcation </a>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>





  <div class="container">
    <h2 style="color:green">View Birth Certificate Applicaiton Status</h2>
    <h4 style="color:green"></h4>
    <div class="row">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Applicaiton Type</th>
            <th scope="col">Applied By</th>
            <th scope="col">Applied On</th>
            <th scope="col">Child Name</th>
            <th scope="col">Father Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Address Proof</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
<?php 
$i=1;
?>
        @foreach ($cerdata as $viewData)
          <tr>
            <th scope="row"><?php echo $i;?></th>
            <td>Birth Certificate</td>
            <td>{{$viewData->cname}}</td>
            <td>{{$viewData->dateofapply}}</td>
            <td>{{$viewData->cname}}</td>
            <td>{{$viewData->fname}}</td>
            <td>{{$viewData->gender}}</td>
            <td><a href="" target="_blank">Document</a></td>
            <td><?php 
      if ($viewData->status == 0)
      {
        echo ("Pending");
      }elseif($viewData->status == 1)
      {
        echo ("Approved");
      }else{
        echo ("Reject");
      }
      ?></td>
            <td><a href='approved?id={{$viewData->id}}' style="margin:5px"><i class="fa fa-check-circle" style="font-size:20px;color:green"></i></a>
              <a href='reject?id={{$viewData->id}}'><i class="fa fa-close" style="font-size:20px;color:red"></i></a>
            </td>
            <?php $i++; ?>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

</body>

</html>