<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <!-- CSS scripts  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/css/general.css">
    <link rel="stylesheet" href="./styles/css/index.css">
  </head>
<body>

 <div>  <!-- wrapper -->
    <aside>
      <div id="logo"><a href="#"><img src="./img/logo.svg" alt="expense tracker logo"></a></div>
      <nav>
        <ul>
          <li><a class="active" href="./index.php"><i class="me-3 bi bi-house-door"></i>Dashboard</a></li>
          <li><a href="./category.php"><i class="me-3 bi bi-list-task"></i>Categories</a></li>
          <li><a href="./expense.php"><i class="me-3 bi bi-activity"></i>Expenses</a></li>
        </ul>
      </nav>
    </aside>

    <main>
      <header> <!-- header -->
        <div class="letfContainer">
          <nav class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Application</a></li>
              <li aria-current="page">Dashboard</li>
            </ol>
          </nav>
        </div>

        <div class="rightContainer">
          <div><input type="search" placeholder="Search..."><i class="bi bi-search"></i></div>
          <div><a href="#"><i class="bi bi-bell"><div></div></i></a></div>
          <div><a href="#"><img src="./img/erin-lindford.jpg" alt="user profile"></a></div>
        </div>
      </header>

      <section> <!-- summary wrapper -->
        <div class="summaryTitle"><h2>General Report</h2></div>
        <div class="summaryCardsWrapper">
          <div class="summaryCard"> <!-- Categories card start -->
            <a href="#">
              <div class="topRow">
                <div><i class="me-3 bi bi-list-task"></i></div>
                <div class="percentWrapper">
                  <ul>
                    <li>33%</li>
                    <li><i class="bi bi-chevron-up"></i></li>
                  </ul>
                </div>
              </div>
              <div class="lowerRow">
                <h1>4742</h1>
                <h3>Categories</h3>
              </div>
              <div class="foregroundDesign"></div> <!-- design background -->
            </a>
          </div> <!-- Categories card end -->
          <div class="summaryCard"> <!-- Expenses sum card start -->
            <a href="#">
              <div class="topRow">
                <div><i class="me-3 bi bi-activity"></i></div>
                <div class="percentWrapper">
                  <ul class="bg-danger">
                    <li>2%</li>
                    <li><i class="bi bi-chevron-down"></i></li>
                  </ul>
                </div>
              </div>
              <div class="lowerRow">
                <h1>N74,000</h1>
                <h3>Total Expenses</h3>
              </div>
              <div class="foregroundDesign"></div> <!-- design background -->
            </a>
          </div> <!-- Expenses sum card end -->
          <div class="summaryCard"> <!-- Top Expense card start -->
            <a href="#">
              <div class="topRow">
                <div><i class="bi bi-shift"></i></div>
                <div class="percentWrapper">
                  <ul>
                    <li>22%</li>
                    <li><i class="bi bi-chevron-up"></i></li>
                  </ul>
                </div>
              </div>
              <div class="lowerRow">
                <h1>7</h1>
                <h3>Top Expenses</h3>
              </div>
              <div class="foregroundDesign"></div> <!-- design background -->
            </a>
          </div> <!-- Top Expenses sum card end -->
          <div class="summaryCard"> <!-- Recurrent Expenses card start -->
            <a href="#">
              <div class="topRow">
                <div><i class="bi bi-repeat"></i></div>
                <div class="percentWrapper">
                  <ul>
                    <li>12%</li>
                    <li><i class="bi bi-chevron-up"></i></li>
                  </ul>
                </div>
              </div>
              <div class="lowerRow">
                <h1>12</h1>
                <h3>Recurrent Expenses</h3>
              </div>
            </a>
          </div> <!-- Recurrent Expenses sum card end -->
        </div>

        <div class="reportsWrapper">
          <h4>...features coming soon</h4>
        </div>
      </section>
    </main>
  </div>

    <!-- JS scripts  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../public/js/navSideTab.js"></script>
</body>
</html>