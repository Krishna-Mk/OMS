<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oms1";
$con = mysqli_connect ($servername, $username, $password, $dbname);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="output.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Mentor System</title>

</head>
<body>
<form action="search.phpsearch.php" method="post">
  <input type="text" id="search-input" name="search-input" class="form-control" autocomplete="off">
  <button type="submit" class="btn btn-primary">Search</button>
</form>

<?php
$searchInput = $_POST['search-input'];

// Retrieve the data from the database based on the search input
$sql = "SELECT * FROM mentorlist WHERE fullname LIKE '%$searchInput%' OR mentor_id LIKE '%$searchInput%'";
$result = mysqli_query($con, $sql);

// Display the retrieved data
while ($row = mysqli_fetch_assoc($result)) {

  
  echo '<div class="result">';
  echo '<h3>' . $row['fullname'] . '</h3>';
  echo '<p>' . $row['mentor_id'] . '</p>';
  echo '</div>';
}

// Close the database connection
mysqli_close($con);
?>


<script>
  const searchInput = document.getElementById('search-input');
  const results = document.querySelectorAll('.result');

  searchInput.addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    results.forEach(function(result) {
      const fullname = result.querySelector('h3').textContent.toLowerCase();
      const mentor_id = result.querySelector('p').textContent.toLowerCase();
      if (fullname.includes(searchTerm) || mentor_id.includes(searchTerm)) {
        result.style.display = 'block';
      } else {
        result.style.display = 'none';
      }
    });
  });
</script>

</body>