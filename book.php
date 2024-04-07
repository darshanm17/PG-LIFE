<?php
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      .payment-container{
        width:100vw;
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,68,121,1) 22%, rgba(0,212,255,1) 100%);

      }
      .qrcode{
        width:200px;
      }
      .subcontainer{
        width:400px;
        height:500px;
        border:2px solid black;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        box-shadow: 10px 10px 5px 12px #17313a;
      }

    </style>
    <title>Pay</title>
    <div class="payment-container">
      <div class="subcontainer">
      

      <h2> Scan To Pay</h2>
    <img class="qrcode" src="img/qrcode.png" alt="">
    </div>
    </div>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/property_list.css" rel="stylesheet" />
</head>

<body>