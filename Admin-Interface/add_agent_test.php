
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard.add.agent</title>
  <link rel="stylesheet" href="add_agent_test.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <img src="Logo.png" alt="" width="80px" height="60px">
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
        <a href="Admin_test.php">Home</a>
        <a href="add_admin_test.php">Add Admin</a>
        <a  class="active" href="#">Add Agent</a>
        <a href="view_admin_test.php">View Admin</a>
        <a href="view_agent_test.php">View Agent</a>
        <a href="view_client_test.php">View Client</a>
        <a class="log-out-button" href="admin-login.php">Log out</a>
      </div>
    </nav>

    <div class="main-body">
      <div class="wrapper">
        <div class="content">
        </div>

        <form method="POST" action="../Processes/agentregistration-process.php">
        <div class="form">
        <div class="inputfield">
        <label>Agent Code</label>
        <input name="agent_code" type="text" class="input" style=" border-radius: 30px;">
        </div>  

        <div class="inputfield">
        <label>First Name</label>
        <input name="agent_fname" type="text" class="input" style=" border-radius: 30px;">
        </div>  

        <div class="inputfield">
        <label>Last Name</label>
        <input name="agent_lname" type="text" class="input" style=" border-radius: 30px;">
        </div>  

        <div class="inputfield">
        <label>Phone Number</label>
        <input name="agent_phonenumber" type="text" class="input" style=" border-radius: 30px;">
        </div>  

        <div class="inputfield">
        <label>Email</label>
        <input name="agent_email" type="email" class="input" style=" border-radius: 30px;">
        </div>  

        <div class="inputfield">
        <label>Password</label>
        <input name="agent_password" type="password" class="input" style=" border-radius: 30px;">
        </div>  
     
        <div class="inputfield">
        <input type="submit" value="ADD" class="btn" style=" width: 200%; border-radius: 30px; background-color: black; margin-left: 50%;">
        </div>
        <!--</div>
        </div>	-->

        </form>  
        <!--</div> -->
    </div>
    </div>
  </div>
</body>
</html>
