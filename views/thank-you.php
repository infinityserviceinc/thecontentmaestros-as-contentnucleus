<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Signup</title>
    <?php include_once('includes/head.php');?>
    <style>
        /*=======  Page Title  =======*/
.page-title-area {
	background: #fff;
	position: relative;
	z-index: 1;
	text-align: center;
	padding-top: 280px;
	padding-bottom: 120px;

}


@media (max-width: 575px) {
	.page-title-area {
		padding-top: 180px;
	}
}

.page-title-area::before {
	position: absolute;
	content: "";
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-image: url(../images/images-amazon-services.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	z-index: -1;
}

.page-title-area .title {
	font-size: 40px;
	margin-bottom: 10px;
	color: #fff;
}

@media (max-width: 991px) {
	.page-title-area .title {
		font-size: 62px;
	}
}

@media (max-width: 575px) {
	.page-title-area .title {
		font-size: 38px;
	}
}

.page-title-area .breadcrumb-nav {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.page-title-area .breadcrumb-nav li {
	font-size: 24px;
	font-weight: 700;
	position: relative;
	line-height: 1;
}

@media (max-width: 575px) {
	.page-title-area .breadcrumb-nav li {
		font-size: 18px;
	}
}

.page-title-area .breadcrumb-nav li:not(:last-child)::after {
	content: "|";
	margin: 0 8px;
}

.page-title-area .breadcrumb-nav li,
.page-title-area .breadcrumb-nav li a {
	color: #69a1bb;
}
    </style>
</head>
<body class="blog-page">
    <?php include_once('includes/header.php');?>
    <section class="page-title-area ">
        <div class="container">
            <h2 class="title"><?=(isset($_REQUEST['successMsg'])?$_REQUEST['successMsg']:"")?></h2>
            <ul class="breadcrumb-nav">
                <li class="active" style="color: blue !important;"><?=(isset($_REQUEST['thanksMsg'])?$_REQUEST['thanksMsg']:"")?></li>
            </ul>
        </div>
    </section>
    
    <?php include_once('includes/footer.php');?>
</body>
</html>