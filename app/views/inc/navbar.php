<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
<div class="container">
  <a class="navbar-brand" href="<?php echo URLROOT ;?>"><?php echo SITENAME;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], 'posts')) ? 'active' : null;?>" href="<?php echo URLROOT ;?>">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], 'about')) ? 'active' : null;?>" href="<?php echo URLROOT ;?>/pages/about">ABOUT</a>
      </li>
      <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
        <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], 'girls')) ? 'active' : null;?>" href="<?php echo URLROOT ;?>/girls"><i class="fa fa-heart"></i> GIRLS <i class="fa fa-heart"></i></a>
      </li>
      <?php endif; ?>
    </ul>

    <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
        <a class="nav-link text-decoration-none" href="#">Welcome, <?php echo $_SESSION['user_name'];?></a>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT ;?>/users/logout">Logout</a>
      </li> 
      <?php else : ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT ;?>/users/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT ;?>/users/login">Login</a>
      </li>
      <?php endif; ?>
    </ul>

    </div>
  </div>
</nav>