<?php
require_once "templates/head.php";
require_once "templates/header.php";
?>



<section class="page-header profile_page">
     <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Danh Sách Hãng Xe</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Danh Mục</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Dealers-list-->
<section class="inner_pages">
  <div class="container">
    <div class="result-sorting-wrapper">
      <div class="sorting-count">
      <?php foreach($dm_loai_xe as $value):
        
          $total_dm = count($dm_loai_xe);
         ?>
    
   <?php endforeach ?>

        <p>Số Danh Mục : <?= isset($total_dm)? $total_dm:"0" ?></p>
      </div>
      <!-- <div class="result-sorting-by">
        <p>Sort by:</p>
        <form action="#" method="post">
          <div class="form-group select sorting-select">
            <select class="form-control ">
              <option>Best Sellers</option>
              <option>Newest Sellers</option>
            </select>
          </div>
        </form>
      </div> -->
    </div>
    
    <div class="dealers_list_wrap">
     <?php foreach($dm_loai_xe as $value): 
     
   
     extract($value);
     $link_ds_xe = 'index.php?url=sanpham_danhmuc&ma_loai='.$ma_loai;
     ?>
      <div class="dealers_listing">
        <div class="row">
          <div class="col-sm-3 col-xs-4">
            <div class="dealer_logo"> <a href="<?= $link_ds_xe?>"><img src="<?= $hinh_logo ?>" alt="image"></a> </div>
          </div>
          <div class="col-sm-6 col-xs-8">
            <div class="dealer_info">
              <h5><a href="<?= $link_ds_xe?>"><?= $ten_loai ?> </a></h5>
             
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
            <div class="view_profile"> <a href="<?= $link_ds_xe?>" class="btn btn-xs outline">Danh Sách Xe</a>
              <!-- <p> (<?= $total_xe_dm ?>) Xe</p> -->
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
    <!-- <div class="pagination">
      <ul>
        <li class="current">1</li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
    </div> -->
  </div>
</section>
<!--/Dealers-list--> 

<!--Brands-->
<!-- <section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="assets/images/brand-logo-1.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-2.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-3.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-4.png" class="img-fluid" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-5.png" class="img-fluid" alt="image"></a></div>
      </div>
    </div>
  </div>
</section> -->
<!-- /Brands--> 
<?php
require_once "templates/footer.php";

?>
