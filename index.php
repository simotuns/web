<!DOCTYPE html>
<html>

<style>

body {
  background-image: url('https://images.unsplash.com/photo-1550785355-7ed3f3375d75?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  text-align: center;
  font-size: 300%;
  font-family: "Courier New", Courier, monospace;
  color: #638A1D;
  font-weight: 900;
}

</style>
<body>
<form action="submit.php" method="post">
	First name:<br>
	<input type="text" name="firstname">
	<br>
	Last name: <br>
	<input type="text" name="lastname">
	<br>
	Leave a comment: <br>
	<input type="text" name="comm">
	<br><br>
	<input type="submit" value="Submit" 
	style=" 
  color: black; 
  border: 2px solid #4CAF50;
  background-color: #638A1D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;">
</form>
</body>
</html>
