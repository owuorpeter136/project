
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
    body{
background-image: url(image/farmer1.JPG);
background-repeat: no-repeat;
background-size: cover;
    }

    
    
</style>
<body>
    <div class="container">
        <div class="jumbotron">
            
<h1>Farmer Lending Platform</h1>
<h2>List Of Registered Farmer</h2>
<?php
 $conn = mysqli_connect("localhost", "root", "", "farmer");
   $sql = "SELECT * FROM farmers";
   $query_run=mysqli_query($conn,$sql);

 ?>
 <table class="table table-bordered" style="background-color: white;">
                <thead class="table-dark">
                    
                    <th>Farmer username</th>
                    <th>Farmer Email</th>
                   <th>Farmer National ID</th>
                   <th>CompanyID</th>
                    <th>Farmer Phonenumber</th>
                     <th>Password</th>
                   <th>Update</th>
                   <th>Delete Farmer</th>
                </thead>
                

            <?php
            if ($query_run) {
            while ($row= mysqli_fetch_array($query_run)) {
          ?>
         <tbody>
           <tr>
             <th><?php echo $row['username']?></th>
             <th><?php  echo $row['email']?></th>
             <th><?php echo $row['nationalID']?></th>
             <th><?php echo $row['companyID']?></th>
              <th><?php echo $row['phonenumber']?></th>
              <th><?php echo $row['password']?></th>
               <form action="updatefarmer.php" method="post">
                <input type="hidden" name="nationalID" value=" <?php echo $row['nationalID'] ?>">
             <th> <input type="submit" name="edit" class="btn btn-success" value="EDIT"></th>
             </form>
             <form action="delete.php" method="post">
                <input type="hidden" name="nationalID" value=" <?php echo $row['nationalID'] ?>">
             <th> <input type="submit" name="delete" class="btn btn-danger" value="DELETE"></th>
             </form>
           
           </tr>
         </tbody>
          <?php
                
            }
            }
            else{
            echo "No record found";
            }
            ?>

       </table>
        </div>
        </div>
        <a href="admin.php">Go back</a>
        <br>
            
<button onclick="window.print()">Print</button>
<footer>
    &copy;<em id="date"></em>Paul Owuor De Developer
</footer>
        </body>
</html>