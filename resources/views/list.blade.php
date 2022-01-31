<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <meta name="robots" content="noindex,nofollow" />
    <title>Employee Management</title>
   
    <link rel="stylesheet" type="text/css" href="/theme/css/select2.min.css" />
    <link href="/theme/css/style.min.css" rel="stylesheet" />
    <link href="/theme/css/dataTables.bootstrap4.css" rel="stylesheet"/>
    
  </head>

  <body>
  
    <div
      id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
      data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full"
    >
      
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
          
            <a class="navbar-brand" href="index">
              <b class="logo-icon ps-2">
               Employee Management
              </b>
            </a>
          
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
         
        </nav>
      </header>
     
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="list"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Employee List</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="create"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">New Employee</span></a
                >
              </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
    
      <div class="page-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="table-responsive">
                    <table class="table"  id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Designtion</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee_data as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->d_name }}</td>
                            <td>{{ $data->photo }}</td>
                            <td><a href="{{ route('edit', ['id' => $data->id]) }}" class="label label-warning">Update</a></td>
                            <td><a href="{{ route('delete', $data->id) }}" class="label label-danger" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
       
        
      </div>
    </div>
   
<script type="text/javascript" src="/theme/js/custom.min.css"></script>
<script type="text/javascript" src="/theme/js/custom.css"></script>
<script type="text/javascript" src="/theme/js/jquery.min.css"></script>
<script type="text/javascript" src="/theme/js/select2.min.css"></script>
<script type="text/javascript" src="/theme/js/bootstrap.bundle.min.css"></script>
<script src="/theme/css/datatables.min.js"></script>

<script>
  $(".select2").select2();
</script>
  </body>
</html>
