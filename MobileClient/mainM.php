<?php session_start(); ?>

<!DOCTYPE html>
<html>
<title> Mobile Best Bib and Tucker</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--W3 style sheets-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">


<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/index.js"></script>
<script src="../js/search.js"></script>
<script src="../js/account.js"></script>
<link rel="stylesheet" href="../css/search.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body style="max-width:600px">

<nav class="w3-sidebar w3-bar-block w3-card" id="mySidebar">
<div class="w3-container w3-theme-d2">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
  <br>
  <div class="w3-padding w3-center">
    <img class="w3-circle" src="../images/stockAvatar.jpg" alt="avatar" style="width:75%">
  </div>
</div>
<a class="w3-bar-item w3-button" href="page1">About</a>
<a class="w3-bar-item w3-button" href="page2">Products</a>
<a class="w3-bar-item w3-button" href="page3">Account</a>
<a class="w3-bar-item w3-button" href="page7">Help</a>
<div class="search-container">

      <form action="#page2">
          <input type="text" placeholder="Search for clothing items..." id="search_name">
          <button onclick="getSearch()">Search</button>
        </form>

        <form action="#page5">
          <button><i class="fa fa-truck"></i>CART</button>
        </form>
      </div>
</nav>

<header class="w3-bar w3-card w3-theme">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>
  <h1 class="w3-bar-item">Best Bib and Tucker</h1>

</header>

<article id="page1">
<div class="w3-container">
<hr>
<div class="w3-cell-row">
  <div class="w3-cell" style="width:30%">
    <img class="w3-circle" src="../images/Company.jpg" style="width:100%">
  </div>
  <div class="w3-cell w3-container">
    <h3>Company Details</h3>
    <p>Company Name: Best Bib and Tucker<br/>
        Address: 42 Wallaby Way, Sydney<br/>
        Contact Phone: 085555555<br/>
        Email Address: BestBibTucker@outlook.com<br/>
        Directors: Christopher Gemmell, Shane Martinez<br/>
    </p>
  </div>
</div>  
<hr>
<div class="w3-cell-row">
  <div class="w3-cell" style="width:30%">
    <img class="w3-circle" src="../images/mission.jpg" style="width:100%">
  </div>
  <div class="w3-cell w3-container">
    <h3>Our Mission</h3>
    <p>Company Mission: To sell outstanding products<br/>
        Ethos: To provide the best customer service and best clothing to all our customers, no matter how many limbs <br/>
        Historical Glory: We have sold clothes to over 1,000,000 countries and people say they're "not the best, but not the worst!"" </p>
  </div>
</div>
<hr>
<div class="w3-cell-row">
  <div class="w3-cell" style="width:30%">
    <img class="w3-circle" src="../images/kindness.jpg" style="width:100%">
  </div>
  <div class="w3-cell w3-container">
    <h3>Our Kindness</h3>
    <p>Charitable Support Given to the Local Community: Donated clothes to people in need during the recent sharknado, we also support our local monkey bar club with top of the line socks! We even donated $5 to the United States Government<br/>
    Product Description: We sell anything you can wear! </p>
  </div>
</div>
<hr>
</div>
</article>



<script>
closeSidebar();
function openSidebar() {
    document.getElementById("mySidebar").style.display = "block";
}
function closeSidebar() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>



<article id="page2" hidden="hidden">
<div class="w3-container">
<hr>
<div class="w3-cell-row">
  <div class="w3-cell" style="width:30%">
    <img class="w3-circle" src="" style="width:100%">
  </div>
  <div class="w3-cell w3-container">
    <h3>Products</h3>

    <div id="cat">
      <span style=color:#FFFFFF>Search By Category </span><br/>
      <select id="Categories">
        <option value="1">Socks</option>
        <option value="2">Shoes</option>
        <option value="3">Hoody</option>
    </select>
    <button onclick="getCategory()">Search</button>
  </div>

  <div id="demo"></div> <br/>
    
  </div>
</div>  

</div>
 </article>



<!----------------------------------------HELP-------------------------------------------------->
<article id="page7" hidden="hidden">
<div class="w3-container">
<hr>
<div class="w3-cell-row">
  <div class="w3-cell" style="width:30%">
    <img class="w3-circle" src="../images/questionmark.jpg" style="width:100%">
  </div>
  <div class="w3-cell w3-container">
    <h3>Help</h3>
    <p>Unregistered users can only browse products. Although they can register on the account page to become a registered user who can buy products. <br /> To buy products a user can search, then press "Add to Cart" which will add the product to the cart. Then press the cart button to see what you have. If you don't like what you selected you can clear the cart here. <br/>If you are happy with your products, you can click the "Buy" button, which will take you to the checkout where some information is displayed about the products you bought and if the order was accepted or rejected</p>
  </div>
</div>  

</div>
 </article>


<!----------------------------------------CART-------------------------------------------------->
<article id="page5" hidden="hidden">
        <h2>CART</h2>
        <div align="center">
          <form action="#page6">
          <button onclick="Buy()">Buy</button>
        </form>

        <button onclick="Clear()">Clear Cart <i class="fa fa-trash"></i></button>
        <script>
          function Clear(){
              cartArray=[];
              document.getElementById('cart').innerHTML ="";
            }
        </script>

          <H3>Items:</H3> 
          <div id="cart"></div> <br/>
      </div>
    </article>

<!---------------------------------------Checkout---------------------------------------------->
<article id="page6" hidden="hidden">
        <h2>Checkout</h2>
        
        <div id="Bought" align="center" style="background-color:grey"></div> <br/>
</article>

<!----------------------------------------Account------------------------------------------->
<article id="page3" hidden="hidden">
        <h2>Account</h2>

        <?php
    if(isset($_SESSION['user_id']) && $_SESSION['priv']=='staff'): ?>

      <form id="userSearch">
          <font>Enter UserName to Search for the user:</font><br>
          <input type="text" name="usersearch">
        </form>
        <button type="button" onclick="userSearch()"> Search</button>
        <br><br>
        <div id="userInfo" hidden></div>
        <br><br>
        <form id="register">
          Name: <br><input type="text" name="name" maxlength="25"><br>
          Email: <br><input type="email" name="email" maxlength="40"><br>
          UserName: <br><input type="text" name="uname" maxlength="10"><br>
          Phone Number: <br><input type="tel" name="number" maxlength="14"><br>
          Password: <br><input type="password" name="password" maxlength="12"><br>
          Account Privilege:<br>
      <select>
      <option value="customer">customer</option>
      <option value="staff">staff</option>
      </select>
      <br><br>
      <button type="reset" value="Reset">Reset Form</button>
    </form> 
    <button type="button" onclick="Register()"> Register</button>
    <br><br>

    <form id="products">
        <font>Add New Product or Update Existing (to update enter the products name to update then enter the new Quantity)</font><br>
        Product Name: <input type="text" name="productName">
        Product Quantity: <input type="text" name="productQuantity">
      </form>
        <button type="button" onclick="ProductUpdate()"> Update Products</button>

        <br><br>
      <form onsubmit="Logout()">
      <input type="submit" value="Logout"/>
      </form>

      <?php elseif(isset($_SESSION['user_id']) && $_SESSION['priv']=='customer'): ?>

    <div align="center">
        <form id="editName">
          Update Name: <br><input type="text" name="name" maxlength="25" minlength="4"><br>
    </form> 
    <button type="button" onclick="updateName()"> Update</button><br><br>

    <form id="editEmail">
          Update Email: <br><input type="email" name="email" maxlength="40" minlength="4"><br>
    </form>
    <button type="button" onclick="updateEmail()"> Update</button><br><br>

    <form id="editPhone">
          Update Phone Number: <br><input type="tel" name="number" maxlength="14" minlength="8"><br>
          </form>
        <button type="button" onclick="updatePhone()"> Update</button><br><br>
        
    <form id="editPass">
          Update Password: <br><input type="password" name="password" maxlength="12" minlength="4"><br>
    </form> 
    <button type="button" onclick="updatePass()"> Update</button><br>
    
      <br>
      <br>
    <form onsubmit="Logout()">
    <input type="submit" value="Logout"/>
    </form>
  </div>
      <?php else: ?>
          <form id="login">
        <font>Username:</font><br>
        <input type="text" name="Username">
        <br>
        <font>Password:</font><br>
        <input type="Password" name="Password"><br>
        Click <a href="#page4">here</a> to create a account.
        <br><br>
      </form> 
      <button type="button" onclick="Login()"> Login</button>

    <?php endif; ?>
    </article>

    
    <article id="page4" hidden="hidden">
        <h2>Sign Up</h2>
        <form id="register">
          Name: <br><input type="text" name="name" maxlength="25"><br>
          Email: <br><input type="email" name="email" maxlength="40"><br>
          UserName: <br><input type="text" name="uname" maxlength="10"><br>
          Phone Number: <br><input type="tel" name="number" maxlength="14"><br>
          Password: <br><input type="password" name="password" maxlength="12"><br>
    </form> 
    <br>
    <button type="button" onclick="Register()"> Register</button>

    </article>





<footer class="w3-container w3-theme w3-margin-top">
  <h3>©Best Bib and Tucker</h3>
</footer>

</body>