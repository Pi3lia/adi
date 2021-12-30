<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php

?>
    <body>
    <div class="container-md shadow-sm bg-info" align="center" style="border-radius: 1%;">
<form method="post" action="proses.php">
		<table class="table table-hover">
			<tr>			
				<td>Gambar</td>
				<td><input type="file" class="form-control" name="gambar" placeholder="Masukkan Gambar"></td>
			</tr>
			<tr>
				<td>Caption</td>
				<td><input type="text" name="caption" class="form-control" placeholder="Tulis Caption"></td>
			</tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
		</table>
	</form>
</div>
<a href="list.php"></a>
</body>