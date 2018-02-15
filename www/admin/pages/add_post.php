<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sac Pool Pros | Add New Post</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	  <script>
  	tinymce.init({
  		selector: 'textarea',  // change this value according to your HTML
  		menubar: false, 
  		plugins: ['advlist autolink lists link image charmap print preview anchor',
    			'searchreplace visualblocks code fullscreen',
    			'insertdatetime media table contextmenu paste code' ],
  		toolbar: 'undo redo | insert | styleselect | bold italic | bullist numlist outdent indent | code',
 		content_css: '//www.tinymce.com/css/codepen.min.css'
	});
	</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         <?php
         include('../inc/nav.php')
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <div class="lead">Sac Pool Pros new post page</div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-12">
								<form method="post" action="../inc/processor.php" enctype="multipart/form-data">
									<div class="form-group col-md-10">
									<label for="post_title">Post Title:</label>
										<input type="text" class="form-control" name="post_title" id="post_title" placeholder="Enter Post Title">
									</div>
									<div class="form-group col-md-8">
										<textarea class="form-control" placeholder="Enter contet text" name="content" id="content"></textarea>
										<hr>
										<input type="text" id="description" name="description" class="form-control" placeholder="Blog Description">
									</div>
									<div class="col-md-4 form-group">
										<strong>Feature image</strong>
										<input type="file" name="image" id="image">
									</div>
									<div class="clearfix"></div>
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
									
								</form>
                            </div>

                          </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
