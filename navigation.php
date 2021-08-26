<style>

/* General CSS */
body {
    background-color: rgb(19, 19, 19);
}

/* Navigation CSS */
.nav-wrapper{
  list-style-type: none;
  margin: 1%;
  padding: 0;
  height: 6%;
  overflow: hidden;
  background-color: rgb(19, 19, 19);
  border: 1px solid rgb(115, 223, 160);
  border-radius: 10px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
  
 .left li {
    float: left;
}

.right li {
    float: right;
}
  
  li a {
    display: block;
    color: rgb(115, 223, 160);
    text-align: center;
    padding: 20px 18px;
    font-size: 1.3em;
    text-decoration: none;
}
  
  li a:hover {
    text-decoration: none;
    color: rgb(40, 93, 62);
}

</style>


<header>
<nav>
  <div class="Nav-wrapper">
    <ul>
      <div class="left">
          <li><a href="index.php">Home <i class="fas fa-home"></i> </a></li>
          <li><a href="#">Discover <i class="fas fa-search"></i> </a></li>
          <li><a href="#">Direct Messages <i class="far fa-envelope"></i> </a></li>
      </div>
<!-- ..................... -->
      <div class="right">
        <li><a href="logout.php">Sign out <i class="fas fa-sign-out-alt"></i> </a></li>
        <li><a href="#">|</a></li>
         <li><a href="profile.php">Profile <i class="far fa-user"></i> </a></li>
         <li><a href="#">|</a></li>
         <li><a href="#">Friends <i class="fas fa-users"></i> </a></li>
      </div>
    </ul>
  </div>
</nav>
</header>