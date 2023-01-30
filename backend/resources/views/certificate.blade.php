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
<div class="container" id="certificate">
<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Birth Certificate</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       @foreach ($data as $viewData)
       <span style="font-size:30px"><b> {{$viewData->cname}}</b></span><br/><br/>
       <span style="font-size:25px"><i>was born to</i></span> <br/><br/>
       <span style="font-size:20px"><b>Mother Name:{{$viewData->mname}}</b> and </span> <br/><br/>
       <span style="font-size:20px"><b> Father Name:{{$viewData->fname}} </b></span> <br/>
       <span style="font-size:25px"><i>on</i></span><br>
       
       <b>{{$viewData->dob}}</b><br>
      <span style="font-size:30px">address</span><br>
      <b>{{$viewData->address}}</b><br>
      <span style="font-size:20px"><b>Approved By:</b>
      @endforeach

</div>
</div>
</div>
</body>
<script>
$( document ).ready(function() {
    window.print()
});
</script>

<div>hii</div>