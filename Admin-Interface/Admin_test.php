
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.home</title>
  <link rel="stylesheet" href="Admin_test.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="title">
      <span>Dashboard</span>
    </div>
    <div class="header-icons">
      <div class="account">
      <h4><?php  include("../Processes/admin-login-process.php"); ?><?php  echo $_SESSION['admin_email']; ?></h4>
      </div>
    </div>
  </header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <a class="active" href="#">Home</a>
        <a href="add_agent_test.php">Add Agent</a>
        <a href="view_agent_test.php">View Agent</a>
        <a href="view_client_test.php">View Client</a>
        <a class="log-out-button" href="admin-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
     <h2>Home</h2>
      <div class="promo_card"> 
       <h1>Welcome:</h1>
          <p>Here are a few tips to get you going:</p>
          <p>
            <ol>
              <li>You are provided with a <b>Admin Email address: admin@discoverykenya.co.ke and the access password </b></li>
              <li>The email account contains all client feedback. </li>
            </ol>
          </p>
          <p>Click an option on the sidebar to get started</p>
      </div>
    </div>
  </div>

</body>
</html>
