<?php include '../elements/head.php'; ?>
<?php include '../elements/header.php'; ?>
<?php include '../elements/menu.php'; ?>

<section class="p-3">
  <?php include '../elements/breadcrumb.php'; ?>

  <div class="row">
    <div class="col-12">
      <div class="card mb-3">
        <div class="card-header">
          List Page
        </div>
        <div class="card-body">

          <div class="row">
            <div class="col-12 col-lg-4 mb-5">
              <a href="#" class="btn btn-primary">Add User</a>
            </div>
            <div class="col-12 col-lg-8 mb-5">
              <form class="form-inline d-flex justify-content-end">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search...">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                </div>
              </form>

            </div>
          </div>

          <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col" width="50">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col" width="100">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>
                  <a href="mailto:otto@gmail.com">otto@gmail.com</a>
                </td>
                <td>
                  <span class="badge badge-pill badge-success">Success</span>
                </td>
                <td>
                  <a href="#" class="btn btn-sm btn-circle btn-outline-dark">
                    <i class="fas fa-pen"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-circle btn-outline-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td><a href="mailto:thornton@gmail.com">thornton@gmail.com</a></td>
                <td>
                  <span class="badge badge-pill badge-danger">Danger</span>
                </td>
                <td>
                  <a href="#" class="btn btn-sm btn-circle btn-outline-dark">
                    <i class="fas fa-pen"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-circle btn-outline-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td><a href="mailto:thebird@gmail.com">thebird@gmail.com</a></td>
                <td>
                  <span class="badge badge-pill badge-warning">Warning</span>
                </td>
                <td>
                  <a href="#" class="btn btn-sm btn-circle btn-outline-dark">
                    <i class="fas fa-pen"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-circle btn-outline-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          <?php include '../elements/pagination.php'; ?>
        </div>
      </div>
    </div>
  </div>

   <div class="row">
    <div class="col-12">
      <div class="card mb-3">
        <div class="card-header">
          Dark
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered table-hover table-dark">
            <caption>table-dark</caption>
            <thead class="thead-dark">
              <tr>
                <th scope="col" width="50">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col" width="100">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>
                  <a href="mailto:otto@gmail.com">otto@gmail.com</a>
                </td>
                <td>
                  <a href="#" class="btn btn-sm btn-circle btn-light">
                    <i class="fas fa-pen"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-circle btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td><a href="mailto:thornton@gmail.com">thornton@gmail.com</a></td>
                <td>
                  <a href="#" class="btn btn-sm btn-circle btn-light">
                    <i class="fas fa-pen"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-circle btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td><a href="mailto:thebird@gmail.com">thebird@gmail.com</a></td>
                <td>
                  <a href="#" class="btn btn-sm btn-circle btn-light">
                    <i class="fas fa-pen"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-circle btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  

</section>

<?php include '../elements/footer.php'; ?>