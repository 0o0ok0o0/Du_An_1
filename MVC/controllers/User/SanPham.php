<?php 
require './models/User/SanPham.php';
// function hienThiSanPham()
// {
    
//     $ds_sp_xe = layDSSanPham();
//     $ds3_sp_xe = layDS3SanPham();
//     include('views/User/san_pham/danh_sach.php');
   
// }
function hienThi1SanPham()
{
    // $dm_loai_xe = layDSDanhMuc();
    // $ds_sp_xe_cl = lay3SanPhamCungLoai();
    $sp = lay1SanPham();
  
    include('views/User/san_pham/san_pham_ct.php');
   
}
// function hienThiSanPhamTheoDM()
// {
//     $sp_dm = laySanPhamTheoDM($_GET['ma_loai']);
   
//     include('views/User/san_pham/san_pham_dm.php');
   
// }
// function hienThiSanPhamTheoGio()
// {
//     $sp_gio = laySanPhamTheoGio($_GET['ma_gio']);
   
//     include('views/User/san_pham/san_pham_gio.php');
   
// }
// function hienThiKhungGio()
// {
//     $ds_gio = layKhungGio();
//     include('views/User/san_pham/danh_sach_gio.php');
   
   
// }
// function timKiemSanPhams(){
    
//     $ds_sp_xe = timKiemSanPham($_GET['key']);
//     include ('views/User/san_pham/danh_sach.php');
// }
?>