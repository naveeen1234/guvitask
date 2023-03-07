<?php

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM users WHERE user_id = $user_id";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $email = $row['age'];
        $image = $row['dob'];
    }
}

?>

<div class="profile-container">
    <div class="profile-image">
        <img src="<?php echo $image; ?>" alt="User Profile Image" />
    </div>
    <div class="profile-info">
        <p>Name: <?php echo $name; ?></p>
        <p>Email: <?php echo $email; ?></p>
    </div>
</div>