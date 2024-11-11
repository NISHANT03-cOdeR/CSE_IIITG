<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>M.Tech Students</title>
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

    <!-- Main Content -->
    <section class="content-section">
        <h1>Current M.Tech Students</h1>
        
        <!-- Year Selection Buttons -->
        <div class="year-buttons">
            <form method="GET" action="mtech_students.php">
                <button type="submit" name="year" value="2024">2024</button>
                <button type="submit" name="year" value="2023">2023</button>
            </form>
        </div>

        <!-- Students Table -->
        <?php
        if (isset($_GET['year'])) {
            $year = $_GET['year'];

            // Database connection
            $conn = new mysqli("localhost", "root", "", "faculty_database");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch students for the selected year
            $sql = "SELECT id, roll_no, name, email FROM mtech_students WHERE year = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $year);
            $stmt->execute();
            $result = $stmt->get_result();

            echo "<h2>Batch of $year</h2>";
            echo "<table class='student-table'>";
            echo "<tr><th>Sl.No</th><th>Roll No</th><th>Name</th><th>Email</th></tr>";

            $serialNumber = 1;
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $serialNumber++ . "</td>";
                echo "<td>" . htmlspecialchars($row['roll_no']) . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "</tr>";
            }

            echo "</table>";

            $stmt->close();
            $conn->close();
        }
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
