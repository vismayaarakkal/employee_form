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
    
  </head>

  <body>
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
          
            <a class="navbar-brand" href="">
              <b class="logo-icon ps-2">
               Employee Management
              </b>
            </a>
          
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)" ><i class="ti-menu ti-close"></i></a>
          </div>
         
        </nav>
      </header>
     
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../list" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Employee List</span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../create" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">New Employee</span></a
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
                <form action = "{{ url('update/'.$employee->id) }}" enctype="multipart/form-data" method = "post" id="update-employee" class="form-horizontal">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <div class="card-body">
                    <h4 class="card-title">New Employee</h4>
                    <div class="form-group row">
                      <label class="col-sm-3 text-end control-label col-form-label">Name</label>
                      <div class="col-sm-9">
                        <input type='text' name='emp_name' class="form-control" value="{{$employee->name}}" required/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 text-end control-label col-form-label">Email</label>
                      <div class="col-sm-9">
                        <!-- <input type="email" class="form-control" name="emp_email" id="lname" placeholder="Email Here" required /> -->
                        <input type='email' name='emp_email' id="email" class="form-control" value="{{$employee->email}}" required/>
                      </div>
                    </div>
                    
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Designation</label>
                    <div class="col-md-9">
                      <select name="emp_designation" id="designation" class="select2 form-select shadow-none" style="width: 100%; height: 36px" required >
                        @foreach ($designations as $designation) 
                          <option {{ (($employee->designation == $designation->d_id) ) ? 'selected' : null }} value="{{$designation->d_id}}">{{$designation->d_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">File Upload</label>
                    <div class="col-md-9">
                      <div class="custom-file">
                        
                        <input type='file' name='photo' class="custom-file-input"/>
                        <label class="custom-file-label" for="validatedCustomFile" >Choose file...</label>
                        @if($employee->photo != '')
                          <image src="{{ url('../images/'.$employee->photo) }}" style="width: 180px; height: 150px;">
                        @endif
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="border-top">
                  <div class="card-body">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
                </form>
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
 
<script>
  $(".select2").select2();
</script>
  </body>
</html>
