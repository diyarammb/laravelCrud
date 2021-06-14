<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>File Uploading</title>
</head>
<body>


<form action="{{url('upload')}}" enctype="multipart/form-data">

	<input type="file" name="photo">
<br>
<button type="submit">Upload</button>
</form>


</body>
</html>