<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <body>
	 	 	 			
 
<table class="table table-bordered">
	<thead class="alert-info">
		<tr>
			<th>Country</th>
			<th>TotalCases</th>
			<th>NewCases</th>
			<th>TotalDeaths</th>
			<th>NewDeaths</th>
			<th>TotalRecovered</th>
			<th>NewRecovered</th>
			<th>ActiveCases</th>
			<th>TotalTests</th>
			<th>Population</th>
			<th>Serious_Critical</th>
			 
		</tr>
	</thead>
	<tbody>
  <?php
  
	foreach($json as $countries){
		?>
		<tr>
			<td><?php echo $countries->Country?></td>
			<td><?php echo $countries->TotalCases?></td>
			<td><?php echo $countries->NewCases?></td>
			<td><?php echo $countries->TotalDeaths?></td>
			<td><?php echo $countries->NewDeaths?></td>
			<td><?php echo $countries->TotalRecovered?></td>
			<td><?php echo $countries->NewRecovered?></td>
			<td><?php echo $countries->ActiveCases?></td>
			<td><?php echo $countries->TotalTests?></td>
			<td><?php echo $countries->Population?></td>
			<td><?php echo $countries->Serious_Critical?></td>
			 

		</tr>
		<?php
			}
		?>
	</tbody>
</table>
</body>	
</html>