 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 </head>
 <body>
  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> 
        <a class="nav-link" href="/law_office">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          comment  
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/law_office/lawyer/add.php">Add</a>
          <a class="dropdown-item" href="/law_office/lawyer/list.php">List</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          articales
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/law_office/articales/add.php">Add</a>
          <a class="dropdown-item" href="/law_office/articales/list.php">List</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/law_office/profile/add_admin.php">Add New Admin</a>
          <a class="dropdown-item" href="/law_office/profile/list_admin.php">list of Admin</a>
          <a class="dropdown-item" href="/law_office/profile/my_profile.php">my_profile</a>
        </div>
      </li>
    </ul>

<ul class="navbar-nav mr-auto"> </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <button name="logout" class="btn btn-dark"> Logout </button>
    </form>
   

    <a href="/law_office/auth/login.php" class="btn btn-dark " type="submit">Login</a>

  </div>
</nav> 
</body>
</html> 
{{-- حط مكان كل با ث  redirect  --}}