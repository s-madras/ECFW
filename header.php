<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri();?> https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title></title>
	<link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri();?>/style.css">
</head>
<body>

	<section class="header">
		<header><h1>Header</h1></header>
	</section>
	<section class="section2">
		<tr>
			<th>
				<input type="text" name="" placeholder="Search" class="form-control">
			</th>

			<th>
				<a class="btn" href="">Search</a> </th>
				
				<th >
					<div class="sidebar">
						<?php get_sidebar();?>
					</div>
				</th>
		    </tr>

		   
	</section>
</body>
</html>
