<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add Account </title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            
           
         }
         .img{
            float: right;
         }
         .box{
            margin-top: 3%;
            width: 400px;
          background: 0 2rem 3rem var(--color-light);
          border: dashed;
      border-radius: 6px;
    position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%) scale(1);  
   text-align: center;
   padding: 0 30px 30px;
   color: #333;
         }
        .img2{
            float: left;
        }
    </style>
</head>
<body>  
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <li  style="color:white"> <a href="Dashboard.php"> HOME </a> </li>
        <li  style="color: white;"> <a href="index.html"> LOGOUT </a> </li>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <div class="img2">  <img src="https://lh3.googleusercontent.com/dm7Zo8aRH6unYdLqjMeXK-2xFCoCFHEAz-Q52Nx8_LZjgI4xqbTE_nCtqVaB7OPDs9enmsOuMUtBP5Xy1PIys9ew6AezR___HP0wjRXLJVrq_l4khIfXMpFYIwHp5xEHykjGU2eNDA=w2400"  width="300px"> </div>
    <div class="img">
        <img src=""  width="600px">
    </div>
    <form action="" class="box">
    <span> <b> Add Account </b></span> <br>
    <br> 
    <select class="btn btn-secondary" id="Selectbox"> Account Type 
    <option value="">Account Type </option>
    <option value=""> Checking </option>
    <option value=""> Savings</option>
</select> 
<br> 
<br>
         <b>Account Holder Name :- </b><input type="text" placeholder="Enter Full Name " style="width:120px;" > <br>
         <br>
         <b> Address:- </b><input type="text" placeholder="Enter Register Address">  <br>
         <br>
           <b>State :- </b> <input type="text" style="width:50px;" > <br>  
            <br><b> City :- </b> <input type="text" style="width:50px;"> 
           
           <b>Zip :-</b> <input type="text" style="width:50px;"> <br>
           <br>
         
         <b> Routing Number:-</b> <input type="text" placeholder="Enter Bank Routing" style="width:100px;">    <br>  
         <br>  
         <b> Card Number :- </b> <input type="text" placeholder="Enter Card Detail" > <br>
         <br>
         <b>Exp :-</b> <input type="month" style="width:50px;">
          <b>Zip :-</b> <input type="text" style="width:50px;">
        <br>
        <br>
     <br> 
     <button class="btn btn-primary"> Add </button>
    </form>
</body>
</html>