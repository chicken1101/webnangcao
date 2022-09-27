<?php
header('Content-Type: text/html; charset=utf-8');

$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");


if(isset($_POST['dangky'])){
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);


if (empty($username)) {
array_push($errors, "Username is required"); 
}
if (empty($email)) {
array_push($errors, "Email is required"); 
}
if (empty($phone)) {
array_push($errors, "Password is required"); 
}
if (empty($password)) {
array_push($errors, "Two password do not match"); 
}


$sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';


die ();
}
else {
$sql = "INSERT INTO member (username, password, email, phone) VALUES ('$username','$password','$email','$phone')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Tên đăng nhập: ".$_POST['username']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
echo "Email đăng nhập: ".$_POST['email']."<br/>";
echo "Số điện thoại: ".$_POST['phone']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
}
}
}
?>