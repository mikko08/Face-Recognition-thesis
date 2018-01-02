<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url('Dashboard'); ?>">Face Recognition</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('Dashboard'); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url('Camera'); ?>">
            <i class="fa fa-fw fa-camera"></i>
            <span class="nav-link-text">Camera</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url('Charts'); ?>">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url('Students'); ?>">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Students</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION-->

<div class="content-wrapper">
  <div class="container-fluid">
  </br></br></br>
   <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Data Table Example</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Year & Section</th>
                <th>Age</th>
                <th>Present</tbh>
                <th>Absent</th>
                <th>School Year</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Kaye Nepomuceno</td>
                <td>4R1</td>
                <td>16</td>
                <td>1</td>
                <td>1000</td>
                <td>2017-2018</td>
              </tr>
              <tr>
                <td>Clyde Mikko</td>
                <td>4R1</td>
                <td>17</td>
                <td>2</td>
                <td>2000</td>
                <td>2017-2018</td>
              </tr>
              <tr>
                <td>Manile Lincaro</td>
                <td>4R1</td>
                <td>18</td>
                <td>3</td>
                <td>3000</td>
                <td>2017-2018</td>
              </tr>
              <tr>
                <td>Romel Albia</td>
                <td>4R1</td>
                <td>20</td>
                <td>4</td>
                <td>4000</td>
                <td>2017-2018</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
</div>
