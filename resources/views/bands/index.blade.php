<html>
	<body>
		<h4>Bands</h4>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Date Formed</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($bands as $band)
					<tr>
						<td>{{ $band->id }}</td>
						<td>{{ $band->name }}</td>
						<td>{{ $band->date_formed }}</td>
						<td>
							<a href="/bands/{{ $band->id }}">View</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>