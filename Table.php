
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatitble" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><Table></Table></title>
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
              <span class="icon"
                ><ion-icon name="school-outline"></ion-icon
              ></span>
              <span class="title">University</span>
            </a>
          </li>
          <li>
            <a href="dashboard.php">
              <span class="icon"
                ><ion-icon name="home-outline"></ion-icon
              ></span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="form.php">
            <span class="icon"
                ><ion-icon name="people-outline"></ion-icon
              ></span>
              <span class="title">Form</span>
            </a>
          </li>
          <li>
            <a href="Table.php">
              <span class="icon"
                ><ion-icon name="grid-outline"></ion-icon
              ></span>
              <span class="title">Table</span>
            </a>
          </li>
          <li>
            <a href="Chart.php">
              <span class="icon"
                ><ion-icon name="bar-chart-outline"></ion-icon
              ></span>
              <span class="title">Chart</span>
            </a>
          </li>
          <li>
            <a href="Setting.php">
              <span class="icon"
                ><ion-icon name="settings-outline"></ion-icon
              ></span>
              <span class="title">Setting</span>
            </a>
          </li>
          <li>
            <a href="Password.php">
              <span class="icon"
                ><ion-icon name="lock-closed-outline"></ion-icon
              ></span>
              <span class="title">Password</span>
            </a>
          </li>
          <li>
            <a href="Logout.php">
              <span class="icon"
                ><ion-icon name="log-out-outline"></ion-icon
              ></span>
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
            <div class="detailTable">
              <div class="recentTable">
                <div class="titleTable">
                  <h2>Responsive Table</h2>
                  <a href="#" class="btn">Add New</a>
                </div>
                <table>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone number</th>
                      <th>Status</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><img src="img/avatar1.jpg" alt="avatar" /></td>
                      <td>Albert</td>
                      <td>albert@gmail.com</td>
                      <td>+62 8898 9979</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><img src="img/avatar2.jpg" alt="avatar" /></td>
                      <td>Jhon</td>
                      <td>jhon@gmail.com</td>
                      <td>+62 8898 5566</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><img src="img/avatar3.jpg" alt="avatar" /></td>
                      <td>Steve</td>
                      <td>steve@gmail.com</td>
                      <td>+62 8896 4454</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><img src="img/avatar1.jpg" alt="avatar" /></td>
                      <td>Adam</td>
                      <td>adam@gmail.com</td>
                      <td>+62 8898 7777</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><img src="img/avatar2.jpg" alt="avatar" /></td>
                      <td>William</td>
                      <td>william@gmail.com</td>
                      <td>+62 8898 1232</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td><img src="img/avatar2.jpg" alt="avatar" /></td>
                      <td>Billy</td>
                      <td>billy@gmail.com</td>
                      <td>+62 8898 2379</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td><img src="img/avatar3.jpg" alt="avatar" /></td>
                      <td>Ana</td>
                      <td>ana@gmail.com</td>
                      <td>+62 8898 2222</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td><img src="img/avatar1.jpg" alt="avatar" /></td>
                      <td>Stepen</td>
                      <td>stepen@gmail.com</td>
                      <td>+62 8898 9979</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td><img src="img/avatar2.jpg" alt="avatar" /></td>
                      <td>Clark</td>
                      <td>clark@gmail.com</td>
                      <td>+62 8898 9979</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td><img src="avatar1.jpg" alt="avatar" /></td>
                      <td>Shawn</td>
                      <td>shawn@gmail.com</td>
                      <td>+62 8898 4345</td>
                      <td>Active</td>
                      <td>
                        <a href="#" class="btn-edit"
                          ><ion-icon name="create-outline"></ion-icon
                        ></a>
                        |
                        <a href="#" class="btn-delete"
                          ><ion-icon name="trash-outline"></ion-icon
                        ></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
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
