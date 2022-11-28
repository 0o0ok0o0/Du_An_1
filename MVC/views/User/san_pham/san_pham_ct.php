<?php
require_once "templates/head.php";
require_once "templates/header.php";
?>
<!-- Listing-detail-header -->
<?php extract($sp) ?>
<section class="listing_detail_header">
  <div class="container">
    <div class="listing_detail_head white-text div_zindex row">
      <div class="col-md-9">
        <h3>Chi Tiết: </h3>
        <h2><?= $ten_xe ?></h2>
        <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $xuat_xu ?></span></div>
        <div class="add_compare">
         
          <div class="share_vehicle">
            <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"></a> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <?php $don_gia_new = $don_gia-($don_gia*$giam_gia)/100 ?>
          <p> <?= currency_format($don_gia_new)  ?></p>
          <p class="old_price"> <?=currency_format($don_gia) ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>
<!-- /Listing-detail-header -->

<!-- <section class="listing_other_info secondary-bg">
  <div class="container">
    <div id="filter_toggle" class="search_other"> <i class="fa fa-filter" aria-hidden="true"></i> Search Car </div>
    <div id="other_info"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
    <div id="info_toggle">
      <button type="button" data-bs-toggle="modal" data-bs-target="#schedule"> <i class="fa fa-car" aria-hidden="true"></i> Schedule Test Drive </button>
      <button type="button" data-bs-toggle="modal" data-bs-target="#make_offer"> <i class="fa fa-money" aria-hidden="true"></i> Make an Offer </button>
      <button type="button" data-bs-toggle="modal" data-bs-target="#email_friend"> <i class="fa fa-envelope" aria-hidden="true"></i> Email to a Friend </button>
      <button type="button" data-bs-toggle="modal" data-bs-target="#more_info"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Request More Info </button>
    </div>
  </div>
</section> -->


<!-- Filter-Form -->
<section id="filter_form" class="inner-filter gray-bg">
  <div class="container">
    <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>
    
      <form action="#" method="get">
	  <div class="row">
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option value="">Select Location </option>
              <option value="">Location 1 </option>
              <option value="">Location 1 </option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Brand</option>
              <option>Audi</option>
              <option>BMW</option>
              <option>Nissan</option>
              <option>Toyota</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Model</option>
              <option>Series 1</option>
              <option>Series 2</option>
              <option>Series 3</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Year of Model </option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 black_input">
          <label class="form-label">Price Range ($)</label>
          <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Type of Car </option>
              <option>New Car</option>
              <option>Used Car</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6">
          <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car </button>
        </div>
		 </div>
      </form>
   
  </div>
</section>
<!-- /Filter-Form --> 

<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="row">
        
      <div class="col-md-9">
        <div class="listing_images">
          <div class="listing_images_slider">
          <div><img src="<?php echo $hinh?>" alt="image"></div>
          <?php foreach($albums as $key=> $values): ?>
            <div><img src="<?php echo $values['hinh1']?>" alt="image"></div>
            <?php endforeach ?>
          </div>


          <div class="listing_images_slider_nav">
          <div><img src="<?php echo $hinh?>" alt="image"></div>
          <?php foreach($albums as $key=> $values): ?>
            <div><img src="<?php echo $values['hinh1']?>" alt="image"></div>
            <?php endforeach ?>
          
          </div>
        </div>


        


        <div class="main_features">
          <ul>
            <li> <i class="fa fa-tachometer" aria-hidden="true"></i>
              <h5><?= $so_km ?></h5>
              <p>Total Kilometres</p>
            </li>
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5><?= $xuat_xu ?></h5>
              <p>Reg.Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>Diesel</h5>
              <p>Loại Dầu</p>
            </li>
            <li> <i class="fa fa-power-off" aria-hidden="true"></i>
              <h5>Automatic</h5>
              <p>Bộ Chuyển Đổi</p>
            </li>
            <li> <i class="fa fa-superpowers" aria-hidden="true"></i>
              <h5><?= $dong_co ?></h5>
              <p>Mã Lực</p>
            </li>
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5><?= $slots ?></h5>
              <p>Chỗ Ngồi</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          
          
           <!--Vehicle-Video-->
          <!-- <div class="video_wrap">
            <h6>Watch Video </h6>
            <div class="video-box">
               <iframe class="mfp-iframe" src="https://www.youtube.com/embed/rqSoXtKMU3Q" allowfullscreen></iframe>
            </div>
         </div> -->
        
          <!--Comment-Form-->
          
          <div class="comment_form">
            <h6>Bình Luận</h6>
           
            <form  method="post">
              <div class="form-group">
                <input type="text" name="full_name" class="form-control" placeholder="Full Name">
              </div>
              
              <div class="form-group">
                <textarea rows="5" name="content" class="form-control" placeholder="Comments"></textarea>
              </div>
              <!-- <div class="form-group">
                <b>Ngày :</b>
              </div> -->
              <?php if(isset($_SESSION['username'])){ ?> 
              <div class="form-group">
                <input type="submit" name="btn_bl" class="btn" value="Submit Comment">
              </div>
              <?php } ?>
            </form>
         
          </div>
       
          
          <!--/Comment-Form--> 
    
          <div>
            <h5>List Bình Luận</h5>
          <div class="form-group">
            <?php foreach($bl as $value): ?>
            <div style="margin-top:10px;  background-color: #eee;padding:10px" >
            <strong class=""> User: <?= $value['User']  ?>  </strong> <br>
             <span><?= $value['noi_dung'] ?></span>
            </div>
            <?php endforeach ?>
              </div>
          </div>


        </div>
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-calculator" aria-hidden="true"></i> Đăng Ký Đặt Lịch </h5>
          </div>
          <div class="financing_calculatoe">
          <form name="them_khach_hang" action="" method="POST">
                <table  cellpadding="10px" cellspacing="0">
                <tr>
               
                 
                  <td >Ma_kh<br /><input type="text" value="<?= isset($_SESSION['ma_kh'])?$_SESSION['ma_kh']:"" ?>" name="ma_kh" id="ma_kh"/></td>

                
                    </tr>
                    <tr>
                        <td >
                            Tên khách hàng<br />
                            <input type="text" value="" name="ten_khach_hang" id="ten_khach_hang">
                            <b><?php echo isset($error['ten_khach_hang']) ? $error['ten_khach_hang'] : "" ?></b>
                        </td>
                    </tr>
              
                    <tr>
                        <td >Email<br /><input type="email" value="" name="email" id="email"/></td>
                        <b><?php echo isset($error['email']) ? $error['email'] : "" ?></b>
                    </tr>
                    <tr>
                        <td >Điện thoại<br /><input type="text" name="so_dien_thoai" id="so_dien_thoai" ></td>
                        <b><?php echo isset($error['so_dien_thoai']) ? $error['so_dien_thoai'] : "" ?></b>
                    </tr>
              
                    <tr>
                        <td >Địa chỉ<br /><input type="text" value="" name="dia_chi" id="dia_chi" ></td>
                        <b><?php echo isset($error['dia_chi']) ? $error['dia_chi'] : "" ?></b>
                    </tr>
                    <tr>
                        <td >Ngày Xem<br /><input type="datetime-local" name="ngay_xem" id="ngay_xem"></td>
                        <b><?php echo isset($error['ngay_xem']) ? $error['ngay_xem'] : "" ?></b>
                    </tr>
                    <tr>
                        <td >Ghi Chú<br /><input type="textarea" name="ghi_chu" id="ghi_chu" ></td>
                        <b><?php echo isset($error['ngay_xem']) ? $error['ngay_xem'] : "" ?></b>
                    </tr>
                    <tr>
                        <td ><input type="submit"  class="btn-danger" value="Đặt Ngay" name="dat_xem_xe" id="submit"/>
                        <a href="index.php">Về Trang Chủ</a>
                        </td>
                    </tr>
                </table>
            </form>
          </div>
        </div>
         <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-address-card-o" aria-hidden="true"></i> Thông tin đặt xe </h5>
          </div>
          <div class="dealer_detail"> <img src="assets/images/dealer_img.jpg" alt="image">
            <p><span>Name:</span> Dealer Name</p>
            <p><span>Email:</span> contact@example.com</p>
            <p><span>Phone:</span> +61-1234-5678-09</p>
            <a href="#" class="btn btn-xs">View Profile</a> </div>
        </div> 
         <!-- <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i> Message to Dealer</h5>
          </div>
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-block">
            </div>
          </form>
        </div>  -->
      </aside>
      <!--/Side-Bar--> 
      
    </div>
    <div class="space-20"></div>
    <div class="divider"></div>
    
    <!--Similar-Cars-->
    <div class="similar_cars">
      <h3>Sản phẩm cùng loại</h3>
     
      <div class="row">
      <?php foreach($cung_loai as $value):
        extract($value);
        $link_ct = 'index.php?url=sanpham_chitiet&ma_xe='.$ma_xe.'&ma_loai='.$ma_loai.''; 
        ?>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="<?= $link_ct ?>"><img src="<?= $hinh ?>" class="img-fluid" alt="image" /> </a>
              <div class="label_icon">Used</div>
              <div class="compare_item">
                <div class="checkbox">
                  <input type="checkbox" value="" id="compare16">
                  <label for="compare16">Compare</label>
                </div>
              </div>
            </div>
            <div class="product-listing-content">
              <h5><a href="<?= $link_ct ?>"><?= $ten_xe ?> </a></h5>
              <p class="list-price"><?= $don_gia ?></p>
              <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i><?= $so_km ?> km</li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i>$dong_co</li>
                <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
              </ul>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>

    </div>
    <!--/Similar-Cars--> 
    
  </div>
</section>
<!--/Listing-detail--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="assets/image/brand-logo-1.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/image/brand-logo-2.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/image/brand-logo-3.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/image/brand-logo-4.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/image/brand-logo-5.png" class="img-fluid" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 


<!--Footer -->
<?php require_once "templates/footer.php";?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Schedule-Test-Drive -->
<div class="modal fade" id="schedule">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Schedule Test Drive</h3>
      </div>
      <div class="modal-body">
        <form action="#" method="get">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Full Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Best Time (00:00am)">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Best Date (dd/mm/yyyy)">
          </div>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit Query" class="btn btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/Schedule-Test-Drive --> 

<!--Make-Offer -->
<div class="modal fade" id="make_offer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Make an Offer</h3>
      </div>
      <div class="modal-body">
        <form action="#" method="get">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Full Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Offer Price">
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit Query" class="btn btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/Make-Offer --> 

<!--Email-to-Friend -->
<div class="modal fade" id="email_friend">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Email to a Friend</h3>
      </div>
      <div class="modal-body">
        <form action="#" method="get">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email Address">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Friend Email Address">
          </div>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit Query" class="btn btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/Email-to-Friend --> 

<!--Request-More-Info -->
<div class="modal fade" id="more_info">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Request More Info</h3>
      </div>
      <div class="modal-body">
        <form action="#" method="get">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Full Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit Query" class="btn btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/Request-More-Info --> 

<!--Login-Form -->
<div class="modal fade" id="loginform">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Login</h3>
      </div>
      <div class="modal-body">
          <div class="login_wrap">
		  <div class="row">
            <div class="col-md-6 col-sm-6">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username or Email address*">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password*">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
                  <label for="remember">Remember Me</label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-6">
              <h6 class="gray_text">Login the Quick Way</h6>
              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
            <div class="mid_divider"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Don't have an account? <a href="#signupform" data-bs-toggle="modal" data-bs-dismiss="modal">Signup Here</a></p></br>
        <p><a href="#forgotpassword" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot Password ?</a></p>
      </div>
    </div>
  </div>
</div>
<!--/Login-Form --> 

<!--Register-Form -->
<div class="modal fade" id="signupform">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        
          <div class="signup_wrap">
		  <div class="row">
            <div class="col-md-6 col-sm-6">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" class="btn btn-block">
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-6">
              <h6 class="gray_text">Login the Quick Way</h6>
              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
            <div class="mid_divider"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-bs-toggle="modal" data-bs-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>
<!--/Register-Form --> 

<!--Forgot-password-Form -->
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Password Recovery</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email address*">
                </div>
                <div class="form-group">
                  <input type="submit" value="Reset My Password" class="btn btn-block">
                </div>
              </form>
              <div class="text-center">
                <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                <p><a href="#loginform" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js2/jquery.min.js"></script>
<script src="assets/js2/bootstrap.min.js"></script> 
<script src="assets/js2/interface.js"></script> 
<script src="assets/js2/31f5977fdc.js"></script>
<!--Switcher-->
<script src="assets/switcher/js2/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js2/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js2/slick.min.js"></script> 
<script src="assets/js2/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/listing-detail-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Nov 2022 12:37:20 GMT -->
</html>