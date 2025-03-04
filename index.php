<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-default mynav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">My Website</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
        <h1>Welcome to My Website</h1>
    </header>
    <main>
        <p>This is a basic website structure.</p>
    </main>
    <div class="container-fluid text-center ">
        <div class="row">
            <div class="col-sm-4">
                <h3>Column 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <div class="thumbnail">
                  <a href="images/flor2.jpg">
                    <img src="images/flor2.jpg" alt="Flor2" style="width:100%">
                    <div class="caption">
                      <p>Lorem ipsum...</p>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col-sm-4">
                <h3>Column 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <div class="thumbnail">
                  <a href="images/flor2.jpg">
                    <img src="images/flor2.jpg" alt="Flor2" style="width:100%">
                    <div class="caption">
                      <p>Lorem ipsum...</p>
                    </div>
                  </a>
                </div>
            </div>
            <div class="col-sm-4">
                <h3>Column 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <div class="thumbnail">
                  <a href="images/flor2.jpg">
                    <img src="images/flor2.jpg" alt="Flor2" style="width:100%">
                    <div class="caption">
                      <p>Lorem ipsum...</p>
                    </div>
                  </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Data Table</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                $servername = "localhost";
                $username = "username";
                $password = "password";
                $dbname = "database";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT id, name, email FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; 2023 My Website</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
