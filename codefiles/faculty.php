<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "faculty_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM faculty";
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
                    <li><a href="student.html">Students</a></li>
                    <li><a href="research.php">Research</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="internships.php">Internships</a></li>
                    <li><a href="Alumni.php">Alumni</a></li>
                    <li><a href="academics.php">Academics</a></li>
                    <li><a href="Admission.html">Admissions</a></li>
                </ul>
            </nav>
        </div>
    </header><!-- Your header code -->

    <section class="faculty-section">
    <h3>Professors</h3>
    <div class="faculty-row">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <?php if ($row['designation'] == 'Professor') : ?>
                <div class="faculty-member">
                    <a href="faculty_profile.php?id=<?= $row['id']; ?>">
                        <img src="<?= $row['profile_image']; ?>" alt="<?= $row['name']; ?>">
                        <p><strong><?= $row['name']; ?></strong></p>
                        <p><?= $row['designation']; ?></p>
                        <p><?= $row['email']; ?></p>
                        <p><?= $row['phone']; ?></p>
                    </a> <!-- Move the closing </a> to include the details as well -->
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>

    <h3>Associate Professors</h3>
    <div class="faculty-row">
        <?php
        // Reset the pointer to the first row
        $result->data_seek(0);
        while ($row = $result->fetch_assoc()) : ?>
            <?php if ($row['designation'] == 'Associate Professor') : ?>
                <div class="faculty-member">
                    <a href="faculty_profile.php?id=<?= $row['id']; ?>">
                        <img src="<?= $row['profile_image']; ?>" alt="<?= $row['name']; ?>">
                        <p><strong><?= $row['name']; ?></strong></p>
                        <p><?= $row['designation']; ?></p>
                        <p><?= $row['email']; ?></p>
                        <p><?= $row['phone']; ?></p>
                    </a>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>

    <h3>Assistant Professors</h3>
    <div class="faculty-row">
        <?php
        // Reset the pointer to the first row
        $result->data_seek(0);
        while ($row = $result->fetch_assoc()) : ?>
            <?php if ($row['designation'] == 'Assistant Professor') : ?>
                <div class="faculty-member">
                    <a href="faculty_profile.php?id=<?= $row['id']; ?>">
                        <img src="<?= $row['profile_image']; ?>" alt="<?= $row['name']; ?>">
                        <p><strong><?= $row['name']; ?></strong></p>
                        <p><?= $row['designation']; ?></p>
                        <p><?= $row['email']; ?></p>
                        <p><?= $row['phone']; ?></p>
                    </a>
                </div>
            <?php endif; ?>
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
