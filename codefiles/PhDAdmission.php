<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PhD Admission</title>
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

    <!-- Hero Section with Image -->
    <section class="hero-section">
        <img src="images/campus.webp" alt="PhD Admissions Banner" class="hero-image">
        <div class="hero-overlay">
            <h1>PhD Admissions</h1>
        </div>
    </section>

    <!-- PhD Course Description -->
    <section class="info-section-phd">
        <h2>PhD Programme Overview</h2>
        <p>Applications are invited for admission to the Doctor of Philosophy (PhD) 
            programme at the Indian Institute of Information Technology Guwahati 
            beginning in January 2024. The disciplines in which these programmes 
            will be offered are: Computer Science and Engineering (CSE), 
            Electronics and Communication Engineering (ECE), 
            Humanities and Social Sciences (HSS), and Mathematics. 
            The following are areas of research for which admissions are currently sought.</p>
    </section>

    <!-- PhD Vacancies Table -->
    <section class="phd-table-section">
        <h2>PhD Admission Details</h2>
        <table class="phd-table">
            <tr>
                <th>SL. No</th>
                <th>Broad Area</th>
                <th>Faculty</th>
                <th>Vacant Positions</th>
                <th>Assistantship (for full-time students)</th>
            </tr>
            <?php
            // Database connection
            $conn = new mysqli("localhost", "root", "", "faculty_database");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch PhD vacancy data
            $sql = "SELECT id, broad_area, faculty, vacant_positions, assistantship FROM phd_vacancies";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["broad_area"] . "</td>";
                    echo "<td>" . $row["faculty"] . "</td>";
                    echo "<td>" . $row["vacant_positions"] . "</td>";
                    echo "<td>" . $row["assistantship"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No vacancies available</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </section>

    <!-- PhD Admission Information Sections -->
    <section class="admission-info">
        <h3>THE SCHEDULE AND THE PROGRAMME</h3>
        <ul>
            <li>Shortlisting for the interview will be held based on applications received.</li>
            <li>Shortlisting will be done based on the availability of seats and academic performance of the candidates. A candidate merely fulfilling the eligibility criteria may not be shortlisted</li>
            <li>There will be no support for travel for the interview.</li>
            <li>Course Requirements, if any, will be prescribed by individual Departments. But students will be encouraged to take courses. The Doctoral Committee of a student will evaluate the preparedness of a student and prescribe one or more courses that will have to be taken.</li>
            <li>There will be a written comprehensive examination after admission to determine if the student is ready to take up research work and to determine if the student has sufficient breadth of knowledge in the discipline he / she has been admitted to.</li>
        </ul>        
        <h3>CATEGORIES OF STUDENTS</h3>
        <p>Students can join as full-time or part-time researchers, with assistantship support available for eligible full-time students.</p>

        <h3>ELIGIBILITY</h3>
        <ul>
            <li>Master’s degree in Engineering/Technology in the relevant area with a minimum Cumulative Performance Index (CPI) of 6.5 or 60% of marks.</li>
            <li>MSc (CS)/MSc (IT)/MCA/Equivalent Non-Tech Master’s Degrees in the relevant area with a minimum Cumulative Performance Index (CPI) of 6.5 or 60% of marks having a GATE/NET/SLET score in CS/IT.</li>
            <li>Four-year Bachelor’s degree in Engineering/Technology/Medical Sciences or equivalent in a relevant area with a minimum CPI of 7.0 or 65% of marks.</li>
        </ul>

        <h3>RESERVATIONS</h3>
        <p>Eligibility criteria will be relaxed by 5% marks or 0.5 CPI for SC/ST/PD applicants. Reservation is as per GOI rules. OBC (Non-creamy layer) candidates will have to enclose certificate and self-declaration statement as per format at Annexure-I & Annexure - II. The OBC (NCL) Certificate, issued by competent authority, on or after 01-10-2023, shall only be acceptable.</p>
    </section>
    <div class="apply-button-container">
        <a href="https://forms.gle/8LvFMzgbnJiRtxp29" target="_blank" class="apply-button">Apply</a>
    </div> 
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
