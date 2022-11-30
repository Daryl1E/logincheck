<?php if (isset($_GET['error'])): ?>
<p><?php echo $_GET['error']; ?></p>
<?php endif ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
 </head>
 <body>
    
 </body>

    
     <style>
      *{
        margin: 0;
        padding: 0;
      }
      .depo {
       display: flex;
       justify-content: center;
       align-items: center;
       flex-direction: column;
       min-height: 100vh;
       border: dashed;
      border-width: 2px 4px;
        border-radius: 40px;
      }


      .input--file {
  position: relative;
  color: #7f7f7f;
  border: dashed;
  
  border-radius: 5px;
}

.input--file input[type="file"] {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
     </style>
    </head>
    <body>   <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <li onclick="" style="color:white"> <a href="Dashboard.php"> HOME </a> </li>
        <li  style="color: white;"> <a href="index.html">LOGOUT </a> </li>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
        <div class="depo">
        <img src="https://lh3.googleusercontent.com/qdy8-ccPhGJlvfZZjRA5JoAyP6pU1liX2GLqPqwjNHpt0dn_yWonpWIHjLnO7dTF3Yw_7teRPibDDDZJn57maoVTr8G6Gie0SYwqT38CnL7U0EoFnDXR3JGPA5A9rTOb7ytpvIiryA=w2400" >

         <section> Account Number 
            <input type="text"> <br>
            <br>
              Routing Number <input type="text"> <br>
              <br>
             Deposit Amount <input type="text"> <br>
             <br>
             <u>Your Current Mobile Deposit limit is $7,500.</u> 
         </section>
         <br>
         <br>

          <br> <form action="upload.php"
               method="post"
               enctype="multipart/form-data">
               <br>
         
              <!---- Front Check picture  <input type="file" 
                      name="my_image" accept="image/*">

                      Back Check picture  <input type="file" 
                      name="my_image" accept="image/*"> --->



                    
                     
    
                     <br>
                     <br>

                     Front 
                      <div class="input--file">
                      <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3.2"/>
                            <path d="M9 2l-1.83 2h-3.17c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-12c0-1.1-.9-2-2-2h-3.17l-1.83-2h-6zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                          </svg>
                        </span>
                        <input name="Select File" type="file" />

                       
                      </div> 
                       <br>
                        Back 
                       <div class="input--file">
                       
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="3.2"/>
                            <path d="M9 2l-1.83 2h-3.17c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-12c0-1.1-.9-2-2-2h-3.17l-1.83-2h-6zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
                            <path d="M0 0h24v24h-24z" fill="none"/>
                          </svg>
                        </span>
                        <input name="Select File" type="file" />

                       
                      </div> 
                      <br>
                      <br>



                      <input type="submit" 
                      class="btn btn-primary"
                      name="submit"

                      value="Upload">
                      <br>
                      
                    <br>

                      Please Keep Your Check For 30 days for your records. <br>
                      <u> Deposit by 11pm ET and your funds will be <br>
                        typically available for withdrawal in next 2-3  business days. </u>

                        </div>
          
         </form>
    </body>
    </html>