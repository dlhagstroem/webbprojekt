<nav class="navbar navbar-default">
  <div id="main-nav" class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Hem</a></li>
        <li><a href="about.php">Om oss</a></li>
        <li><a href="paket.php">Våra stödpaket</a></li>

        

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="contact.php">Kontakt</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php if(isset($_SESSION['userId'])) {
          echo "{$_SESSION['username']}";
          }
          else 
          {
            echo "Mitt inlogg";
          }
        ?> 
        <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Inställningar</a></li>
            <li><a href="#">Varukorg</a></li>

                <?php if(isset($_SESSION['userId'])) {
                  echo '<li class="divider"></li>
                        <li><a href="logout.php">Logga ut</a></li>';
                }
                else {
                  echo '<li><a href="login.php">Logga in</a></li>
                        <li><a href="register.php">Registrera dig</a></li>';
                }
                ?>
            
          </ul>
        </li>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">(1)</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>