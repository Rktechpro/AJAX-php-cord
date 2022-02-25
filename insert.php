<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--  JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- JavaScript --->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:gray">
    <div class="container ">
        <h1 class="text-center">Insert Data Using AJAX PHP  and MySQLi</h1>
        <br>
        <div class="col-lg-8 m-auto">
        <form action="insertphp.php"id="myform" method="post">
            <div class="form-group">
                <label for="">Username:</label>
                <input type="text"name="username"class="form-control">
            </div>
        <div class="form-group">
            <label for="">Password:</label>
                <input type="text"name="password"class="form-control">
            </div><br>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <input type="submit"name="sumbit" id="sumbit" value="Submit" class="btn btn-success">
        </form>
      </div>
      <div>
          <br><br>
          <h1 class="text-center bg-dark text-white">Display data using AJAX</h1>
          <br>
          <button id="displaydata" class="btn btn-danger">Display</button><br><br>
          <table class="table table-striped table-bordered">
              <thead>
                  <th>id</th>
                  <th>Name</th>
                  <th>Password</th>
                  <th>Email ID</th>
              </thead>
              <tbody id="response">
            


              </tbody>
          </table>
      </div>
 </div>
      <script>
          //jQuery
          $(document).ready(function(){
              var form=$('#myform');
              $('#sumbit').click(function(){
                 $.ajax({
                    url:form.attr("action"),
                    type:'post',
                    data:$("#myform input").serialize(),
                    success:function(data){
                        console.log(data);
                    }
                 });
              });
        
           $('#displaydata').click(function(){
            // displaydata();
            // function displaydata(){
              $.ajax({
                url:'displayajax.php',
                type:'post',
                success:function(responsedata){
                    $('#response').html(responsedata);
                }
              });
            // }
         });
});
      </script>
</body>
</html>