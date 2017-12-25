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
                        <a class="nav-link" href="index.php" aria-expanded="false">ไดอารี่ประจำวัน  <span class="sr-only">(current)</span></a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page_special_ex.php">ประสบการณ์พิเศษ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="page_life_lesson.php">บทเรียนสำคัญ</a>
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

    <div class="container">
        <h4>บันทึกบทเรียนต่างๆที่สำคัญในชีวิตไว้ เพื่อให้เราไม่หลงลืมสิ่งที่เคยได้เรียนรู้เหล่านั้นไปอย่างน่าเสียดายในภายหลัง</h4>
        <div class="card shadow">
            <div class="card-body">
                <section class="content">
                    <h3>เพิ่มข้อมูล</h3>
                    <hr>
                    <!-- form start -->
                    <form role="form" action="api_add_diarylesson.php" method="post">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">
							ชื่อเรื่อง :
						</label> <input type="text" id="subject" class="form-control" name="subject" value="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">
							วันที่ :
						</label> <input type="date" id="date" class="form-control" name="date" value="">
                            </div>

                            <div class="form-group">
                                <label>
							เรื่องราว :
						</label>
                                <textarea rows="3" class="form-control" id="story" name="story" value=""></textarea>
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-primary" type="submit">
						<i class="fa fa-fw fa-save">
						</i>บันทึกข้อมูล
					</button>
                                <a class="btn btn-danger" href="page_life_lesson.php" role="button">
						<i class="fa fa-fw fa-close">
						</i>ยกเลิก
					</a>
                            </div>
                    </form>
                </section>
                </div>
            </div>
            </div>
            </div>
           
            <script src="./Bootswatch_ Cosmo_files/jquery.min.js.ดาวน์โหลด"></script>
            <script src="./Bootswatch_ Cosmo_files/popper.min.js.ดาวน์โหลด"></script>
            <script src="./Bootswatch_ Cosmo_files/bootstrap.min.js.ดาวน์โหลด"></script>
            <script src="./Bootswatch_ Cosmo_files/custom.js.ดาวน์โหลด"></script>


</body>

</html>