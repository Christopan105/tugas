<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatitble" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chart</title>
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
        <div class="recentOrders">
          <div class="cardHeader">
            <h2>Data Statitik</h2>
          </div>
          <canvas id="barChart"></canvas>
        </div>
        <div class="recentCustomer">
          <div class="cardHeader">
            <h2>Data Statitik</h2>
          </div>
          <canvas id="doughnut"></canvas>
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

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="barChart.js"></script>
  <script src="doughnut.js"></script>
</body>

</html>