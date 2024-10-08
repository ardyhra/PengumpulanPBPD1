<!-- 
Nama : Tara Tirzandina
NIM : 24060122130060
Tanggal : 24 September 2024
-->

<?php
//File: Admin.php
//Deskripsi : halaman yang dapat ditampilkan jika di redirect ke halaman login.php
session_start();
if (!isset($_SESSION['username'])){
    header('Location: login.php');
}
include('header.php') ?>
<br>
<div class="card">
    <div class="card-header">Admin Page</div>
    <div class="card-body">
        <p>Welcome ... </p>
        <p>You are logged in as <b><?php echo $_SESSION['username']; ?></p>
        <br><br>
        <a class="btn btn-primary" href="logout.php">Logout</a>
    </div>
</div>
<?php include('footer.php') ?>