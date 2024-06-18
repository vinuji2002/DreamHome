  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $nic = $_POST["nic"];
  $dob = $_POST["dob"];

  // Process the form data (e.g., save to a file or database)
  
  // Example: Save the form data to a text file
  $data = "First Name: $fname\nLast Name: $lname\nEmail: $email\nAddress: $address\nNIC: $nic\nDate of Birth: $dob\n";
  file_put_contents('registration_data.txt', $data, FILE_APPEND);

  // Redirect the user to a thank you page
  header("Location: thank-you.html");
  exit;
}
?>
