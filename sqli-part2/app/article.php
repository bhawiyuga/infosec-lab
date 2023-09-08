
<?php
	include 'config.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper-article">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">HackNews!</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="index.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="2" title="">Article</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="welcome">
	<div class="container">
	<table border="0">
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Content</th>
		</tr>
		<?php 
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$data = mysqli_query($conn, "select * from article where id = " . $id) or die(mysqli_error($conn));
		} else{
			$data = mysqli_query($conn, "select * from article") or die(mysqli_error($conn));
		}
		$no = 1;
		while($d = mysqli_fetch_assoc($data)){
			$id = $d['id'];
		?>
		<tr>
			<td><?php echo $id; ?></td> 
			<td><a href="article.php?id=<?php echo $id;?>"><?php echo $d['title']; ?></a></td>
			<td><?php echo $d['text']; ?></td>
		</tr>
		<?php } ?>
	</table>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; AcRtf Team. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>