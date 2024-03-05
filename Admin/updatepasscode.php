<!-- Fully Completed -->
<!doctype html>
<html lang="en">

<head>
    <title>Update Passcode</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0%;
            margin-left: 0%;
            margin-right: 0%;
        }

        .header {
            display: flex;
            align-items: center;
            height: 15%;
            margin-top: 0%;
            border: 1.5px solid rgb(218, 85, 85);
            background-color: whitesmoke;
        }

        .logo {
            width: 100px;
            height: 90px;
            margin-left: 10px;
            /* Adjust the margin as needed */
        }

        .text {
            text-align: center;
            margin-top: 1%;
            ;
            flex-grow: 1;
            /* Allow text to expand and fill the remaining space */
        }

        h2,
        h3,
        h4 {

            margin-bottom: -2%;
        }

        h4 {
            color: rgb(39, 38, 38);
        }

        /* Add CSS rules for the form container */
        form {
            max-width: 500px;
            /* Adjust the maximum width as needed */
            margin: auto;
            height: auto;
            margin-top: 10px;
            /* Center the form horizontally */
            padding: 20px;
            display: block;
            border: 1px solid #ccc;
            background-color: lightcoral;
            border-radius: 10px;
        }

        /* Add CSS rules for form inputs */
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 1.5%;
        }

        /* Add CSS rules for the submit button */
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: 15px;
        }
        .sidenav {
      height: 100%;
      width: 0;
      margin:auto;
      position: fixed;
      z-index: 3;
      top: 0;
      left: 0;
      background-color: salmon;
      overflow-x: hidden;
      transition: 0.2s;
      color: red;
      border-radius: 2% 1% 1% 2%;
      padding-top: 50px;
      box-shadow: 0 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      ;
    }

    .sidenav a {
      padding: 5px 5px 5px 10px;
      text-decoration: none;
      font-size: 18px;
      font-family: 'Times New Roman', Times, serif;
      font-weight: bold;
      color: whitesmoke;
      display: block;
      margin-top: 4.5%;
      transition: 0.2s;
    }

    .sidenav a:hover {
      color: black;
      background-color: white;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 40px;
      font-size: 30px;
      margin-left: 0px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }


    }


        table {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        tr:nth-child(even) {
            background-color: #eee;
        }

        /* Add hover effect for the submit button */
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Add CSS rules for section headings */
        section h2 {
            color: #007bff;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        /* Add CSS rules for checkboxes */
        .items {
            margin-bottom: 10px;
        }

        /* Add additional styling as needed */
        label {
            font-weight: bold;
        }

        #wrong {
            margin-top: 2%;
            text-align: center;
            color: red;
            font-size: 30px;
        }

        #success {
            margin-top: 2%;
            text-align: center;
            color: #198754;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <header>
        <div class="header">
            <div>
                <img src="VVIT.png" class="logo">
            </div>
            <div class="text">
                <h2 style="margin-top:0% ;color:brown;">VASIREDDY VENKATADRI INSTITUTE OF TECHNOLOGY</h2>
                <h4 style="color:rgb(5, 150, 102);">(AUTONOMOUS)</h4>
                <h4>Approved by AICTE and permanently affiliated to JNTUK,</h4>
                <h4>Accredited by NAAC with 'A' grade, Accredited by NBA.</h4>
                <h4 style="margin-bottom:-0.5%;">Pedakakani(md) Guntur(dt) Andhra Pradesh.</h4>
                <br>

            </div>
        </div>
    </header>
    <br>
  <span
    style="font-size:30px;cursor:pointer;margin-top:10%;margin-left:1.5%;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.8);font-size: 20px;border-radius:5px;padding:5px 10px 10px 10px;size:20px;"
    onclick="openNav()" onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='grey'; this.style.color='white';" id="menu-btn">&#9776;</span>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn"
      style="box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-size: 20px;border-radius:5px;margin-top:5%;"
      onclick="closeNav()">&#9776;</a>
      
    <a href="adminpage.php">Home</a>
    <a href="teacherdelete.php">Remove Faculty</a>
    <a href="upload.php">Upload CSV File</a>
    <a href="delete.php">Delete CSV File</a>
    <a href="update_supplymarks.php">Update Supply Marks</a>
    <a href="updaterevaluation.php">Update Revaluation Marks</a>
    <a href="updatepasscode.php">Change Passcode</a>
    <a href="UpdateSubjectFullNames.php"> Update Subject Fullnames</a>
    <a href="backlogsub.php">Subject wise Backlogs</a>
    <a href="backlogs_rollnumberwise.php">Student wise Backlogs</a>
    <a href="nonbacklog.php">0 Backlog students</a>
    <a href="consolidatedReport.php">CMM</a>
    <a href="aboutus.html">About</a>
    <a href="FAQ.html">FAQs</a>
  </div><br>
  

  
  <center>
        <h2 style='color:blue;margin-top:-1%;'>UPDATE PASSCODES</h2>
    </center><br><br>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="passcode" placeholder="Passcode" value="<?php echo $_POST['passcode'] ?? ''; ?>" required />
        <center>
            <input type="submit" name="submit" value="Update">
        </center>
    </form>
    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementsByClassName("container")[0].style.marginLeft = "250px";
      document.getElementsByClassName("result")[0].style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementsByClassName("container")[0].style.marginLeft = "0";
      document.getElementsByClassName("result")[0].style.marginLeft = "0";
    }
    document.addEventListener('click', (event) => {
      if (!document.getElementById("mySidenav").contains(event.target) && event.target !== document.querySelector('#menu-btn')) {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementsByClassName("container")[0].style.marginLeft = "0";
        document.getElementsByClassName("result")[0].style.marginLeft = "0";
      }
    });
  </script>
</body>


</html>

<?php

if (isset($_POST['submit'])) {
    $passcode = $_POST['passcode'];
    $tablename = 'passcode';
    $dbname = 'sign_up';
    $con = mysqli_connect("localhost", "root", "");
    if (!$con) {
        exit("connection error!");
    }

    $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";

    // Execute the query
    $result = $con->query($query);

    // Check if the database not exists
    if (!($result->num_rows > 0)) {
        exit("<div id='wrong'>Data unavailable.</div>");
    }

    $conn = mysqli_connect("localhost", "root", "", $dbname);

    $query = "SHOW TABLES";
    $result = $conn->query($query);

    if ($result) {
        $tableExists = false;

        // Check if the table exists in the database
        while ($row = $result->fetch_assoc()) {
            if ($row["Tables_in_" . $dbname] == $tablename) {
                $tableExists = true;
                break;
            }
        }

        if ($tableExists) {
            $query = "SELECT * FROM {$tablename} WHERE `code`='{$passcode}'";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                exit("<div id='wrong'>Passcode already exists.</div>");
            }
            else{
                $query = "INSERT INTO {$tablename} VALUES('{$passcode}')";
                $res = mysqli_query($conn, $query);
                if($res){
                    exit("<div id='success'>Passcode Updated✅</div>");
                }
                else{
                    exit("<div id='wrong'>Error in updating passcode.</div>");
                }
            }
        } else {
            exit("<div id='wrong'>No records found.</div>");
        }
    }


}

?>