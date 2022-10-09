<?php 
  session_start();
  require '../views/header.php'   
?>

<body>
 <div>  <!-- category wrapper -->
    <aside>
      <div id="logo"><a href="#"><img src="../../img/logo.svg" alt="expense tracker logo"></a></div>
      <nav>
        <ul>
          <li><a href="../../index.php" class="side-menu-active"><i class="me-3 bi bi-house-door"></i>Dashboard</a></li>
          <li><a class="active" href="./category.php"><i class="me-3 bi bi-list-task"></i>Categories</a></li>
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
              <li class="" aria-current="page">Categories</li>
            </ol>
          </nav>
        </div>
        
        <div class="rightContainer">
          <div><input type="search" placeholder="Search..."><i class="bi bi-search"></i></div>
          <div><a href="#"><i class="bi bi-bell"><div></div></i></a></div>
          <div><a href="#"><img src="../../img/erin-lindford.jpg" alt="user profile"></a></div>
        </div>
      </header>

      <section> <!-- table wrapper -->
        <div class="summaryTitle">
          <h2>Categories</h2>
          <!-- session message output -->
          <?php if(isset($_SESSION['message'])) : ?>
            <div class="alert alert-success p-2">
              <h6>
                <?= $_SESSION['message'] ?>
              </h6>
            </div>
          <?php endif ?>
        </div>

        <div class="tableFirstRow my-4 pt-1"> <!-- Button trigger modal -->
          <div class="primaryBtn">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="bi bi-plus-square pe-2"></i> Add Category
            </button>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- form -->
                <form action="./../controllers/processing/category_processing.php" method="post" class="w-100">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Category</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="d-flex flex-column mt-3 mb-4 w-100">
                      
                      <!-- label -->
                      <label for="exampleFormControlInput1" class="form-label">Category Name:</label>

                      <div class="input-group">
                        <span class="input-group-text" id="addon-wrapping">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                          </svg>
                        </span>

                        <!-- input -->
                        <input type="text" name="categoryName" class="form-control py-2" placeholder="Add category name">
                      
                      </div>
                    </div>
                  </div> <!-- modal body end -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="addNewCategoryBtn" class="btn btn-success"><i class="bi bi-plus-square pe-2"></i>Add category</button>
                  </div>
                </form> <!-- end of form -->

              </div>
            </div>
          </div> <!-- end of modal -->

          <div class="pagination"> <!-- pagination -->
            Showing 1 to 10 of 150 entries
          </div>
          
          <!-- search input -->
          <div class="searchInput"><input type="search" placeholder="Search..."><i class="bi bi-search"></i></div>

        </div> <!-- tableFirstRow -->
        
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Category Name</th>
              <th scope="col">Date Created</th>
              <th scope="col">Active</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">11</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">12</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">13</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">14</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">15</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>

  <!-- JS scripts  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>