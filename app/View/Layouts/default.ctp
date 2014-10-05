<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <?php
    	echo $this->Html->css('bootstrap.min');
    	echo $this->Html->css('sb-admin');
    	echo $this->Html->css('plugins/morris');
    	echo $this->Html->css('../font-awesome-4.1.0/css/font-awesome.min');
    ?>


</head>

<body>

    <div id="wrapper">

     	<?php echo $this->element('top'); ?>
        <?php echo $this->element('navegation'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                	<?php echo $this->fetch('content'); ?>
                </div>
                <!-- /.row -->

      

                <div class="row">
       
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php echo $this->Html->script('jquery-1.11.0'); ?>
    <?php echo $this->Html->script('bootstrap.min'); ?>
    <?php echo $this->Html->script('plugins/morris/raphael.min'); ?>
    <?php echo $this->Html->script('plugins/morris/morris.min'); ?>
    <?php echo $this->Html->script('plugins/morris/morris-data'); ?>

    

</body>

</html>
