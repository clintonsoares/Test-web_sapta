<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>


<html>


	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Ajax Test</title>

		<!-- ....................................................... Bootstrap online and offline links ....................................................... -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap4/css/bootstrap.min.css">
		<!-- .................................................................................................................................................. -->

		<!-- My CSS file -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/teststyle.css">

		<!-- ....................................................... Jquery online and offline links ....................................................... -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery-3.3.1.js"></script>
		<!-- ............................................................................................................................................... -->

		<!-- Moment.js file -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/momentJs/moment.min.js"></script>

		<!-- my jquery internal script -->
		<script>

			function get_age(){
				var dob = moment($('#dob').html()).format('YYYYMMDD');
				var current_date = moment().format('YYYYMMDD');
				var age = parseInt((current_date - dob)/10000);
				$('#dob').html(age);
			}
			
			$(document).ready(function(){

				//load complete user table data
				//load_data();

				//load data function
				function load_data(query){
					$.ajax({
						method:'POST',
						data:{query:query},
						url:"<?php echo site_url('Test/fetchData'); ?>",
						success: function(data){
								$('#res1').html(data);
								get_age();
							}
					})
				}

				// on submit ajax functions
				$('#myForm').submit(function(){
					
					var ipnum = $('#ipnum').val();

					$('#res1').removeClass('hideContainer');

					if(ipnum == 1 || ipnum == 3 || ipnum == 5)
					{
						load_data(ipnum);
						// $.ajax({
						// 	method:'POST',
						// 	data:{ipnum: ipnum},
						// 	url:'<?php echo site_url('Test/myfunc'); ?>',
						// 	success: function(result){
						// 		$('#res1').html(result);
						// 	}
						// });
					}
					else
						$('#res1').html('Index Not Available');
					return false;

				});
				
			});

		</script>

	</head>


	<body>

		<div class="container-fluid headerContainer">
			<h1>Test Form</h1>
		</div>

		<div class="container formContainer">
			<form id="myForm">
				<h4>Please enter a single number between 0-9</h4>
				<input type="text" id="ipnum" name="ipnum" pattern="[0-9]{1}" placeholder="Only numbers from 0-9" autocomplete="off" required>
				<input type="submit" value="Submit" class="btnSubmit" id="btnsubmit">
			</form>
		</div>

		<div id="res1" class="container hideContainer"></div>
		<!-- <div id="res2" class="container"></div> -->

	</body>


</html>