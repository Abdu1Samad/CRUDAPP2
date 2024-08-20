<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title  -->
    <title>CrudApp</title>

    <!-- Bootstrap-css-link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- my-css-link  -->
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    
    <!-- form  -->
    <div class="form-heading mb-3">
        <h1>Apply For Company Placement</h1>
    </div>
    <form action="form.php" method="POST">
    <div class="form-container">
    <div class="mb-2">
        <label for="exampleFormControlInput1" class="form-label">User name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Enter your name">
      </div>
      <div class="mb-2">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-2">
        <label for="exampleFormControlInput1" class="form-label">Mobile</label>
        <input type="tel" class="form-control" id="exampleFormControlInput1" name="mobile" placeholder="Mobile number">
      </div>
      <div class="mb-2">
        <label for="exampleFormControlInput1" class="form-label">Qualification</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="degree" placeholder="Enter your qualification">
      </div>
      <div class="mb-2">
        <label for="exampleFormControlInput1" class="form-label">Referance</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Referance" placeholder="Any reference">
      </div>
      <div class="mb-2">
        <label for="exampleFormControlInput1" class="form-label">Language</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="lang" placeholder="Enter your language">
      </div>
      <div class="mb-2">
        <button type="submit" name="Register">Register</button>
      </div>
    </div>
    </form>
    <!-- Table  -->

    <!-- Bootstrap-js-link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- php-code  -->
    <?php
    
    include("db.php");
    
    if(isset($_POST['Register'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $Qualification = $_POST['degree'];
      $Referance = $_POST['Referance'];
      $language = $_POST['lang'];

      $insertquery = "INSERT INTO `registration`(Name, Email, Mobile, Qualification, Referance, Language) VALUES ('$username','$email','$mobile','$Qualification','$Referance','$language')";

      $query = mysqli_query($connection,$insertquery);

      if($query){
        ?>

        <script>
          alert("Data Inserted Succesfully");
        </script>

        <?php
      }
      else{
        ?>

        <script>
          alert("Data Inserted Erorr");
        </script>

        <?php
      }
    }
    
    
    ?>

  </body>
</html>
