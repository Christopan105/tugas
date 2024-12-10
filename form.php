<?php
include "koneksi.php";
if (isset($_POST['button'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pw = $_POST['password'];
  $telepon = $_POST['telepon'];
  $tempat = $_POST['tempat'];
  $tgl = $_POST['tgl'];
  $jk = $_POST['gender'];
  $alamat = $_POST['alamat'];
  $query = "INSERT INTO account(id_account, email, password,

akses) VALUES ('','$email',md5('$pw'),'2')";
  if (mysqli_query($conn, $query)) {
    $id = mysqli_insert_id($conn);
    $data = mysqli_query($conn, "INSERT INTO tbl_user(id_user,
id_account,nama,telepon,tempatlahir,tgl_lahir,jk,alamat)
VALUES

('','$id','$nama','$telepon','$tempat','$tgl','$jk','$alamat')");

    echo "<script>
Swal.fire({
title: 'Add Data',
text: 'Add Data Success.',
icon: 'success',
}).then(() => {
window.location.href = '?page=pengguna';
});
</script>";
  } else {
    echo "<script>
Swal.fire({
icon: 'error',
title: 'Add Data Fault',
text: 'Try Again..!',
}).then(() => {
window.location.href = '?page=pengguna';
});
</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatitble" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form</title>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="admin.css" />
</head>

<body>
  <!-- navigation -->
  <div class="container">
    <div class="navigation">
      <ul>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
            <span class="title">University</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="form.php">
            <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
            <span class="title">Form</span>
          </a>
        </li>
        <li>

          <a href="pengguna.php">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
            <span class="title">Pengguna</span>
          </a>
        </li>
        <li>
        <li>
          <a href="Chart.php">
            <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span>
            <span class="title">Chart</span>
          </a>
        </li>
        <li>
          <a href="Setting.php">
            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
            <span class="title">Setting</span>
          </a>
        </li>
        <li>
          <a href="Password.php">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
            <span class="title">Password</span>
          </a>
        </li>
        <li>
          <a href="Logout.php">
            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
            <span class="title">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="topbar">
        <div class="toggle">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="search">
          <label>
            <input type="text" placeholder="search here" />
            <ion-icon name="search-outline"></ion-icon>
          </label>
        </div>
        <div class="user">
          <img src="avatar1.jpg" alt="" />
        </div>
      </div>
      <!-- ======= card ===== -->
      <div class="cardBox">
        <div class="card">
          <div>
            <div class="number">1.504</div>
            <div class="cardName">Daily Views</div>
          </div>
          <div class="iconBox"><ion-icon name="eye-outline"></ion-icon></div>
        </div>
        <div class="card">
          <div>
            <div class="number">80</div>
            <div class="cardName">Sales</div>
          </div>
          <div class="iconBox"><ion-icon name="cart-outline"></ion-icon></div>
        </div>
        <div class="card">
          <div>
            <div class="number">284</div>
            <div class="cardName">Comments</div>
          </div>
          <div class="iconBox">
            <ion-icon name="chatbubble-outline"></ion-icon>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">$3.84</div>
            <div class="cardName">Earnings</div>
          </div>
          <div class="iconBox"><ion-icon name="cash-outline"></ion-icon></div>
        </div>
      </div>
      <div class="details">

        <div class="recentOrder">
          <div class="text">Form Input Data</div>
          <hr />
          <form action="" class="form" method="POST">

            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $data = mysqli_query($conn, "SELECT * FROM tbl_user where id_account=$id");
            $show = mysqli_fetch_assoc($data);
            ?>
            <div class="input-box">
              <label>Full Name</label>
              <input type="text" name="nama" value="<?php echo $show['nama']; ?>" placeholder="Enter full name" required />

            </div>
            <div class="input-box">
              <label>Phone Number</label>
              <input
                type="number" value="<?php echo $show['telepon']; ?>" name="telepon"

                placeholder="Enter phone number"
                required />
            </div>
            <div class="column">
              <div class="input-box">
                <label>Birth Place</label>
                <input type="text" value="<?php echo $show['tempatlahir']; ?>" name="tempat" placeholder="Enter birth date"
                  required />

              </div>
              <div class="input-box">
                <label>Birth Date</label>
                <input type="date" name="tgl" value="<?php echo $show['tgl_lahir']; ?>" placeholder="Enter birth date" required />

              </div>
            </div>
            <div class="gender-box">
              <h3>Gender</h3>
              <div class="gender-option">
                <div class="gender">
                  <input type="radio" id="check-male" <?php if ($show['jk'] == 'L') echo 'checked' ?> value="L" name="gender" checked />

                  <label for="check-male">male</label>
                </div>
                <div class="gender">
                  <input type="radio" id="check-female" <?php if ($show['jk'] == 'P') echo 'checked' ?> value="P" name="gender" />
                  <label for="check-female">Female</label>
                </div>
              </div>
            </div>
            <div class="input-box address">
              <label>Address</label>
              <input
                type="text" name="alamat" value="<?php echo $show['alamat']; ?>"

                placeholder="Enter street address"
                required />
            </div>
            <button type="submit" name="button">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="main.js"></script>
  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>