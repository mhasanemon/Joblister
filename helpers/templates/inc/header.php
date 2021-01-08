<!DOCTYPE html>
<html>
<head>
	<title>JobLister</title>

	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
	
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <span class="navbar-brand" ><?php echo SITE_TITLE ?></span>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="create.php">Create Listing</a></li>
                    
                </ul>
            </div>
        </nav>

        <?php displayMessage();?>
