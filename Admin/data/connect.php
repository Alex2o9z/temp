<?php 


$conn = new mysqli('localhost','root','','datacookingbooks');

function thucphamchinh($conn){
  $query = "SELECT * FROM `thucphamchinh` WHERE cap= 1 ";
  $result = mysqli_query($conn,$query);
  return $result;
}
function thucphamchinhhaisan($conn){
  $query = "SELECT * FROM `thucphamchinh` WHERE cap= 2 ";
  $result = mysqli_query($conn,$query);
  return $result;

}
function thucphamchinhthit($conn){
  $query = "SELECT * FROM `thucphamchinh` WHERE cap= 3 ";
  $result = mysqli_query($conn,$query);
  return $result;

}
function baidangmonanhaisan($conn){

  $query = "SELECT * FROM baidangmonan WHERE ID_thucphamchinh IN ('tom', 'cahoi', 'muc')";
$result = mysqli_query($conn,$query);
  return $result;

}

function baidangmonanthit($conn){

  $query = "SELECT * FROM baidangmonan WHERE ID_thucphamchinh IN ('thitheo', 'thitbo')";
$result = mysqli_query($conn,$query);
  return $result;

}

function baidangmonandiemtam($conn){

  $query = "SELECT * FROM baidangmonan WHERE ID_thucphamchinh IN ('diemtam')";
$result = mysqli_query($conn,$query);
  return $result;

}

function baidangmonandochay($conn){

  $query = "SELECT * FROM baidangmonan WHERE ID_thucphamchinh IN ('dochay')";
$result = mysqli_query($conn,$query);
  return $result;

}
 function monanuuthich($conn){
  $query =" SELECT * FROM baidangmonan WHERE ID_baidang IN (SELECT ID_baidang FROM monanduocyeuthich) ";
  $result = mysqli_query($conn,$query);
    return $result;
  
  }

  function thanhphantheotl($conn){

    $query =" SELECT * FROM baidangmonan WHERE idtl " ;
    $result = mysqli_query($conn,$query);
      return $result;
    
    }

?>