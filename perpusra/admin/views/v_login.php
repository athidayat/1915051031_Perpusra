<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<script>
  $(function(){
         
    //ketika submit button d click
    $("#submit-form").click(function(){
         
         //do ajax proses
         $.ajax({
           
           url : "v_login.php", 
           type: "post", //form method
           data: $("#contoh-form").serialize(),
           dataType:"json", //misal kita ingin format datanya brupa json
           beforeSend:function(){
             //lakukan apasaja sambil menunggu proses selesai disini
             //misal tampilkan loading
             
             $(".loading").html("Please wait....");
             
           },
           success:function(result){
             
             if(result.status){
               
               alert("Selamat, resgistari sukses");
               window.location.href = "http://example.com/index.php";
               
             }else{
               
               alert("harap isi smw inputan");
             }
             
           },
           error: function(xhr, Status, err) {
             
             $("Terjadi error : "+Status);
           }
           
         });
              
       return false;
     })
  
  });
 </script>

<body>
    <div class="container  " >
        <nav class="navbar navbar-default" style="background-image: url('../assets/bg1.jpg'); margin: 0px;"></nav>
        <div class="content center" >
            <hr>
            <div class="col-md-offset-4 col-md-4 ">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password"  name="password" class="form-control" >
                        <span><?=(isset($msg))?$msg:'';?></span>
                        <hr>
                    </div>
                    <div class="form-group pull-right">
                        <button type="submit" class="btn btn-default">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>