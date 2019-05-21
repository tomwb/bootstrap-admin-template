<?php include '../elements/head.php'; ?>
<?php include '../elements/header.php'; ?>
<?php include '../elements/menu.php'; ?>

<section class="p-3">
  <?php include '../elements/breadcrumb.php'; ?>

  <div class="row">
    <div class="col-12 col-lg-6">
      <div class="card mb-3">
        <div class="card-header">
          Table
        </div>
        <div class="card-body">
         
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <div class="card mb-3">
        <div class="card-header">
          Styles
        </div>
        <div class="card-body">
          
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-12">
      <div class="card mb-3">
        <div class="card-header">
          List Page
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-lg-4 mb-3">
              <a href="#" class="btn btn-primary">Add User</a>
            </div>
            <div class="col-12 col-lg-8 mb-3">
              <form class="form-inline d-flex justify-content-end">
                <input type="text" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-primary ml-2">Submit</button>
              </form>

            </div>
          </div>

          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
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

</section>

<?php include '../elements/footer.php'; ?>