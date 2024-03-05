<?php
session_start();
$conn = new mysqli("localhost", "root", "", "sign_up");
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    $mail = $_SESSION['mail'];
    $rs = mysqli_query($conn, "SELECT * FROM signup WHERE dotnet_mail='$mail'");
    if (mysqli_num_rows($rs) == 1) {
        $row = mysqli_fetch_assoc($rs);
        $full_name = $row['full_name'];
        $branch=$row['branch'];
        $roll_no = $row['roll_no'];
        $reg=$row['reg'];
        $email = $row['dotnet_mail'];
        $phn_no = $row['phn_no'];
        $parentphn_no = $row['parentphn_no'];
       
        $img = $row['img'];
        $imageExtensions = ["jpg", "jpeg", "png"];
$foundImage = false;

foreach ($imageExtensions as $extension) {
    $imagePath = "student_img/{$roll_no}.{$extension}";
    if (file_exists($imagePath)) {
        $foundImage = true;
        break;
    }
}

    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Portal</title>
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      strong{
        color:black;
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
      .container {
        width:100%;
        margin-right:2%;
        padding: 20px;
        border: 1px solid #09800f;
        border-radius: 5px;
        background-color: lightgray;
      }
      .result{
       width:100%;
       margin-right:2%;
        padding: 20px;
        border: 1px solid #09800f;
        border-radius: 5px;
        background-color: lightgray;
      }

      #student-details {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex: right;
        padding: auto;
        border: rgb(15, 14, 14);
        background-color:salmon;
        box-shadow: black 5px;
        color: aliceblue;
      }

      #student-details img {
        width: 100px;
        height: 150px;
        padding-left: 1%;
        padding-bottom: 1%;
        padding-top: 1%;
        border: 2px 1px 20px 1px solid #f3e4e4;
        border-radius: 5px;
      }

      .exam-results {
        margin-top: 20px;
        border: 2px solid #f3c5c5;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        background-color: #dc9d9d;
      }

      select {
        padding: 5px;
      }

      .result-card {
        margin-top: 0 auto;
        border: 2px solid #066425;
        border-radius: 5px;
        padding: 10px;
        text-align: left;
        width: 300px;
        height: 280px;
        flex: center;
      }

      .result-card h4 {
        margin: 0;
      }

      .subject-list {
        list-style-type: none;
        padding: 0;
      }

      .subject-list li {
        margin: 5px 0;
      }

      h2 {
        text-align: center;
        margin-left: 5px;
        margin-top: 5px;
        color:black;
      }

      label {
        height: 10px;
        width: 10px;
        color: #151616e7;
      }
      *{
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
          background-color:whitesmoke;
      }

      .logo {
          width: 100px;
          height: 90px;
          margin-left: 10px; /* Adjust the margin as needed */
      }

      .text {
          text-align: center;
          margin-top: 1%;;
          flex-grow: 1; /* Allow text to expand and fill the remaining space */
      }
      h2,h3,h4{
          
          margin-bottom: -2%;
      }
      h4{
          color:rgb(39, 38, 38);
      }
      .newd1 {
        display: flex;
        justify-content: center;
        /* Horizontal centering */
        align-items: center;
        margin-top: 2%;
      }
      p{
        margin-left: -40%;
        height: 20%;
        font-weight:bold;
        text-align: left;
      }
      .c2{
        height:20%;
        font-weight:bold;
        text-align:center;
        margin-left: -2%;
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

<br>
    
<span
    style="font-size:30px;cursor:pointer;margin-top:10%;margin-left:1.5%;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.8);font-size: 20px;border-radius:5px;padding:5px 10px 10px 10px;size:20px;"
    onclick="openNav()" onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='grey'; this.style.color='white';">&#9776;</span>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn"
      style="box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-size: 20px;border-radius:5px;margin-top:5%;"
      onclick="closeNav()">&#9776;</a>
      <a href="studentresult.php">Home</a>
    <a href="consolidatedReport.php">CMM</a>
    <a href="aboutus.html">About</a>
    <a href="FAQ.html">FAQs</a>
  </div><br>
<h2>Student Information</h2>
<br>
<br>
    <div class="container">
    
    <div id="student-details">
    <?php
    if ($foundImage) {
      echo "<img src='{$imagePath}' alt='Student Photo'/>";
  } else {
      echo "<p>No image found for this student.</p>";
  }
    ?>
        <div>
            <p><strong>Name:  </strong><?php echo $full_name; ?></p>
            <p><strong>Roll No: </strong><?php echo $roll_no; ?></p>
            <p><strong>Branch: </strong><?php echo $branch; ?></p>
            <p><strong>Regulation: </strong>R<?php echo $reg; ?></p>
        </div>   
        <div>
            <p><strong>Email: </strong><?php echo $email; ?></p>
            <p><strong>Mobile No: </strong><?php echo $phn_no; ?></p>
            <p><strong>Parent number: </strong><?php echo $parentphn_no; ?></p>
        </div>
    </div>
    </div>
    <h2>                    </h2>
    <script>
	function hide(){
		document.getElementById("d1").style.display="none";
	}
	function sh(){
		document.getElementById("d2").style.dispay="none"
	}
  
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
</script>
  </body>
</html>
