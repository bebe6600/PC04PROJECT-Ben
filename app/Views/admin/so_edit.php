<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    .bi {
      display: inline-block;
      width: 1rem;
      height: 1rem;
    }

    /*
 * Sidebar
 */

    @media (min-width: 768px) {
      .sidebar .offcanvas-lg {
        position: -webkit-sticky;
        position: sticky;
        top: 48px;
      }

      .navbar-search {
        display: block;
      }
    }

    .sidebar .nav-link {
      font-size: .875rem;
      font-weight: 500;
    }

    .sidebar .nav-link.active {
      color: #2470dc;
    }

    .sidebar-heading {
      font-size: .75rem;
    }

    /*
 * Navbar
 */

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .form-control {
      padding: .75rem 1rem;
    }
  </style>
</head>

<body>
  <<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Welcome <?= $name ?></a>

    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
          <svg class="bi">
            <use xlink:href="#search" />
          </svg>
        </button>
      </li>
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="bi">
            <use xlink:href="#list" />
          </svg>
        </button>
      </li>
    </ul>

    <div id="navbarSearch" class="navbar-search w-100 collapse">
      <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
          <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="sidebarMenuLabel">Company Name</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="<?= base_url('dashboard') ?>">
                    <svg class="bi">
                      <use xlink:href="#house-fill" />
                    </svg>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url("product_manage") ?>">
                    <svg class="bi">
                      <use xlink:href="#file-earmark" />
                    </svg>
                    Product Manage
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url("user_manage") ?>">
                    <svg class="bi">
                      <use xlink:href="#cart" />
                    </svg>
                    User Manage
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url("so_manage") ?>">
                    <svg class="bi">
                      <use xlink:href="#people" />
                    </svg>
                    Order Manage
                  </a>
                </li>
              </ul>

              <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <svg class="bi"><use xlink:href="#plus-circle"/></svg>
            </a>
          </h6>
          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                Year-end sale
              </a>
            </li>
          </ul> -->

              <hr class="my-3">

              <ul class="nav flex-column mb-auto">
                <!-- <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                Settings
              </a>
            </li> -->
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="<?= base_url('logout') ?>">
                    <svg class="bi">
                      <use xlink:href="#door-closed" />
                    </svg>
                    Sign out
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Order</h1>
            <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div> -->
            <div><a class="btn btn-primary" href="<?= base_url('so_add') ?>">Add Order</a></div>
          </div>

          <main>
            <div class="container-fluid px-4">
              <h1 class="mt-4">Order Management</h1>
              <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Order Edit</li>
              </ol>
              <div class="card mb-4">

              </div>
              <div class="card mb-4"> 
                <div class="card-header">
                  <i class="fas fa-table me-1"></i>
                  Order Edit
                </div>
                <div class="card-body">
                  <form method="POST" action="<?= base_url('so_update') ?>" enctype="multipart/form-data">

                 
                      <input type="hidden" id="user_id" name="so_id" class="form-control"  value="<?=$id?>"/>
                


                    <div class="form-group">
                      <label for="user_id">User id</label>
                      <input id="user_id" name="user_id" class="form-control" value="<?=isset($sodata['user_id'])?$sodata['user_id']:''?>"/>
                    </div>


                    <div class="form-group">
                      <label for="firstname">Firstname</label>
                      <input id="firstname" name="firstname" class="form-control"  value="<?=isset($sodata['shipping_firstname'])?$sodata['shipping_firstname']:''?>"/>
                    </div>


                    <div class="form-group">
                      <label for="lastname">Lastname</label>
                      <input id="lastname" name="lastname" class="form-control" value="<?=isset($sodata['shipping_lastname'])?$sodata['shipping_lastname']:''?>" />
                    </div>

                    <div class="form-group">
                      <label for="Email">Email</label>
                      <input id="Email" name="Email" class="form-control" value="<?=isset($sodata['shipping_email'])?$sodata['shipping_email']:''?>"/>
                    </div>

                    <div>
                      <lable for="remarks">remarks</lable>
                      <textarea name="remarks" id="remarks" class="form-control">value="<?=isset($sodata['remarks'])?$sodata['remarks']:''?>"</textarea>
                    </div>

                    <div class="form-group">
                      <label for="total_amount">total_amount</label>
                      <input id="total_amount" name="total_amount" class="form-control" value="<?=isset($sodata['total_amount'])?$sodata['total_amount']:''?>"/>
                    </div>

                    <div class="form-group">
                      <label for="phone">phone</label>
                      <input id="phone" name="phone" class="form-control" value="<?=isset($sodata['shipping_phone'])?$sodata['shipping_phone']:''?>" />
                    </div>

                    <div class="form-group">
                      <label for="serial">serial</label>
                      <input id="serial" name="serial" class="form-control" value="<?=isset($sodata['serial'])?$sodata['serial']:''?>"/>
                    </div>

                    <div>
                      <lable for="country">Country</lable>
                      <select name="country" class="form-control" id="country" value="<?=isset($sodata['shipping_country'])?$sodata['shipping_country']:''?>">
                        <option>Malaysia</option>
                        <option>Singapore</option>
                        <option>Thailand</option>
                        <option>China</option>
                        <option>Indonesia</option>
                      </select>
                    </div>

                    <div>
                      <lable for="City">City</lable>
                      <select name="City" class="form-control" id="City" value="<?=isset($sodata['shipping_city'])?$sodata['shipping_city']:''?>">
                        <option>Johor</option>
                        <option>Melaka</option>
                        <option>Penang</option>
                        <option>Kuala Lumpur</option>
                        <option>Selangor</option>
                        <option>Sabah</option>
                        <option>Sarawak</option>
                      </select>
                    </div>

                    <div>
                      <lable for="Postcode">Postcode</lable>
                      <input name="Postcode" id="Postcode" class="form-control" value="<?=isset($sodata['shipping_zip'])?$sodata['shipping_zip']:''?>"/>
                    </div>
                </div>


                <div>
                  <lable for="Address1">Address 1</lable>
                  <input name="Address1" id="Address1" class="form-control" value="<?=isset($sodata['shipping_add1'])?$sodata['shipping_add1']:''?>"/>
                </div>
                <div>
                  <lable for="Address2">Address2</lable>
                  <input name="Address2" id="Address2" class="form-control" value="<?=isset($sodata['shipping_add2'])?$sodata['shipping_add2']:''?>"/>
                </div>



                <input class="btn btn-primary" type="submit" value="Submit" />

                </form>
              </div>
            </div>
      </div>
      </main>




      </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>