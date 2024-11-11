<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "faculty_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch internship data
$query = "SELECT * FROM internships";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Internships | Department</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Header -->
<header>
    <div class="header-content">
        <div class="logo-container">
            <img src="images/iiitlogo.png" alt="University Logo" class="logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="faculty.php">faculty</a></li>
                <li><a href="student.html">Students</a></li>
                <li><a href="research.php">Research</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="Alumni.php">Alumni</a></li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="Admission.html">Admissions</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Internship Image -->
<section>
    <img src="images/Background1.webp" alt="Internship Banner" class="research-image">
</section>

<!-- Internship Openings Table -->
<section class="table-container internship-table-container">
    <h2>Internship Openings</h2>
    <table>
        <thead>
            <tr>
                <th>Sl. No.</th>
                <th>Faculty Name</th>
                <!--<th>Role</th> -->
                <th>Stipend</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $serial = 1; // To track serial numbers
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $serial++ . "</td>";
                echo "<td>" . $row['faculty_name'] . "</td>";
                #<!--echo "<td>" . $row['role'] . "</td>";-->
                echo "<td>" . $row['stipend'] . "</td>";
                echo "<td>" . ($row['link'] ? "<a href='" . $row['link'] . "'>Apply</a>" : "N/A") . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</section>


<!-- Footer -->
<footer>
    <div class="contact-info">
        <p><strong>Contact Us:</strong> 123-456-7890 | registrar@iiitg.ac.in</p>
        <p>Bongora, Assam Guwahati -781015 INDIA</p>
    </div>
    <div class="social-media">
    <a href="https://www.instagram.com/iiit.guwahati/?hl=en" class="social-link">Instagram</a>
        <a href="https://x.com/iiitghy?lang=en" class="social-link">Twitter</a>
        <a href="https://www.linkedin.com/school/indian-institute-of-information-technology/posts/?feedView=all" class="social-link">LinkedIn</a>
    </div>
</footer>

</body>
</html>

<?php
$conn->close();
?>
