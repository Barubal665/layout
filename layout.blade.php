<html>
<!--...-->

<head>
  <meta charset="utf-8">
  <title> pisokitchen </title>
  <link rel="Stylesheet" href="/css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>
<header>

  <img src="/css/images/pisopaylogo.png">
  <div class="wrap">
    <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class='bx bx-search'></i>
      </button>
    </div>
  </div>

</header>

<body>

<div class="container">
  @yield('content')
</div>

<div id="sidebar">

           
             <ul class="menu-links">
               <li class="nav-link">
                 <a href="/admin/dashboard">
                 <i class='bx bxs-dashboard icon'></i>
                 <span class="text nav-text">Dashboard</span>
                 </a>
               </li>
               <li class="nav-link">
                 <a href="/admin/orderlist">
                 <i class='bx bx-food-menu icon'></i>
                 <span class="text nav-text">Order List</span>
                 </a>
               </li>
               <li class="nav-link">
                 <a href="/admin/inventory">
                 <i class='bx bx-cabinet icon'></i>
                 <span class="text nav-text">Inventory</span>
                 </a>
               </li>
               <li class="nav-link">
                 <a href="/admin/orderstatus">
                 <i class='bx bx-check-circle icon'></i>
                 <span class="text nav-text">Order Status</span>
                 </a>
               </li>
               <li class="nav-link">
                 <a href="/admin/product">
                 <i class='bx bx-cart icon'></i>
                 <span class="text nav-text">Product</span>
                 </a>
               </li>
               <li class="nav-link">
                 <a href="/admin/user">
                 <i class='bx bx-user icon'></i>
                 <span class="text nav-text">User</span>
                 </a>
               </li>
               
             </ul>
		</div> 
</body>
</html>

