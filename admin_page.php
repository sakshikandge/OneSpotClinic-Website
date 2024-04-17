<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  

  
  
    
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <style>

<style>
      body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.admin-header {
    background-color: rgb(63, 120, 185)      ;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    color: white;
}

.admin-title {
    margin: 0;
}

.admin-buttons {
    display: flex;
    gap: 10px;
}

.admin-button {
    background-color:rgb(63, 120, 185);
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

.admin-button:hover {
    background-color:rgb(54, 104, 161);
}

    </style>
    </style>

</head>
<body>
   
<!--div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div-->

 
    
    
</head>
<body>
    <header class=" admin-header bg-info" >
        <h1 class="admin-title bg-info text-white" >Admin Page</h1>
        <div class="admin-buttons">
            <a href="logout.php"><button class="admin-button bg-info">Logout</button></a>
            <button class="admin-button bg-info">Admin</button>
        </div>
    </header>

    <div class="container-fluid">
 <div class="col-md-12">
<div class="row">
<div class="col-md-2" style="margin-left: -30px;">

<?php
include("sidenave.php");
?>


</div>

<div class="col-md-10">
    <h4 class="my-2">Admin Dashboard</h4>
   <div class="col-md-12 my-1"> 
    <div class="row">
        <div class="col-md-3 bg-success mx-2" style="height:130px;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                   <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                   <h5 class="my-2 text-white">Total</h5>
                   <h5 class="my-2 text-white">Admin</h5>

                </div>
                <div class="col-md-4">
                <a href="#"><i class="fa-solid fa-user-gear fa-3x my-4 " style="color:white;"></i></a>
                    
                </div>

           </div>

        </div> 
           
        </div>
        <div class="col-md-3 bg-info mx-2" style="height:130px;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                   <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                   <h5 class="my-2 text-white">Total</h5>
                   <h5 class="my-2 text-white">Doctors</h5>

                </div>
                <div class="col-md-4">
                <a href="#"><i class="fa-solid fa-user-doctor fa-3x my-4 " style="color:white;"></i></a>

                
                    
                </div>

           </div>

        </div> 
        
           
           </div>
           <div class="col-md-3 bg-warning mx-2" style="height:130px;">
           <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                   <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                   <h5 class="my-2 text-white">Total</h5>
                   <h5 class="my-2 text-white">Appointments</h5>

                </div>
                <div class="col-md-4">
                <a href="#"><i class="fa-regular fa-calendar-check fa-3x my-4" style="color:white;"></i></a>
                    
                </div>

           </div>

        </div> 
           
           </div>

           <div class="col-md-3 bg-danger mx-2 my-3" style="height:130px;">
           <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                   <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                   <h5 class="my-2 text-white">Total</h5>
                   <h5 class="my-2 text-white">Patients</h5>

                </div>
                <div class="col-md-4">
                <a href="#"><i class="fa-solid fa-procedures fa-3x my-4 " style="color:white;"></i></a>
                    
                </div>

           </div>

        </div> 
           </div>
           <div class="col-md-3 bg-warning mx-2 my-3" style="height:130px;">
           <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                   <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                   <h5 class="my-2 text-white">Total</h5>
                   <h5 class="my-2 text-white">Report</h5>

                </div>
                <div class="col-md-4">
                <a href="#"><i class="fa-solid fa-flag fa-2x my-4 " style="color:white;"></i></a>
                    
                </div>

           </div>

        </div> 
           
           </div>
           <div class="col-md-3 bg-success mx-2 my-3" style="height:130px;">
           <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                   <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                   <h5 class="my-2 text-white">Total</h5>
                   <h5 class="my-2 text-white">Admin</h5>

                </div>
                <div class="col-md-4">
                <a href="#"><i class="fa-solid fa-user-gear fa-2x my-4 " style="color:white;"></i></a>
                    
                </div>

           </div>

        </div> 
           
           </div>
      
    </div>
</div>
</div>




        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>


 


</body>
</html>

