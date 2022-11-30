<?php 









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <style>

@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;1,400;1,500;1,900&display=swap');
 

 :root{
     --color-primary:#7380ec;
     --color-danger:#ff7782;
    --color-succeess:#41f1b6;
     --color-warning:#ffbb55;
     --color-white:#fff;
     --color-info-light:#dce1eb;
     --color-dark:#363949;
     --color-info-dark:#7d8da1;
     --color-light:rgba(132,139,200,0.18);
     --color-primary-variant:#111e88;
     --color-background:#f6f6f9;
 
     --card-border-radius: 2rem;
     --border-radius-1: 0.4rem;
     --border-radius-2 :0.8rem;
     --border-radius-3: 1.2rem;
 
     --card-padding: 1.8rem;
     --padding-1: 1.2rem;
 
     --box-shadow: 0 2rem 3rem var(--color-light);
 
 }
  .dark-theme-variables {
     --color-background:#181a1e;
     -color-white:#202528;
     --color-dark:#edeffd;
     --color-dark-variant:#edeffd;
     --box-shadow: 0 2rem 3rem var(--color-light);
     --color-light:rgba(0, 0, 0, 0.4);
 
 }
 
 
 *{
     margin: 0;
     padding: 0;
     outline: 0;
     appearance: none;
     border: 0;
     text-decoration: none;
     list-style: none;
     box-sizing: border-box;
 }
 html{
     font-size: 14px;
 
 }
 body{
     width: 100vw;
     height: 100vh;
     font-family: poppins, sans-serif;
     font-size: 0.88rem;
     background-color: var(--color-background);
     user-select: none;
     overflow-x: hidden;
     color: var(--color-dark);
 }
 .container{
     display: grid;
     width: 96%;
     margin: 0 auto;
     
     gap: 1.8rem;
     grid-template-columns: 14rem auto 23rem;
 }
 
 a{
     color: var(--color-dark);
 }
 img{
     display: block;
     width: 100%;
 }
 h1{
     font-weight: 800;
     font-size: 1.8rem;
 
 }
 h2{
     font-size: 1.4rem;
 
 }
 h3{
     font-size: 0.87rem;
 }
 h4{
     font-size: 0.8rem;
     }
 h5{
     font-size: 0.77rem}
 small{
     font-size: 0.75rem;
 }
 .profile-photo{
  width: 2.8rem;
  height: 2.8rem;
  border-radius: 50%;
  overflow-x: hidden;
 }
 .text-muted{
     color: var(--color-info-dark);
 }
 p{
     color: var(--color-dark);
 
 }
 b{
     color: var(--color-dark);
 }
 .primary{
     color: var(--color-primary);
 }
 .danger{
     color: var(--color-danger);
 }
 .success{
     color: var(--color-succeess);
 }
 .warning{
     color: var(--color-warning);
 }
 aside{
  height: 100vh;
  
 }
 aside .top{
     
     display: flex;
     align-items: center;
     justify-content: space-between;
     margin-top: 1.4rem;
 }
 aside .logo{
     display: flex;
     gap: 0.8rem;
 }
 aside .logo img{
  width: 2rem;
  height: 2rem;
 }
 aside .close{
     display: none;
 }
 
 aside .sidebar{
     
     display: flex;
     flex-direction: column;
     height: 86vh;
     position: relative;
     top: 3rem;
 
 }
 
 aside h3{
     font-weight: 500;
 }
 aside .sidebar a{
     display: flex;
     color: var(--color-info-dark);
     margin-left:2rem;
     gap: 1rem;
     align-items: center;
     position: relative;
     height: 3.7rem;
     transition: all 300ms ease;
 }
 aside .sidebar a span{
     font-size: 1.6rem;
     transition: all 300ms ease;
 
 }
 aside .sidebar a:last-child{
     position: absolute;
     bottom: 2rem;
     width: 100%;
 }
 
 aside .sidebar a.active{
     background: var(--color-light);
     color: var(--color-primary);
     margin-left: 0;
 }
 aside .sidebar a.active:before{
     content: '';
     width: 6px;
     height: 100%;
     background: var(--color-primary);
 }
 aside .sidebar a.active span{
     color:var(--color-primary);
     margin-left: calc(1rem - 3px);
     
 }
 aside .sidebar a:hover{
     color: var(--color-primary);
 }
 aside .sidebar a:hover span{
     margin-left: 1rem;
     
 }
 aside .sidebar .message-count{
     background: var(--color-danger);
     color: white;
     padding: 2px 10px;
     font-size: 11px;
     border-radius: var(--border-radius-1);
 }
 main{
     margin-top: 1.4rem;
 }
 main .date{
     display: inline-block;
     background: var(--color-light);
     border-radius: var(--border-radius-1);
     margin-top: 1rem;
     padding: 0.5rem 1.6rem;
 }
 main .date input[type='date']{
 background: transparent;
 color: var(--color-dark);
 }
 main .insights{
     display: grid;
     grid-template-columns: repeat(3, 1fr);
     gap:1.6rem;
 }
 main .insights > div{
     background: white;
     padding: var(--card-padding);
     border-radius: var(--card-border-radius);
     margin-top: 1rem;
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
 
 }
 main .insights > div:hover{
     box-shadow: none;
 
 }
 main .insights > div span{
     background: var(--color-primary);
     padding: 0.5rem;
     border-radius: 50%;
     color: white;
     font-size: 2rem;
 
 }
 main .insights > div.expenses span{
     background: var(--color-danger);
 }
 main .insights > div.income span{
     background: var(--color-succeess);
 }
 main .insights > div .middle{
     display: flex;
     align-items: center;
     justify-content: space-between;
 }
 main .insights h3{
     margin: 1rem 0 0.6rem;
     font-size: 1rem;
 
 }
 
 main .insights .progress{
     position: relative;
     width: 92px;
     border-radius: 50%;
 }
 main .insights svg{
     
     width: 7rem;
     height: 7rem;
 }
 main .insights svg circle{
     fill:none;
     stroke: var(--color-primary);
     stroke-width: 14;
     stroke-linecap: round;
     transform: translate(5px, 5px);
     stroke-dasharray: 110;
     stroke-dashoffset:92;
 
 }
 main .insights .sales svg circle{
     stroke-dashoffset: -30;
     stroke-dasharray: 250;
 }
 
 
 main .insights .income svg circle{
     stroke-dashoffset: -30;
     stroke-dasharray: 250;
 }
 main .insights .progress .number{
     position: absolute;
     top: 0;
     left: 0;
     height: 100%;
     width: 100%;
     display: flex;
     justify-content: center;
     align-items: center;
 }
 main .insights small{
     margin-top: 1.6rem;
     display: block;
 
 }
 
 main .recent-oders{
     margin-top: 2rem;
 
 }
 main .recent-orders h2{
     margin-bottom:0.8rem;
 }
 main .recent-orders table{
     background: white;
     width: 100%;
     border-radius: var(--card-border-radius);
     padding: var(--card-padding);
     text-align: center;
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
 }
 main .recent-oders table:hover{
     box-shadow: none;
 
 }
 
 main table tbody td{
     height: 2.8rem;
     border-bottom: 1px solid var(--color-light);
     color: var(--color-dark-variant);
 
 }main table tbody tr:last-child{
     border:none;
 }
 main .recent-oders a{
     text-align: center;
     display: block;
     margin: 1rem auto;
     color: var(--color-primary);
 }
 .right{
     margin-top: 1.4rem;
 
 }
 .right .top{
     display: block;
     justify-content: end;
     gap: 2rem;
     ;
 
 }
 .right .top button{
     display: none;
 
 }
 .right .theme-toggler{
     background: var(--color-light);
     display: flex;
     justify-content: space-between;
     align-items: center;
     height: 1.6rem;
     width: 4.2rem;
     cursor: pointer;
     border-radius: var(--border-radius-1);
 }
 .right .theme-toggler span {
     font-size: 1.2 rem;
     width: 50%;
     height: 100%;
     display: flex;
     align-items: center;
     justify-content: center;
 }
 .right .theme-toggler span.active{
     background: var(--color-primary);
     color: white;
     border-radius: var(--border-radius-1);
 
 }
 .right .top .profile{
     display: flex;
     gap: 2 rem;
     text-align: right;
 }
 .right .recent-updates{
     margin-top: 1rem;
 }
 .right .recent-updates h2{
     margin-bottom: 0.8rem;
 
 }
 .right .recent-updates .update{
     background: var(--color-white);
     padding: var(--card-padding);
     border-radius: var(--card-border-radius);
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
 
 }
 .right .recent-updates .updates:hover{
     box-shadow: none;
 
 }
 .right .recent-updates .updates .update{
     display: grid;
     grid-template-columns: 2.6rem auto;
     gap:1rem;
     margin-bottom: 1rem;
 
 }
 .right .sales-analytics {
     margin-top: 2rem;
 }
 .right .sales-analytics h2{
     margin-bottom: 0.8rem;
 }
 .right .sales-analytics .item {
     background: white;
     display: flex;
     align-items: center;
     gap: 1rem;
     margin-bottom: 0.8rem;
     border-radius: var(--border-radius-3);
     padding: 1.4rem var(--card-padding);
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
 }
 .right.sales-analytics .item:hover{
     box-shadow: none;
     
 }
 .right .sales-analytics .item .right{
     display: flex;
     justify-content: space-between;
     align-items: start;
     margin: 0;
     width: 100%;
 }
 .right .sales-analytics .item .icon{
     padding: 0.6rem;
     color: var(--color-white);
     border-radius: 50%;
     background: orange;
     display: flex;
 }
 .right .sales-analytics .add-product{
     background-color: transparent;
     border: 2px  dashed var(--color-primary);
     color: var(--color-primary);
     display: flex;
     align-items: center;
     justify-content: center;
 
 
 }
 .right .sales-analytics .add-product div {
  display: flex;
  align-items: center;
  gap: 0.6rem;
 }
 .right .sales-analytics .add-product div h3{
     font-weight: 600;
 
 }
 @media screen and(max-width:1200px) {
     .container{
         width: 94%;
         grid-template-columns: 7rem auto 23rem;
     }
 
     aside .logo h2{
         display: none;
 
     }
     
     aside .sidebar h3{
         display: none;
     }
 
     aside .sidebar a{
         width: 5.6rem;
 
     }
 
     asidee .sidebar a:last-child{
         position: relative;
         margin-top: 1.8rem;
     }
 
     main .insights{
         grid-template-columns: 1fr;
         gap: 0;
     
     }
 
     main .recent-oders{
         width: 94%;
         position: absolute;
         left: 50%;
         transform: translateX(-50%);
         margin: 2 rem o o 8.8rem;
     }
     main .recent-oders table{
         width: 83vw;
     }
 
     main table thead tr th:last-child , main table thead tr th::before{
         display: none;
     }
 
     main table tbody tr td:last-child , main table tbody tr td::before{
         display: none;
     }
 }
 
 @media screen and(max-width:760px) {
     .container {
         grid-template-columns: 1fr;
         width: 100%;
     }
 
     aside{
         position: fixed;
         left: -110%;
         background: var(--color-white);
         width: 18rem;
         z-index: 3; 
         box-shadow: 1rem 3rem 4rem var(--color-light);
         height: 100vh;
         padding-right: var(--card-padding) ;
         display: none;
         animation: showMenu ease forwards;
     }
     @keyframes showMenu {
         to{left:0;}
     }
 
     aside .logo{
       margin-left: 1rem;
     }
 
     aside .logo h2{
         display: inline;
     }
     aside .sidebar h3{
         display: inline;
     }
     aside .sidebar a{
         width: 100%;
         height: 3.4rem;
 
     }
 
     aside .sidebar a:last-child{
         position: absolute;
         bottom: 5rem;
     }
 
     aside .close{
         display: inline-block;
         cursor: pointer;
     }
     main{
         margin-top: 8rem;
         padding: 0 1 rem;
     }
     main .recent-oders{
         position: relative;
         margin: 3rem 0 0 0;
         width: 100%; 
     }
     main .recent-oders table{
         width: 100%;
         margin: 0; 
     }
     .right{
         width: 94%;
         margin: 0 auto 4rem;
     }
     .right .top{
         position:fixed;
         top: 0;
         left:0;
         align-items: center;
         padding: 0 0 .8rem;
         height: 4.6rem;
         background: var(--color-white);
         width: 100%;
         margin: 0;
         z-index: 2;
         box-shadow: 0 1 r em 1 rem var(--color-light);
 
         
     }
 
     .right .top .theme-toggler{
         width: 4.4rem;
         position: absolute;
         left: 66%;
     }
 
     .right .profile .info{
         display: none;
     }
 
     .right .top button{
         display: inline-block;
         background: transparent;
         cursor: pointer;
         color: var(--color-dark);
         position: absolute;
         left:  1rem;
     }
 
     .right .top button span{
         font-size: 2rem;
 
     }
 }




    </style>


</head>
<body >
    <script >
        const sideMenu = document.querySelector("aside");
        const menuBtn = document.querySelector("#menu-btn");
     const closeBtn = document.querySelector("#close-btn");
      const themeToggler = document.querySelector(".theme-toggler");

 menuBtn.addEventListener('click', () => {
 sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click',()=> {
    sideMenu.style.display = 'none';
})

themeToggler.addEventListener('click',() => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
   })
    </script>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="https://lh3.googleusercontent.com/sA5iQMNx5X3Us104Na5vefIRYYc4X0qKxw0TKopuA_6ZFB2AGj9T58-KCHqaimeYHjosXsuVoqyAyima0Bmg3RHiPddRDCJo0_dGAOPh_lN8ZSrWw4LLNGGxRjBxMBXB-s7TpEEf=s225-p-k" alt="logo">
                    <h2> Bitcoin<br> <span class="danger">wallet </span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        cancel</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">account_circle</span>
                    <h3>Profile</h3>
                <a href="Transfer.php" id="">
                    <span class="material-icons-sharp">autorenew</span>
                    <h3>Transfer</h3>
                </a>
                <a href="deposit.php">
                    <span class="material-icons-sharp">attach_money</span>
                    <h3>Deposit</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Recent Update</h3>
                    <span class="message-count">2</span>
                </a>
                <a href="#" onclick="alert('Access Blocked -Contact the administration')">
                    <span class="material-icons-sharp">settings_suggest</span>
                    <h3>Settings</h3>
                </a>
                <a href="Addaccount.php">
                    <span class="material-icons-sharp">add_circle_outline</span>
                    <h3>Add Account</h3>
                </a>
                <a href="index.html" >
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <main>
            <h1> Dashboard </h1>
            <div class="date">
                <input type="date">
            </div>
        <div class="insights">
            <div class="sales">
                <span class="material-icons-sharp">
                    analytics
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3> Total Balance </h3>
                            <h1>$21,200</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38'cy='38' r="36"></circle>
                            </svg>
                            <div class="number">
                                <p> 90%</p>
                            </div>
    
                        </div>

                    </div>
                    <small class="text-muted">
                        last 24 hours
                    </small>
            </div>
            <div class="expenses">
                <span class="material-icons-sharp">
                    bar_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Investment </h3>
                            <h1>0</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38'cy='38' r="36"></circle>
                            </svg>
                            <div class="number">
                                <p> 0%</p>
                            </div>
    
                        </div>

                    </div>
                    <small class="text-muted">
                        last 24 hours
                    </small>
            </div>
            <div class="income">
                <span class="material-icons-sharp">
                    stacked_line_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3> Savings </h3>
                            <h1>$21,200</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38'cy='38' r="36"></circle>
                            </svg>
                            <div class="number">
                                <p> 90%</p>
                            </div>
    
                        </div>

                    </div>
                    <small class="text-muted">
                        last 24 hours
                    </small>
            </div>
        </div>
        <div class="recent-orders">
            <h2> Recent Transcations</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Transcations id </th>
                        <th>Status</th>
                        <th>Amount </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                     
                        <td> 11/11/2022 </td>
                        <td> Loan</td>
                        <td>  Adv1129972</td>
                        <td class="warning"> Sucessful </td>
                        <td> 20,000$</td>
                        <td class="primary"> Details</td>
                    </tr>
                </tbody>
                 <tbody>
                    <tr>
                        <td> 30/11/2022 </td>
                        <td> Deposit </td>
                        <td>  Eli125482</td>
                        <td class="warning"> Sucessful </td>
                        <td> 1,200$</td>
                        <td class="primary"> Details <span> Cashapp</span></td>
                    </tr>
                 </tbody>

                
            </table>
            <a href="#">Show All </a>

        </div>
        </main>
       <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-icons-sharp">
                    menu
                    </span>

            </button>
            <div class="theme-toggler">
                <span class="material-icons-sharp active">
                    light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                        </span>
            </div>
            <div class="profile">
                <p>Hey , Elizabeth </p>
            </div>
            <div class="profile-photo">
                <img src="https://lh3.googleusercontent.com/yjLKAgvDMJFGFDPgWkFH0bLZbdQoriqsGZFu539RL1WlJzpcMNp-77UB-aU71dqlLGGkW9Re9oANeXUqaIZ-ABH4j6-KlqsXJM9J5PhzdlPZA2wljwIXaAHfrpUdeMehmx4IfTmO=w2400" alt="image">

            </div>
           
        </div>
        <div class="recent-updates">
            <h2>Recent Update</h2>
            <div class="updates">
                <div class="update">
                    <div class="profile-photo">
                        <img src="https://lh3.googleusercontent.com/yjLKAgvDMJFGFDPgWkFH0bLZbdQoriqsGZFu539RL1WlJzpcMNp-77UB-aU71dqlLGGkW9Re9oANeXUqaIZ-ABH4j6-KlqsXJM9J5PhzdlPZA2wljwIXaAHfrpUdeMehmx4IfTmO=w2400" alt="image" >
                    </div>
                    <div class="message">
                        <p><b> ***Self-Deposit of $1,200 via Cashapp Received SuccessFully .*** <br>
                            <br>
                           *** Deposit of $20,000 made by AdvFinance Received SuccessFully.***
                           <br></p>
                    </div>
                </div>
            </div>
           </div>
           <div class="sales-analytics">
            <h2>Watchlist</h2>
            <div class="item online">
                <div class="icon">
                    <span class="material-icons-sharp">
                        currency_bitcoin
                        </span>
                </div>
                <div class="right">
                    <div class="info">
                        <h3> Bitcoin
                            <span class="material-icons-sharp">
                                currency_bitcoin
                                </span> </h3>
                        <small class="text-muted"> Last 24 hours </small>
                    </div>
                    <h5 class="success">+4%</h5>
                    <h3> $19,944</h3>
                </div>
            </div>
            <div class="item add-product">

               
              

                <div> <br>
                     <span class="material-icons-sharp" >add </span>
                           
                        <button class="btn btn-primary" onclick="alert ('Hello Elizabeth ----Please Contact the Administration For Your Bitcoin Address untill the account gets verified---' , ) ">
                        <h3> Add money

                        </h3>
                        </button>
                  </div>
                  
            
           </div>
       </div>
       
    </div>
          <script>
            let a = document.getElementById("xr")
            a = InputEvent 
          </script>
          
          
    
</body>
</html>





