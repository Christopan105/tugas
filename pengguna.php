<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatitble" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Table
  </title>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="admin.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />


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
        <div class="recentOrders">
          <!-- ======== detail Table ========= -->
          <link rel="stylesheet"
            href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
          <div class="detailTable">

            <div class="recentTable">
              <div class="titleTable">
                <h2>Responsive Table</h2>
                <a href="form.php" class="btn">Add New</a>
              </div>
              <table id="myTable">
                <thead>
                  <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Name</th>
                    <th style="text-align:center;">Telepon</th>
                    <th style="text-align:center;">Alamat</th>
                    <th style="text-align:center;">Option</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "koneksi.php";
                  $no = 1;
                  $data = mysqli_query($conn, "SELECT * FROM tbl_user");
                  while ($show = mysqli_fetch_array($data)) {
                    echo "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $show["nama"] . "</td>
                    <td>" . $show["telepon"] . "</td>
                    <td>" . $show["alamat"] . "</td>
                    <td>
                    <a href='?page=edit_data&id=" . $show['id_account'] . "'class='btn-edit'><ion-icon name='create-outline'></ion-icon></a>
                    |
                    <a href='hapus_data.php?id=" . $show['id_account'] . "'
                    onclick='return confirm(\"Are you sure you want to
                    delete this record?\")'

                    class='btn-delete'
                    ><ion-icon name='trash-outline'></ion-icon
                    ></a>
                    </td>
                    </tr>
                    ";
                  } ?>
                </tbody>


            </div>
          </div>

          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Status</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "koneksi.php";
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM account");
            while ($show = mysqli_fetch_array($data)) {
              echo "<tr>
                      <td>" . $no++ . "</td>
                      <td>" . $show["email"] . "</td>
                      <td>" . $show["akses"] . "</td>
                      <td>
                      <a href='#' class='btn-edit'
                      ><ion-icon name='create-outline'></ion-icon
                      ></a>
                      |
                      <a href='#' class='btn-delete'
                      ><ion-icon name='trash-outline'></ion-icon
                      ></a>
                      </td>
                      </tr>
                      ";
            }
            ?>
          </tbody>
          </table>

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
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="jquery-3.7.5.js"></script>
    <script src="jquery.js"></script>
    <script
      src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>
</body>

</html>
<?php

if (isset($_GET['page'])) {
  $page = $_GET['page'];
  if ($page == 'dashboard') {
    include "dashboard.php";
  } elseif ($page == 'form') {
    include 'form.php';
  } elseif ($page == 'tabelbiasa') {
    include "tabel.php";
  }
} else {
  include "dashboard.php";
}
?>