<?php
session_start();
if(isset($_SESSION["uid"])){
    header("location:profile.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Grocerry Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
   <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Store</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="mp.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
                <li style="width: 300px;left: 10px;top: 10px;"><input type="text" class="form-control" id="search"></li>
                <li style="left: 20px;top: 10px;"><button class="btn btn-primary" id="search_btn" value="Search">Search</button>></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Cart<span class="badge">0</span></a>
                    <div class="dropdown-menu" style="width: 400px;">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-3">Sr. No.</div>
                                    <div class="col-md-3">Product Image</div>
                                    <div class="col-md-3">Product name</div>
                                    <div class="col-md-3">Price</div>
                                </div>
                            </div>
                            <div class="panel-body"></div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Log in</a>
                    <ul class="dropdown-menu">
                        <div style="width: 300px;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Log In</div>
                                <div class="panel-heading">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" required>
                                    <br>
                                    <a href="#" style="color: white; list-style: none;">Forgot Password?</a>
                                    <button class="btn btn-success" style="float: right; margin-top: -6px;" id="login" value="Login">Login</button>
                                </div>
                                <!--<div class="panel-footer" id="msg"></div>-->
                            </div>
                        </div>
                    </ul>
                </li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Sign up</a></li>
            </ul>
        </div>
    </div>
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2">
            <div id="get_category"></div>
            <!--<div class="nav nav-pills nav-stacked">
              <li class="active"><a href="#"><h4>Categories</h4></a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Category</a></li>
            </div>-->
            <div id="get_brand"></div>
            <!--<div class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><h4>Brands</h4></a></li>
                <li><a href="#">Brand</a></li>
                <li><a href="#">Brand</a></li>
                <li><a href="#">Brand</a></li>
                <li><a href="#">Brand</a></li>
              </div>-->
          </div>
          <div class="col-md-8">
          <div class="row">
                <div class="col-md-12" id="product_msg"></div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading">Products</div>
              <div class="panel-body">
                  <div id="get_product"></div>
                <!--<div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">Samsung Galaxy S8 Plus</div>
                        <div class="panel-body">
                            <img src="img/s8+.jpg" width="100%" height="100%" alt="Samsung Galaxy S8 Plus">
                        </div>
                        <div class="panel-heading">60000&#8377;
                            <button style="float: right;" class="btn btn-danger btn-xs">Add To Cart</button>
                        </div>
                    </div>
                </div>-->
              </div>
              <div class="panel-footer">&copy;2018</div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <ul class="pagination" id="page_no">
                        <li><a href="#">1</a></li>
                    </ul>
                </center>
            </div>
        </div>
    </div>
</body>
</html>