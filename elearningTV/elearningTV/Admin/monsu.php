<?php include 'filesLogicSu.php';?>
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
      <title>Layout</title>
     <link rel="stylesheet" href="/css/layout.css">

    <link rel="stylesheet" href="../css/upload.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
      
    </style>

     </head>
 <body>
 <div class="container" style = "height: auto">
     <header class="row">
         <div class = "shopping-mall" style="width: 100%;">
		    <img id="logo" src="../images/herder.jpg" alt="" style="width: 100%">
		 </div>
		 
     </header>
     <nav class="navbar navbar-expand-sm bg-info navbar-dark">
		  <div class="">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"> <span class="glyphicon glyphicon-home"> </span> Nhà của tôi</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#"></a></li>
		      <li><a href="#">Trang chủ</a></li>
		      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hướng dẫn sử dụng <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Xem lịch</a></li>
		          <li><a href="#">Xem thời khóa biểu</a></li>
		          <li><a href="#">Xem thông tin học sinh</a></li>
		        </ul>
		      </li>
		      <li><a href="#">Danh sách lớp</a></li>
		      <li><a href="#">Cổng thông tin đào tạo</a></li>
		      <li><a href="#">Liên Hệ</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng xuất</a></li>
		      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
		    </ul>
		  </div>


     </nav>


     <div class = "row">
        <aside class="col-sm-2">
               <ul class="nav nav-pills nav-stacked">

                   <li class="dropdown-submenu active">
                       <a tabindex="-1" href="#"><i class='fas fa-book-open' style='font-size:24px'></i> Kết quả học tập</a>
                       <ul class="dropdown-menu">

                           <li class="dropdown-submenu"><a tabindex="-1" href="#">Điểm các môn</a></li>
                           <li class="dropdown-submenu"><a href="#">Xếp loại học lực</a></li>
                          
                           
                       </ul>
                   </li>
                   <li class="dropdown-submenu active"> <a href="#"> <i style='font-size:24px;' class='fas'>&#xf19d;</i>Môn Tin</a></li>

                   <li class="dropdown-submenu active"><a href="#"><i style='font-size:24px;' class='fas'>&#xf19d;</i>Môn Địa</a></li>

                   <li class="dropdown-submenu active"><a href="#"><i style='font-size:24px;' class='fas'>&#xf19d;</i>Môn Sinh</a></li>

                   <li class="dropdown-submenu active"><a href="#"><i style='font-size:24px;' class='fas'>&#xf19d;</i>Môn Anh</a></li>

                   <li class="dropdown-submenu active"><a href="#"><i style='font-size:24px;' class='fas'>&#xf19d;</i>Môn Văn</a></li>

                    <li class="dropdown-submenu active"><a href="#"><i style='font-size:24px;' class='fas'>&#xf19d;</i>Môn Toán</a></li>
               </ul>
        </aside>

          <article class="col-sm-10" >
          	<marquee>Chào mừng bạn đến với hệ thống elearning trường THCS Trưng Vương</marquee>


		      <div class="row">
		        <form action="monsu.php" method="post" enctype="multipart/form-data" >
		          <h3><center><b> Upload File Môn Sử </b></center></h3>
		          <input type="file" name="myfile"> <br>
		          <button type="submit" name="save"  class="btn btn-success">upload</button>
		        </form>
		      </div>
		    

		<div class="row">
		    <table style="text-align: center;">
				<thead style="background: red;">
				    <th style="text-align: center; font-weight: bold; font-size: 17px;">ID</th>
				    <th style="text-align: center; font-weight: bold; font-size: 17px;">Filename</th>
				    <th style="text-align: center; font-weight: bold; font-size: 17px;">Size (in mb)</th>
				    <th style="text-align: center; font-weight: bold; font-size: 17px;">Downloads</th>
				    <th style="text-align: center; font-weight: bold; font-size: 17px;">Action</th>
				</thead>
				<tbody style="font-size: 15px">
				  <?php foreach ($filessu as $file): ?>
				    <tr>
				      <td><?php echo $file['id']; ?></td>
				      <td><?php echo $file['name']; ?></td>
				      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
				      <td><?php echo $file['downloads']; ?></td>
				      <td><a href="monsu.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
				    </tr>
				  <?php endforeach;?>

				</tbody>
			</table>
		</div>
	


         </article>


     </div>

     <footer class="panel panel-default">
         <div class = "panel-heading text-center">
             <p>&copy;112/2 đường. Yên Bái | Hải Châu 1| Đà Nẵng &amp;THCS Trưng Vương</p>
         </div>
     </footer>
 </div>


 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
       <script>
           $('.child').hide(); //Hide children by default

           $('.parent').children().click(function () {
               event.preventDefault();
               $(this).children('.child').slideToggle('slow');
               $(this).find('span').toggle();
           });
       </script>




 </body>
 </html>