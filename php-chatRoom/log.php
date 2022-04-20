<?php
    // initialize errors variable
    $errors = "";

    // connect to database
    $db = mysqli_connect("localhost", "root", "luna", "chatroom");

    // insert a quote if submit button is clicked
    if (isset($_POST['submit'])) {
        if (empty($_POST['message'])) {
            $errors = "You must fill in the message";
        }else{
            $message = $_POST['message'];
            $sql = "INSERT INTO messages (message) VALUES ('$message')";
            mysqli_query($db, $sql);
            header('location: log.php');
        } }
	if (isset($_GET['del_message'])) {
	$id = $_GET['del_message'];

	mysqli_query($db, "DELETE FROM messages WHERE id=".$id);
	header('location: log.php');
}




?>
<html>
<head>
    <title>log List </title>
  <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">

</head>
<body>
    <div class="heading">
        <h2 style="font-style: 'Hervetica';"></h2>
				Message Log
    </div>
		<a href="welcome.php" class="btn btn-warning">back to welcome page</a>
		<br><br>
    <form method="post" action="log.php" class="input_form">
  <?php if (isset($errors)) { ?>
    <p><?php echo $errors; ?></p>
<?php } ?>
        <input type="text" name="message" class="message_input">
        <button type="submit" name="submit" id="add_btn" class="add_btn">send message</button>
    </form>
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>message log</th>
					<th style="width: 60px;">delete</th>
				</tr>
			</thead>

			<tbody>
				<?php
				// select all messages if page is visited or refreshed
				$messages = mysqli_query($db, "SELECT * FROM messages");
	      $users = mysqli_query($db, "SELECT * FROM user");
				$i = 1; while ($row = mysqli_fetch_array($messages)) { ?>
					<tr>
						<td> <?php echo $i; ?> </td>
						<td class="message"> <?php echo $row['message']; ?> </td>
						<td class="delete">
							<a href="log.php?del_message=<?php echo $row['id'] ?>">X</a>
						</td>
					</tr>
				<?php $i++; } ?>
			</tbody>
		</table>
