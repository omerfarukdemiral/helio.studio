<?php 
 
 global $conn;
 $user_id = $_SESSION['user']['id'];
 $sql = "SELECT username FROM users WHERE id=$user_id";
 $result = mysqli_query($conn, $sql);

?>


<div class="header">
	<div class="logo">
		<a style="float:left;" href="<?php echo BASE_URL .'admin/posts.php' ?>">
				<h1>Helio Studio -Blog</h1>
		</a>

		
		
	</div>
	<div class="user-info">
		<span><?php echo mysqli_fetch_assoc($result)['username'];?><span> &nbsp; &nbsp; <a href="<?php echo BASE_URL . 'logout.php'; ?>" class="logout-btn">Çıkış Yap</a>
	</div>
</div>