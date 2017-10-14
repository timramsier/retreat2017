<?php
	include "../config/paths.php";
	include "../config/database.php";
  include "./queries.php";

	$query = $queryList['main'];
	$result = $mysqli->query($query);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../public/css/table.css" ?>
	</head>
	<body>
		<table class='report-table'>
			<?php while ($row = $result->fetch_assoc()) { ?>
				<tr>
					<?php foreach ($row as $value) { ?>
						<td><?=$value ?></td>
					<?php } ?>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>

