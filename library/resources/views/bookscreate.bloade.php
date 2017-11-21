<!DOCTYPE html>
<html>
<head>
<title>Create Book</title>
</head>
<body>
	<h3>Add Books</h3>
	<form method="post" action="/books">
		<label>Book Name</label>
	<input type="test" placeholder="Enter Book Name" id="book_name" name="book_name" required></br>
	</br>
	<label>Category</label>
	<select id="shelf" name="shelf" required></br>
		<option value="Art">Art</option>
		<option	value="Science">Science</option>
		<option	value="Sport">Sport</option>
		<option	value="Literature">Literature</option>
	</select>
	</br></br>
	<input type="submit" value="Submit" name="submit" id="submit">
	</label>
	</form>
</body>
</html>
