<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "faculty_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM alumni";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faculty | Computer Science Department</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-container">
                <img src="images/iiitlogo.png" alt="University Logo" class="logo">
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="faculty.php">Faculty</a></li>
                    <li><a href="student.html">Students</a></li>
                    <li><a href="research.php">Research</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="internships.php">Internships</a></li>
                    <li><a href="academics.php">Academics</a></li>
                    <li><a href="Admission.html">Admissions</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Your header code -->
    <section class="faculty-section">
    <h3>Notable Alumni</h3>
    <div class="faculty-row">
        <?php while ($row = $result->fetch_assoc()) : ?>
                <div class="faculty-member">
                        <img src="<?= $row['image_url']; ?>" alt="<?= $row['name']; ?>">
                        <p><strong><?= $row['name']; ?></strong></p>
                        <p><?= $row['course']; ?></p>
                        <p><?= $row['course_session']; ?></p>
                        <p><?= $row['current_position']; ?></p>
                </div>
        <?php endwhile; ?>
    </div>
    </section>
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
    </footer> <!-- Your footer code -->

</body>
</html>

<?php $conn->close(); ?>

</body>