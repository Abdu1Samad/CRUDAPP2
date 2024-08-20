<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>

    <!-- my -css-link  -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap-css-link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">MOBILE</th>
            <th scope="col">QUALIFICATION</th>
            <th scope="col">REFERANCE</th>
            <th scope="col">POST</th>
            <th colspan="2">OPERATION</th>
            <!-- <th>delete</th> -->
          </tr>
        </thead>
 
       <tbody>

       <!-- php  -->
      <?php
        
      include("db.php");

      $selectquery = "SELECT * FROM registration";
      $query = mysqli_query($connection,$selectquery); 
        
        
      while($result = mysqli_fetch_assoc($query)){

      ?>
        <tr>
            <td><?php echo $result['Id'];?></td>
            <td><?php echo $result['Name'];?></td>
            <td><?php echo $result['Email'];?></td>
            <td><?php echo $result['Mobile'];?></td>
            <td><?php echo $result['Qualification'];?></td>
            <td><?php echo $result['Referance'];?></td>
            <td><?php echo $result['Language'];?></td>            
            <td><a href="update.php?Id=<?php echo $result['Id'];?>"><button type="button" class="btn btn-primary">Edit</button></a></td>
            <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>   
      <?php
      }
        
      ?> 
       </tbody>
        

      </table>
      </div>  


     <!-- Bootstrap-js-link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>