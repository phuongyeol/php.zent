<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ZENT GROUP</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->


    <!-- MetisMenu CSS -->
    <link href="public/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/vendor/datatables/css/dataTables.bootstrap.min.css">
    <script type="" src="public/vendor/datatables/js/datatables.min.js"></script>

    <script src="public/vendor/datatables/js/jquery.dataTables.min.js"></script>

    <script src="public/vendor/datatables/js/dataTables.bootstrap.min.js"></script>
    


    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            // $('#user_del').click(function(){
            //     swal({
            //           title: "Are you sure?",
            //           text: "Once deleted, you will not be able to recover this imaginary file!",
            //           icon: "warning",
            //           buttons: true,
            //           dangerMode: true,
            //       })
            //     .then((willDelete) => {
            //         if (willDelete) {
            //             swal("Poof! Your imaginary file has been deleted!", {
            //               icon: "success",
            //             });
            //         } else {
            //             swal("Your imaginary file is safe!");
            //         }
            //     });
            // });
            
        } );
        $(function(){ 
            $(".delete").click(function(e){ 
                e.preventDefault(); 
                var url = $(this).attr("href"); 
                if (confirm("Bạn có muốn xóa ?")) { window.location.href=url; } 
            }); 
        });
    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?mod=home">ZENT GROUP</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="?mod=home"><i class="fa fa-dashboard fa-fw"></i> Zent Corp</a>
                        </li>
                        
                        <li>
                            <a href="?mod=users"><i class="fa fa-user fa-fw"></i> User Manager</a>
                        </li>
                        <li>
                            <a href="?mod=categories"><i class="fa fa-sitemap fa-fw"></i> Category Manager</a>
                        </li>
                        <li>
                            <a href="?mod=products"><i class="fa fa-table fa-fw"></i> Product Manager</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>