<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/dang_ky.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container">
    <div class="header">
      <div class="logo">
        <img src="./assets/images/img_logo_heder/logo.png" alt="">
      </div>
      <div class="menu">
        <a class="menu_home" href="index2.php">
          <i class="fa-sharp fa-solid fa-house"></i> <span>HOME</span>
        </a>
        <br />
        <div class="menu_home1">
          <a class="menu_type" href="index2.php?url=ds_loai_xe"><i class="fa-solid fa-pencil"></i><span>LOẠI XE</span> </a>
          <div class="submenu">
            <a href="index2.php?url=them_loai_xe" class="btn_them"><i class="fa-solid fa-plus"></i> THÊM MỚI</a>
            <a href="index2.php?url=ds_loai_xe" class="btn_ds"><i class="fa-solid fa-book"></i>DANH SÁCH</a>
          </div>
        </div>
        <br />
        <div class="menu_home1">
          <a class="menu_car" href="index2.php?url=ds_xe"><i class="fa-solid fa-car"></i>XE</a>
          <div class="submenu">
            <a href="index2.php?url=them_xe"><i class="fa-solid fa-plus"></i> THÊM MỚI</a>
            <a href="index2.php?url=ds_xe"><i class="fa-solid fa-book"></i>DANH SÁCH</a>
          </div>
        </div>
        <br />
        <div class="menu_home1">
          <a class="menu_people" href="index2.php?url=ds_khach_hang"><i class="fa-sharp fa-solid fa-person"></i><span>KHÁCH HÀNG</span> </a>
          <div class="submenu">
            <a href="index2.php?url=them_khach_hang"><i class="fa-solid fa-plus"></i> THÊM MỚI</a>
            <a href="index2.php?url=ds_khach_hang"><i class="fa-solid fa-book"></i>DANH SÁCH</a>
          </div>
        </div>
        <br>
        <div class="menu_home1">
          <a class="menu_time" href="index2.php?url=ds_khung_gio"><i class="fa-solid fa-clock"></i><span>KHUNG GIỜ</span> </a>
          <div class="submenu">
            <a href="index2.php?url=them_khung_gio"><i class="fa-solid fa-plus"></i> THÊM MỚI</a>
            <a href="index2.php?url=ds_khung_gio"><i class="fa-solid fa-book"></i>DANH SÁCH</a>
          </div>
        </div>
        <br />
        <a class="menu_view" href="index2.php?url=ds_dang_ky"><i class="fa-solid fa-bookmark"></i><span>ĐĂNG KÝ XEM XE</span> </a><br />
      </div>
    </div>
      <div class="main_content">
      <div class="banner">
        <span class="text">>> DANH SÁCH XE</span>
        <a href="index.php?url=logout"  onclick="return confirm('Bạn có chắc là muốn đăng xuất')" class="log_out"> <i class="fa-solid fa-user"></i></a>
        <div class="hello">
          <marquee class="text-right" width="150px" direction="left" height="50px">
            <h3 class="" style="color: #FFF;"> <?php
                                                session_start();

                                                echo isset($_SESSION['admin']) ? 'Hello' . ' ' .  $_SESSION['admin'] : "";
                                                if(!isset($_SESSION['admin'])){
                                                  header('location:index.php?url=login');
                                                } ?>
            </h3>
          </marquee>
        </div>
      </div>
        <table style="max-width: 1140px; width: 100%;" >
        <tr class="tr1">
          <td class="td1">MÃ ĐẶT</td>
          <td class="td2">TÊN KHÁCH HÀNG  </td>
         <td> EMAIL</td>
         <td>ĐỊA CHỈ </td>
         <td>MÃ GIỜ</td>
         <td>MÃ XE</td>
         <td>MÃ KH </td>
         <td>TRẠNG THÁI</td>
        </tr>
        <?php foreach ($dk as $key => $value) : ?>
          <tr class="tr2">
            <td class=""> <?= $value['ma_dat'] ?> </td>
            <td><?= $value['ten_khach_hang'] ?> </td>
            <td><?= $value['email'] ?> </td>
            <td><?= $value['dia_chi'] ?> </td>
            <td><?= $value['ma_gio'] ?> </td>
            <td><?= $value['ma_xe'] ?> </td>
            <td><?= $value['ma_kh'] ?> </td>
            <td><?= $value['trang_thai'] ?> </td>
           <td> <button class="btn_edit">
                <a class="edit" href="index2.php?url=sua_dang_ky&ma_dat=<?php echo $value['ma_dat'] ?>"   onclick="return confirm('Chắc chắn duyệt')">Duyệt</a>
              </button>
              <button class="btn_delete">
                <a class="delete" href="index2.php?url=xoa_dang_ky&ma_dat=<?php echo $value['ma_dat'] ?>" onclick="return confirm('Hãy kiểm tra trạng thái , bạn có chắc muốn xóa. ')">Xóa</a>
              </button>
              </td> 
           <?php endforeach ?> 
      </div>
    </div>
  </body>
</html>