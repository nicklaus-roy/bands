<html>
	<body>
		{{ $cinema->name }}
		<p>Movies:</p>
		<ol>
			@foreach($cinema->movies as $movie)
				<li>{{ $movie->title }}</li>
			@endforeach
		</ol>
	</body>
</html>