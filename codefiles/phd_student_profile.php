<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhD Student Profile</title>
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
    <!-- Profile Section -->
    <section class="profile-phd-section">
        <?php
        // Connect to the database
        $conn = new mysqli("localhost", "root", "", "faculty_database");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get student ID from the URL
        $id = $_GET['id'];

        // Fetch PhD student details
        $sql = "SELECT * FROM phd_students WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            echo '<div class="profile-phd-container">';
            echo '<img src="' . $row['image_url'] . '" alt="' . $row['name'] . '" class="profile-phd-image">';
            echo '<div class="profile-phd-info">';
            echo '<h2>' . $row['name'] . '</h2>';
            echo '<p><strong>Age:</strong> ' . $row['age'] . '</p>';
            echo '<p><strong>Supervisor:</strong> ' . $row['supervisor_name'] . '</p>';
            echo '<p><strong>PhD Tenure:</strong> ' . $row['phd_tenure'] . '</p>';
            echo '<p><strong>Bachelor\'s Degree:</strong> ' . $row['bachelor_degree'] . '</p>';
            echo '<p><strong>Master\'s Degree:</strong> ' . $row['master_degree'] . '</p>';
            echo '<p><strong>Interests:</strong> ' . $row['interests'] . '</p>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<p>PhD student not found.</p>';
        }

        $conn->close();
        ?>
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
