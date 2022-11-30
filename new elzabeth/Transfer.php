<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Transfer</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        

    }
    body{
        background-image: url("https://lh3.googleusercontent.com/wJEwIQlNQwKBQ7qvafkRNuTPxN7mFpwiIoBnqff6heeipB88mWGnLsvlE8ZyriatPQvHrnsYHWpCjpOqk_S5f2T3Cj0gAjnznjCvGgACxAIiTZFNvMzqRkhWZM7xklABypd-wPYeKw=w2400");
        background-repeat: no-repeat;
        background-size: cover;
        
    }
  

    .container{
           max-width: 1300px;
           margin: auto;
           margin-top: 0px;
           
           padding-left: 0px;
           padding-right: 25px;
       }
       .navbar{
           display:flex;
           align-items: center;
           padding: 0px;
          
       }
       nav{
           flex: 1;
           text-align: right;
       }
       nav ul{
           display: inline-block;
           list-style-type: none;
       }
       nav ul li{
           display: inline-block;
           margin-right: 10px;
       }
           .text1{
        text-align: center;
        padding-left: 40%;
       }
       .text1 {
        width: 600px;  
       border-radius: 6px;
     position: absolute;
      top: 50%;
      left: 50%; 
      transform: translate(-50%,-50%) scale(1);  
       text-align: center;
      padding: 30px 30px 30px;
       color: #333;
       border:
       
       }
  
       .img2{
        background:cover;
       }

       

</style>
<body>

      
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
    <nav class="navbar navbar-dark bg-dark">
        <li   style="color:white"> <a href="Dashboard.php"> HOME </a> </li>
        <li  style="color: white;"> <a href="index.html"> LOGOUT </a> </li>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
        </div>
    </div>
    <br>
    <br> 
    <br>
    <br>
    <br>
   
    
      <div class="text1">
        <form id="form1" action=""onsubmit="return check_form();">
     <br> <label>  <b>Mention  the Crypto-type wallet </b><br> 
    <span> (Before the Address)</span>
     <br>
     <br>
    <b>Enter the Address :-</b><input type="text" id="name" placeholder=" Enter the wallet Address "> <br>
    <br>
      <b> Enter Amount ($) :-</b>  <input type="text" id="pass"placeholder="Enter the Amount" style="width: 100px;"> <br>
      <br>
       
      <u> <b> Per Day Transfer limit is $10,000.  </b></u> 
      <br>
      <br>
      <br>
      <div class="dropdown">
        <select class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          <option value="">Select Network Type</option>
          <option value="">Eco (funds may available in next 48hr 0.5% fee applicable)</option>
         <option value=""> Fast (funds may available in next 24hr 1.5% fee applicable)</option>
          <option value="">Fastest(funds may available in next 12hr  2.5% fee applicable)</option>
        </select>
        </div>
        <br>
        <br>
    
           
            
        
    
      
      <button type="submit" value ="SUBMITFORM" class="btn btn-success"> Send </button> <br>
      <br>
      
    </form>
   

   </label>
    </div>
   <br>
    <br>
    <script type="text/javascript">
      var login_attempts=2;
      function check_form()
      {
       var name=document.getElementById("name").value;
       var pass=document.getElementById("pass").value;
       if(name=="talkerscode" && pass=="talkerscode")
       {
        alert("SuccessFully Logged In");
        document.getElementById("name").value="";
        document.getElementById("pass").value="";
       }
       else
       {
        if(login_attempts==0)
        {
         alert("No Transfer Attempts Available");
        }
        else
        {
         login_attempts=login_attempts-1;
         alert("Please Enter the Vaild Address Transfer Failed Now Only "+login_attempts+"  Attempts Available");
         if(login_attempts==0)
         {
          document.getElementById("name").disabled=true;
          document.getElementById("pass").disabled=true;
          document.getElementById("form1").disabled=true;
         }
        }
       }
       
       return false;
      } 
      </script>
  
      
    
</body>
</html>


