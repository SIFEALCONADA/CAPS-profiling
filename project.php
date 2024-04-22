<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Project</title>
    <style>
     *  {
          box-sizing: border-box;
        }
         
        body {
          margin: 0;
          width:100%vh;
          background:url('img/proj.jpg') no-repeat;
          background-size:cover;

        }
        .row {
          padding:50px;

        }
        .col1{
          width:25%;
          padding: 10px 20px 10px;
          border: 5px solid black;
          background-color: white;
          box-shadow: 10px 10px 5px green;
          float: left;
          -ms-transform: rotate(7deg);
          -webkit-transform: rotate(7deg);
          transform:rotate(7deg);

        }
         
         
        .col1 span{
           font-weight: bold;
           font-size: 25px;

        }
         
        .col1:hover{
            transform: rotate(0deg);

        }
         
         
        .col2 {
            width: 25%;
            padding: 10px 10px 20px 10px;
            border: 2px solid black;
            background-color: white;
            box-shadow: 10px 10px 5px green;
            float: left;
            -ms-transform: rotate(-8deg);
            -webkit-transform: rotate(-8deg);
            transform:rotate(-8deg);

        }
         
        .col2 span {
            font-weight: bold;
            font-size: 25px;

        }
         
        .col2:hover{
            transform:rotate(0deg);

        }
         
        .row:after {
            content: " ";
            display: table;
            clear: both;

        }
         
        @media screen and (max-width:600px) {
            .col1 {
                width: 100%;
            }
            .col2 {
                width: 100%;
            }
        }

        .him a{
           float: left;
           color: black;
           padding: 14px 16px;
           text-align: center;
           font-size: 28px;
           text-decoration: none;

        }

        .him a:hover{
            background-color: lightgreen;
            color: black;

        }

    </style>
</head>

<body>
    <div class="him">
    <a href="userhome.php"> HOME </a>
    <a href="gallery.php"> GALLERY </a>
    <a href="project.php"> GROUP PROJECT </a>
    <a href="createpost.php"> CREATE POST </a>
    <a href="update_profile.php"> UPDATE PROFILE </a>
    <a href="index.php"> LOGOUT </a>
    </div>
    <div class="row">

    
        
        <div class="col1">
            <img src="img/landing.png" width="100%">
            <span>VoteSphere: PHINMA-UI Student Election Online</span>
            <span> Landing Page </span>
            <p class="desc1">The landing page of our Capstone Project it features the  ABOUT, 
                TEAM, and ACCOUNT.</p>
        </div>
        
        <div class="col2">
            <img src="img/admin.png" width="100%">
            <span> Admin Dashboard </span>
            <p class="desc2"> Admin dashboard, where it contains the list votes of students.
            Also the record of the total votes of students for election.</p>
        </div>

        <div class="col1">
            <img src="img/secretary.png" width="100%">
            <span> Secretary Dashboard</span>
            <p class="desc1">Secretary board were she/he registered the student to votes for the 
                online election.</p>
        </div>

       <div class="col2">
            <img src="img/student.jpg" width="100%">
            <span> Student To Login </span>
            <p class="desc2">Student were to login to select their .</p>
        </div>


</body>
</html>