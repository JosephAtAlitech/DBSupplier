<?php 
    $conPrefix = '';
    include 'includes/session.php'; 
    include 'includes/header.php'; 
?>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<link rel="stylesheet" href="dist/css/select2.min.css" />
<div class="wrapper">
  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Expense Type</h1>
      <ol class="breadcrumb">
        <li><a href="user-home.php"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Expenses Type</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
	  <link rel="stylesheet" href="css/buttons.dataTables.min.css"/>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
			   <div class="col-xs-6">
                    <?php
                        if(strtolower($_SESSION['userType']) == "admin coordinator" || strtolower($_SESSION['userType']) == "admin support" || strtolower($_SESSION['userType']) == "admin support plus" || strtolower($_SESSION['userType']) == 'super admin'){					
                    ?>
					<a href="#addExpenseType" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Add Expense Type</a>
					<?php
                        }
					?>
			  </div>
			  <div class="col-xs-6">
				<div id='divMsg' class='alert alert-success alert-dismissible successMessage'></div>
			</div>
            </div>
            <div class="box-body">
                <input type="hidden" id="type" name="type" value="<?php echo $type;?>" />
                <table id="manageExpanseTypeTable" class="table table-bordered" style="width:100%;">
                <thead>
                    <th width="20%">SN</th>
                    <th>Expense Type</th>
                    <th>Status</th>
                    <th width="20%">Action</th>
                </thead>
                </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
    
  </div>
   
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/expenseType-modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script src="dist/js/select2.min.js"></script>
<script src="includes/js/manageExpenseType.js"></script> 

</body>
</html>