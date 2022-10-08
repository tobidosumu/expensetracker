<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./styles/css/general.css">
    <link rel="stylesheet" href="./styles/css/expense.css">
  </head>
<body>

 <div>  <!-- wrapper -->
    <aside>
      <div id="logo"><a href="#"><img src="./img/logo.svg" alt="expense tracker logo"></a></div>
      <nav>
        <ul>
          <li><a href="./index.php" class="side-menu-active"><i class="me-3 bi bi-house-door"></i>Dashboard</a></li>
          <li><a href="./category.php"><i class="me-3 bi bi-list-task"></i>Categories</a></li>
          <li><a class="active" href="./expense.php"><i class="me-3 bi bi-activity"></i>Expenses</a></li>
        </ul>
      </nav>
    </aside>

    <main>
      <header> <!-- header -->
        <div class="letfContainer">
          <nav class="-intro-x mr-auto hidden sm:flex">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Application</a></li>
              <li class="" aria-current="page">Expenses</li>
            </ol>
          </nav>
        </div>
        
        <div class="rightContainer">
          <div><input type="search" placeholder="Search..."><i class="bi bi-search"></i></div>
          <div><a href="#"><i class="bi bi-bell"><div></div></i></a></div>
          <div><a href="#"><img src="./img/erin-lindford.jpg" alt="user profile"></a></div>
        </div>
      </header>

      <section> <!-- table wrapper -->
        <div class="summaryTitle"><h2>Expenses</h2></div>

        <div class="tableFirstRow my-4"> <!-- Button trigger modal -->
          <div class="primaryBtn">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add New Expense
            </button>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Expense</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex flex-column my-4">

                  <div class="input-group mb-3"> <!-- first input -->
                    <span class="input-group-text" id="addon-wrapping">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
                      </svg>
                    </span>
                    <input type="text" class="form-control py-2" placeholder="Add expense name" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  </div>

                  <div class="input-group mb-2"> <!-- second input -->
                    <span class="input-group-text" id="addon-wrapping">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="16px" height="16px" viewBox="0 0 84.992 84.992" style="enable-background:new 0 0 84.992 84.992;"
                      xml:space="preserve">
                      <g>
                        <g>
                          <g>
                            <path d="M63.611,77.556c-1.207,0-2.303-0.176-3.256-0.52c-0.947-0.338-1.854-0.892-2.691-1.641
                              c-0.842-0.751-1.645-1.65-2.377-2.674c-0.746-1.044-1.492-2.107-2.213-3.16l-9.885-15.154H26.451v15.539
                              c0,2.52-0.584,4.438-1.734,5.709c-1.162,1.278-2.611,1.899-4.428,1.899c-1.881,0-3.342-0.628-4.469-1.919
                              c-1.125-1.283-1.695-3.198-1.695-5.689V54.407h-9.58C2.039,54.407,0,52.368,0,49.862s2.039-4.545,4.545-4.545h9.58v-7.757h-9.58
                              C2.039,37.561,0,35.522,0,33.017s2.039-4.545,4.545-4.545h9.58V17.146c0-2.189,0.238-3.909,0.707-5.11
                              c0.586-1.39,1.508-2.464,2.834-3.322c1.326-0.86,2.719-1.278,4.258-1.278c1.189,0,2.221,0.194,3.061,0.579
                              c0.863,0.394,1.594,0.906,2.236,1.565c0.654,0.669,1.33,1.547,2.012,2.606c0.701,1.09,1.424,2.225,2.191,3.437l8.492,12.849
                              h18.746V15.046c0-2.554,0.547-4.484,1.625-5.739c1.082-1.259,2.506-1.871,4.352-1.871c1.908,0,3.371,0.613,4.469,1.874
                              c1.093,1.254,1.646,3.185,1.646,5.736v13.426h9.693c2.506,0,4.545,2.039,4.545,4.545s-2.039,4.544-4.545,4.544h-9.693v7.758
                              h9.693c2.506,0,4.545,2.038,4.545,4.545c0,2.506-2.039,4.543-4.545,4.543h-9.693v14.467
                              C70.754,74.716,68.418,77.556,63.611,77.556z M24.951,51.407h19.051c0.506,0,0.979,0.256,1.256,0.68l10.312,15.809
                              c0.688,1.01,1.426,2.055,2.157,3.081c0.604,0.841,1.256,1.575,1.938,2.183c0.549,0.492,1.121,0.846,1.707,1.055
                              c0.629,0.229,1.381,0.343,2.24,0.343c1.747,0,4.143,0,4.143-5.683V52.907c0-0.828,0.673-1.5,1.5-1.5h11.193
                              c0.853,0,1.545-0.693,1.545-1.545s-0.692-1.545-1.545-1.545H69.254c-0.828,0-1.5-0.672-1.5-1.5V36.061c0-0.828,0.672-1.5,1.5-1.5
                              h11.193c0.852,0,1.545-0.692,1.545-1.544s-0.693-1.545-1.545-1.545H69.254c-0.828,0-1.5-0.672-1.5-1.5V15.046
                              c0-2.25-0.494-3.29-0.91-3.767c-0.363-0.418-0.908-0.844-2.205-0.844c-0.971,0-1.572,0.239-2.076,0.826
                              c-0.409,0.479-0.899,1.523-0.899,3.784v14.926c0,0.828-0.672,1.5-1.5,1.5H39.109c-0.504,0-0.975-0.253-1.252-0.673l-8.951-13.545
                              c-0.781-1.23-1.5-2.359-2.197-3.443c-0.572-0.891-1.123-1.609-1.637-2.135c-0.379-0.391-0.814-0.694-1.334-0.932
                              c-0.439-0.201-1.068-0.308-1.814-0.308c-0.955,0-1.789,0.253-2.627,0.796c-0.816,0.529-1.352,1.144-1.686,1.934
                              c-0.172,0.44-0.486,1.602-0.486,3.981v12.825c0,0.828-0.672,1.5-1.5,1.5H4.545C3.693,31.472,3,32.165,3,33.017
                              s0.693,1.544,1.545,1.544h11.08c0.828,0,1.5,0.672,1.5,1.5v10.757c0,0.828-0.672,1.5-1.5,1.5H4.545
                              C3.693,48.317,3,49.011,3,49.862s0.693,1.545,1.545,1.545h11.08c0.828,0,1.5,0.672,1.5,1.5v17.039
                              c0,1.719,0.33,3.004,0.953,3.715c0.547,0.627,1.207,0.895,2.211,0.895c0.963,0,1.621-0.273,2.205-0.917
                              c0.625-0.688,0.957-1.966,0.957-3.69V52.907C23.451,52.079,24.123,51.407,24.951,51.407z M60.162,63.331
                              c-0.494,0-0.969-0.246-1.252-0.674l-5.896-8.924c-0.303-0.461-0.33-1.052-0.067-1.537c0.262-0.486,0.771-0.789,1.319-0.789h5.896
                              c0.828,0,1.5,0.672,1.5,1.5v8.924c0,0.662-0.436,1.246-1.068,1.437C60.451,63.31,60.305,63.331,60.162,63.331z M57.055,54.407
                              l1.607,2.432v-2.432H57.055z M60.162,48.317h-9.92c-0.504,0-0.975-0.253-1.252-0.673l-7.107-10.757
                              c-0.305-0.461-0.332-1.052-0.07-1.538c0.262-0.485,0.77-0.789,1.32-0.789h17.029c0.828,0,1.5,0.672,1.5,1.5v10.757
                              C61.662,47.646,60.99,48.317,60.162,48.317z M51.049,45.317h7.613v-7.757h-12.74L51.049,45.317z M40.029,48.317H24.951
                              c-0.828,0-1.5-0.672-1.5-1.5V36.061c0-0.828,0.672-1.5,1.5-1.5h8.063c0.506,0,0.979,0.256,1.256,0.681l7.016,10.757
                              c0.301,0.461,0.324,1.049,0.063,1.533C41.086,48.017,40.58,48.317,40.029,48.317z M26.451,45.317H37.26l-5.059-7.757h-5.75
                              V45.317z M29.041,31.473h-4.09c-0.828,0-1.5-0.672-1.5-1.5v-6.271c0-0.664,0.436-1.249,1.072-1.438
                              c0.635-0.188,1.322,0.062,1.684,0.618l4.09,6.271c0.301,0.461,0.326,1.05,0.064,1.534C30.098,31.17,29.592,31.473,29.041,31.473z
                            "/>
                          </g>
                        </g>
                      </g>
                      </svg>
                    </span>
                    <input type="text" class="form-control py-2" placeholder="Add expense amount" aria-label="Example text with button addon" aria-describedby="button-addon1">
                  </div>

                  <div class="input-group mt-2"> <!-- third input -->
                    <label class="input-group-text" for="inputGroupSelect01">                      
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
                        <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
                        <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
                      </svg></label>
                    <select class="form-select py-2" id="inputGroupSelect01">
                      <option selected>Choose expense category</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>

                  <div class="form-floating mt-3">
                    <span class="input-group-text rounded-0 rounded-start border-end-0" id="addon-wrapping">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                      </svg>
                    </span>
                    <textarea class="form-control rounded-0 rounded-end" placeholder="Expense Narration" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2" class="ms-2 ps-5">Add expense narration</label>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success">Save changes</button>
                </div>
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
              <th scope="col">Expense Narration</th>
              <th scope="col">Category</th>
              <th scope="col">Amount</th>
              <th scope="col">Date of Expenditure</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
              <td>@twitter</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">11</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">12</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">13</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">14</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">15</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
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