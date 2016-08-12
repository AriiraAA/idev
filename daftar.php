<?php 
session_start();
require_once('aset/core/init.php');

if(isset($_SESSION['nim'])) {
header('location:index.php'); }

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <div class="container">
      <?php require_once('aset/template/logo.php'); ?>
      <hr>
      <h1><span class="glyphicon glyphicon-plus"></span> Daftar</h1>
<!-- ================================================================================================= -->
    <!-- JS validadasi form daftar -->
                <script type="text/javascript">
                    function validasi_input(form){
                      var mincar = 5;
                      if (form.password.value.length < mincar){
                        alert("Panjang Password Minimal 5 Karater!");
                        form.nim.focus();
                        return (false);
                      }
                       return (true);
                      }
                </script>
<!-- ================================================================================================= -->

        <form role="form" action="pdaftar.php" method="post" onsubmit="return validasi_input(this)">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" placeholder="nim" name="nim" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="password" name="password" required>
                </div>

                <button type="submit" name="daftar" class="btn btn-success btn-md">Daftar</button>
                <button type="reset" class="btn btn-primary btn-md">Reset</button>
                <h3>Sudah Pernah Daftar? <a href="login.php"><b>Login</b></a></h3>
        </form>
      </div>
</body>
</html>

<?php 
      require_once('aset/template/footer.php');
?>