<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="bower_components/admin-lte/dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="col-xs-12">
      <div class="login-logo">
        <a href="../../index2.html"><b>Link</b>Checker</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Paste Your Link List Here</p>
        <form id="form1" method="post">
          <div class="form-group">
            <label></label>
            <textarea class="form-control" rows="5" placeholder="Enter ...
Enter ..."></textarea>
          </div>
          <div class="row">
              <button type="submit" class="btn btn-primary btn-block btn-flat btn-lg">Sign In</button>
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Hover Data Table</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="result-table" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Link</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ID</td>
                <td>Link</td>
                <td>Status</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Link</th>
                <th>Status</th>
              </tr>
            </tfoot>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.login-box -->
    <!-- jQuery 2.1.4 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="link-checker.js"></script>
  </body>
</html>
