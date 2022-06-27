<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <title>Document</title>
    <script src="js/excel.js"></script>
</head>
<body>
   
<table id="tbl_exporttable_to_xls" border="1">
	<thead>
		<th>Sr</th>
		<th>Name</th>
		<th>Location</th>
		<th>Job Profile</th>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td><p>Amit Sarna</p></td>
			<td>Florida</td>
			<td>Data Scientist</td>
		</tr>
		<tr>
			<td>2</td>
			<td><p>Sagar Gada</p></td>
			<td>California</td>
			<td>Sr FullStack Dev</td>
		</tr>
		<tr>
			<td>3</td>
			<td><p>Ricky Marck</p></td>
			<td>Nevada</td>
			<td>Sr .Net Dev</td>
		</tr>           
	</tbody>
</table>
<button onclick="ExportToExcel('xlsx')">Export table to excel</button>
    
</body>
</html>