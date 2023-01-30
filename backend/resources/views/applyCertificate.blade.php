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
      <li ><a href="viewbirthCertificate">View Birth Certificate Applcation Status </a>
      </li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
        <h2 style="color:green">Apply For Birth Certificate</h2>
                 <div class="row">
                    <form action="applyCertificates" method="post"  enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" name="uid" value="{{ Session::get('id')}}">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="text-light" for="cname">Child Name *</label>
                            <input type="text" name="cname" class="form-control" id="cname">
                            <span id="cm"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="text-light" for="fname">Father Name *</label>
                            <input type="text" name="fname" class="form-control" id="fname">
                            <span id="fm"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="text-light" for="mname">Mother Name *</label>
                            <input type="text" name="mname" class="form-control" id="mname">
                            <span id="mm"></span>
                            </div>
                        </div>             
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="text-light" for="bplace">Place Of Birth *</label>
                            <input type="text" name="bplace" class="form-control" id="bplace">
                            <span id="pb"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="text-light" for="dob">DOB *</label>
                            <input type="date" name="dob" class="form-control" id="dob">
                            <span id="db"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="text-light" for="email">Gender *</label><br>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="m">
                            <label class="form-check-label text-light" for="male">Male</label>
                            <input class="form-check-input" type="radio" name="gender" id="female" value="f" >
                            <label class="form-check-label text-light" for="female">Female</label>
                            </div>
                            <span id="gn"></span>
                            </div>          
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="text-light" for="bplace">Permanent Address *</label>
                            <textarea name="padd" class="form-control"  ></textarea>
                            <div class="row">
                                
                            <div class="col-md-6">  <div class="form-group">
                            <label class="text-light" for="addrespdf">State *</label>
                            <select name="state" id="state" class="form-control" >    
                                <option value="0">Select State</option>
                                @foreach ($state as $viewData)
                                <option value="{{$viewData->sid}}">{{$viewData->state}}</option>
                                @endforeach
                                
                            </select>
                            <span id="statespan"></span>
                            </div></div>
                                <div class="col-md-6">  <div class="form-group">
                            <label class="text-light" for="addrespdf">Dist *</label>
                            <select name="dist" id="dist" class="form-control">
                                <option value="0">Select Dist</option>
                            </select>
                            <span id="distspan"></span>
                            </div></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="text-light" for="house">House No locality Zip *</label>
                            <textarea name="house" id="house" class="form-control" style="max-height: 40px;max-width: 400px"></textarea>
                            <span id="texta"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="text-light" for="addrespdf">Upload Address Proof *</label>
                            <input type="file" name="addrespdf" class="form-control" id="addrespdf">
                            <span id="doc"></span>
                            </div>
                        </div>
                    </div>
                   
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                  
       </div>
</body>
</html>


    <script>
        $("#state").change(function() {

            state = $(this).val();
            // successAlerts('',serviceProvider,'info');
            $.ajax({
                url: "getdist",
                type: "POST",
                dataType: "JSON",
                data: {
                    '_token': '{{csrf_token()}}',
                    stateid: state
                },
                success: function(data) {
                    $('#dist').html(data.html);
                }
            });
        });
    </script>
