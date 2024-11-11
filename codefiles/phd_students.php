<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PhD Students</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header Section -->
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
                    <li><a href="Alumni.php">Alumni</a></li>
                    <li><a href="academics.php">Academics</a></li>
                    <li><a href="Admission.html">Admissions</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- PhD Students Section -->
    <section class="phd-students-section">
        <h1>Our PhD Students</h1>
        <div class="phd-students-container">
            <?php
            // Connect to the database
            $conn = new mysqli("localhost", "root", "", "faculty_database");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch PhD students data
            $sql = "SELECT id, name, supervisor_name, phd_tenure, image_url FROM phd_students";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="phd-student-box">';
                    echo '<a href="phd_student_profile.php?id=' . $row['id'] . '">';
                    echo '<img src="' . $row['image_url'] . '" alt="' . $row['name'] . '" class="student-image">';
                    echo '<div class="student-info">';
                    echo '<h2>' . $row['name'] . '</h2>';
                    echo '<p><strong>Supervisor:</strong> ' . $row['supervisor_name'] . '</p>';
                    echo '<p><strong>PhD Tenure:</strong> ' . $row['phd_tenure'] . '</p>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }
            } else {
                echo '<p>No PhD students found.</p>';
            }

            $conn->close();
            ?>
        </div>
    </section>
    <div class="null-section"></div>
    <!-- Footer Section -->
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
