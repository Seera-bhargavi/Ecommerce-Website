<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <title></title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .navbar-brand img{
      width: 80px;
      height: 30px;
    }
    .bx{
      font-size: 30px;
      font-weight: bold;
    }
    .navbar-toggler: focus,
    .navbar-toggler-icon: focus{
      border:none!important;
      outline: none!important;
      box-shadow: none;
    }
    .nav-link:hover{
      border-bottom: 1px solid #000;
    }
    .navbar-nav .nav-item{
      margin-right:17px;
    }
    .cart img{
      width: 20px;
      height: 20px;
      margin-right: 30px;
    }
    .bx-cart-alt{
      font-size: 25px;
    }
    @media only screen and (max-width: 1000px){
      .nav-link:hover{
        border-bottom: none;
      }
    }
  </style>
</head>
<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid justify-content-center">
    <a class="navbar-brand " href="#"><img src="images/logo1.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class='bx bx-menu'></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php" target="_blank"><i class='bx bx-cart-alt'></i></a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
          </li>
      </ul>
    </div>

  </div>
</nav>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>