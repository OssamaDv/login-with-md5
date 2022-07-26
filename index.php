<?PHP
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div>
   <?php
    if(isset($_POST['register']))
    {
        
        $username           =$_POST['username'];
        $password           =md5($_POST['password']);

        $sql         ="INSERT INTO passmd5 (username,password) VALUES(?,?)";
        $stmtinsert  =$db->prepare($sql);
        $result      =$stmtinsert->execute([$username,$password]);
        if($result)
        {
          echo 'successfully saved.';
        }  
        else
        {
            echo 'there were errors while saving the data';
        }
    }
   ?>
  </div>
 <div class="row">
  <div class="col-sm-3">
   <h1>LOGIN PAGE</h1>
   <p><b>FILL UP THE FORM</b></p>
   <hr class="mb-3">
    <div>
     <form method="post">
      <label >Username</label>
      <input type="text" name="username" class="form-control" required>
      <br />
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
      <hr class="mb-3">
      <input type="submit" name="register" value="register" class="btn btn-primary">
      <p align="center"><a href="index.php?action=login">Login</a></p>
     </form>
    </div>

    <div class="accordion" id="accordionExample">
     <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Lookup 
      </button>
     </h2>
     <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is a simple register code with <code>password md5 encryption.</code></strong>
      </div>
     </div>
    </div>
    </div>

</body>
</html>