<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "faculty_database");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch ongoing projects
$ongoing_query = "SELECT * FROM ongoing_projects";
$ongoing_result = $conn->query($ongoing_query);

// Fetch completed projects
$completed_query = "SELECT * FROM completed_projects";
$completed_result = $conn->query($completed_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Research | Faculty Website</title>
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
                <li><a href="events.html">Events</a></li>
                <li><a href="internships.php">Internships</a></li>
                <li><a href="Alumni.php">Alumni</a></li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="Admission.html">Admissions</a></li>
            </ul>
        </nav>
    </div>
</header>

<img src="images/campus.webp" alt="Research Image" class="research-image"> <!-- Replace with your image path -->

<div class="button-container">
    <button class="button" onclick="showTable('ongoing')">Ongoing Projects</button>
    <button class="button" onclick="showTable('completed')">Completed Projects</button>
</div>

<div id="ongoing-table" class="table-container">
    <h3>Ongoing Projects</h3>
    <table>
        <thead>
            <tr>
                <th>Sl. No.</th>
                <th>Faculty Name</th>
                <th>Title of the Project</th>
                <th>Funding Agency</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($ongoing_result->num_rows > 0): ?>
                <?php 
                $ongoing_counter = 1; // Counter for ongoing projects
                while ($project = $ongoing_result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $ongoing_counter++; ?></td> <!-- Increment counter -->
                        <td><?= htmlspecialchars($project['faculty_name']); ?></td>
                        <td><?= htmlspecialchars($project['project_title']); ?></td>
                        <td><?= htmlspecialchars($project['funding_agency']); ?></td>
                        <td>$<?= number_format($project['amount'], 2); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No ongoing projects available.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div id="completed-table" class="table-container">
    <h3>Completed Projects</h3>
    <table>
        <thead>
            <tr>
                <th>Sl. No.</th>
                <th>Faculty Name</th>
                <th>Title of the Project</th>
                <th>Funding Agency</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($completed_result->num_rows > 0): ?>
                <?php 
                $completed_counter = 1; // Counter for completed projects
                while ($project = $completed_result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $completed_counter++; ?></td> <!-- Increment counter -->
                        <td><?= htmlspecialchars($project['faculty_name']); ?></td>
                        <td><?= htmlspecialchars($project['project_title']); ?></td>
                        <td><?= htmlspecialchars($project['funding_agency']); ?></td>
                        <td>$<?= number_format($project['amount'], 2); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No completed projects available.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

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

<script>
    function showTable(type) {
        // Hide both tables initially
        document.getElementById('ongoing-table').style.display = 'none';
        document.getElementById('completed-table').style.display = 'none';
        
        // Show the selected table
        if (type === 'ongoing') {
            document.getElementById('ongoing-table').style.display = 'block';
        } else if (type === 'completed') {
            document.getElementById('completed-table').style.display = 'block';
        }
    }
</script>

</body>
</html>

<?php $conn->close(); ?>
