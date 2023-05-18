<?php
  session_start();
  $name = $_SESSION['name'];
  

  if(isset($_POST['logOut'])){
    
    //$_SESSION['name'] = '';
    session_unset();
    
    }
        
       
  
?>
<head>
    <title>PizzaHut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   
<style>
    .myBootstrapNavContainer{
    background-color: #F67B50; 
    padding: 20px;
    }
    .myBootstrapFooterContainer{  
        background-color: #FBAA60;;
        padding: 10px;
        text-align: center;
    }
    .myNavBarContainer{
      margin:0;
    }
    #logOut{
      background-color: transparent;
      color: white;
      border: white;
      text-align: left;
    }
</style>

</head>
<body>
    <div class="myNavBarContainer">
    <nav class="myBootstrapNavContainer navbar navbar-expand-lg navbar-dark " >
  <div class="container-fluid">
    <a class="navbar-brand" href="pizza.php">MIRA'S PIZZA HUT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="pizzas.php">Amirah's Pizzas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="placeOrder.php">Add a Pizza</a>
        </li>
        <li>
          <p class="nav-link active"> Hello <?php echo htmlspecialchars($name); ?> </p>

        </li>
        <li>
        <form action="index.php" method="POST">
          <input id="logOut" value="Sign out" type="submit" name = "logOut"></input>
        </form>
        </li>
        
        
        
      </ul>
    </div>
  </div>
</nav>
    </div>
    
