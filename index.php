<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>My Diary</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="./Bootswatch_ Cosmo_files/bootstrap.css" media="screen">
  <link rel="stylesheet" href="./Bootswatch_ Cosmo_files/custom.min.css">
  <linkhref="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css_docs.css">
  <link rel="icon" href="./logo/image/logo.jpeg">
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
  <script type="text/javascript" async="" src="./Bootswatch_ Cosmo_files/ga.js.ดาวน์โหลด"></script>
  <script src="./fontawesome-free-5.0.2/svg-with-js/js/fontawesome-all.min.js"></script>

</head>

<body class="background">
  <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary shadow">
    <div class="container">
      <a href="index.php" class="navbar-brand fontbig">My Diary</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php" aria-expanded="false">ไดอารี่ประจำวัน  <span class="sr-only">(current)</span></a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="page_special_ex.php">ประสบการณ์พิเศษ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page_life_lesson.php">บทเรียนสำคัญ</a>
          </li>
        </ul>
        <a><i class="fas fa-user"></i></a>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link active" href="login.html" aria-expanded="false">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container" style="margin-bottom:1.5em">
    <h4>บันทึกเหตุการณ์ต่างๆ ในชีวิตประจำวันของคุณ</h4>
    <div class="card shadow">
      <div class="card-body">

      <h5>ตารางข้อมูล</h5>

      <div class="row">
        <div class="col-6">
          <a class="btn btn-success" href="type_diarytoday.php" role="button">เพิ่มข้อมูล</a>
        </div>
        <div class="col-6">
          <form class="form-inline my-2 my-lg-0 text-search">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">ค้นหา</button>
          </form>
        </div>
      </div>
  </div>
  </div>
</div>

<?php
 
            include 'connect.php';

            $mysqli = new mysqli($servername, $username, $password, $dbname);

            $query = "SELECT * FROM diary_today WHERE id_diarytoday";
            $res = mysqli_query($mysqli, $query);
            $num=1;
            while ($row = mysqli_fetch_array($res)) { ?>
               
            <div class="container">
            <div class="card shadow" style="padding: 1px 1px 1px 1px;">
            <div class="card-body">
            <div class="row">
            <div class="col"></div>
            <div class="col-10  rounded shadow-dark-com com-bg-2">
                <h8 class="txt-de-h1">
                <br>
                &nbsp; &nbsp;&nbsp;<?php echo $row["subject_diary"];?><br>
                <hr>
                &nbsp; &nbsp;&nbsp;<?php echo $row["story_today"];?><br>
                <hr>
                <div class="txt-sm">
                &nbsp; &nbsp;&nbsp;<?php echo $row["date_time"];?>
                &nbsp; &nbsp;&nbsp;โดย : <?php echo $row["author_id"]; ?>
                </h8>
                <?php
                if($_SESSION['u_id'] == $row['author_id']){
                ?>
                
                &nbsp; &nbsp;&nbsp;<a href="edit_diarytoday.php?request=<?php echo $row['id_diarytoday'];?>" class ="badge badge-warning"><h8 class="txt-white">แก้ไข</h8></a>&nbsp;<a href="api_del_diarytoday.php?id_diarytoday=<?php echo $row['id_diarytoday'];?>" class ="del2 badge badge-danger"><h8 class="txt-white">ลบ</h8></a><br><br> 
                <?php
                }
                ?>
                </div>
            </div>
            <div class="col"></div><br>
            
            </div>
            </div>
            </div>
            </div>
                <div><br></div>
              <?php $num++;
            } ?>
        </div>
        </div>
      

  <script src="./Bootswatch_ Cosmo_files/jquery.min.js.ดาวน์โหลด"></script>
  <script src="./Bootswatch_ Cosmo_files/popper.min.js.ดาวน์โหลด"></script>
  <script src="./Bootswatch_ Cosmo_files/bootstrap.min.js.ดาวน์โหลด"></script>
  <script src="./Bootswatch_ Cosmo_files/custom.js.ดาวน์โหลด"></script>

</body>

</html>

