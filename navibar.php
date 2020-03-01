<!DOCTYPE html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>UBW - Uczelniana Baza Wiedzy </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php"
              ><img src="img/logo2.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <?php
                  @session_start();
 if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']== true))
{
	echo' <li class="nav-item">
                  <a class="nav-link" href="profile.php">Twój profil</a>
                </li>';
}else{
     echo' <li class="nav-item">
                  <a class="nav-link" href="needtologin.php">Twój profil</a>
                </li>';
 } 
                 
?> 
                
                  
                  
                <li class="nav-item">
                  <a class="nav-link" href="about-us.php">O nas</a>
                </li>
              
               
                <li class="nav-item ">
                  <a class="nav-link" href="contact.php">Kontakt</a>
                </li>
                  
                  <?php
   
@session_start();
 if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']== true))
{
	echo' <li class="nav-item active">
                  <a class="nav-link" href="logout.php">Wyloguj</a>
                </li>';
}else{
     echo' <li class="nav-item genric-btn primary circle arrow">
                  <a class="nav-link " href="login.php">Zaloguj</a>
                </li>';
 }   
?>
                 
                  
                  
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->
