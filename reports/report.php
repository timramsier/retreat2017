<?php
	include "../config/paths.php";
	include "../config/database.php";
	include "./queries.php";
	if (isset($_GET['data'])) {
		$query = $queryList[$_GET['data']]["report"];
		// print_r($query);die();
	} else {
		echo 'No dataset selected.';
		die();
	}
	$result = $mysqli->query($query);
?>
<html lang="en">
	<head>
	
	  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../public/css/table.css" ?>
	</head>
	<body>
		<h1><?=urldecode($_GET['data']) ?></h1>
		<div class="report-controls">
			<a class="btn btn-default" onClick="window.history.back()">Back</a>
			<a class="btn btn-default" onClick="copyElementContents(document.getElementById('report-table'));">Copy Table</a>
		</div>
		<div class='table-wrapper'>
			<table class="report-table" id='report-table'>
				<?php while ($row = $result->fetch_assoc()) { ?>
					<tr>
						<?php foreach ($row as $value) { ?>
							<td><?=$value ?></td>
						<?php } ?>
					</tr>
				<?php } ?>
			</table>
		</div>
	</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/public/js/universal.functions.js"></script>
