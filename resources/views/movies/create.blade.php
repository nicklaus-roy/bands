<html>
	<body>
		<form action="/movies/store" method="POST">
			@csrf
			<label for="">Title:</label>
			<input type="text" name='title'>
			<label for="">Rating:</label>
			<input type="number" name='rating'>
			<label for="">Category:</label>
			<input type="text" name='category'>
		</form>
	</body>
</html>