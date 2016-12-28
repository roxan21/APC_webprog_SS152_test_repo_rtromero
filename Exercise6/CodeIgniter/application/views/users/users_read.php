<!doctype html>
<html>
    <head>
        <title>Read</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 10px;
				background-color: #c7c7c7;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Users Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $Name; ?></td></tr>
	    <tr><td>Nickname</td><td><?php echo $Nickname; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $Email; ?></td></tr>
	    <tr><td>Phone Number</td><td><?php echo $Phone_number; ?></td></tr>
	    <tr><td>Home Address</td><td><?php echo $Home_address; ?></td></tr>
	    <tr><td>Gender</td><td><?php echo $Gender; ?></td></tr>
	    <tr><td>Comments</td><td><?php echo $Comments; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>