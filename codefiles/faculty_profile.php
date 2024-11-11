<?php
$conn = new mysqli("localhost", "root", "", "faculty_database");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$faculty_id = $_GET['id'];

$query = "SELECT * FROM faculty WHERE id = $faculty_id";
$faculty_result = $conn->query($query);
$faculty = $faculty_result->fetch_assoc();

$courses_query = "SELECT course_name FROM courses WHERE faculty_id = $faculty_id";
$courses_result = $conn->query($courses_query);

$publications_query = "SELECT publication_title, publication_link FROM publications WHERE faculty_id = $faculty_id";
$publications_result = $conn->query($publications_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $faculty['name']; ?> | Faculty Profile</title>
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
</header>

<section class="faculty-profile">
    <div class="profile-container">
        <div class="profile-photo">
            <img src="<?= $faculty['profile_image']; ?>" alt="<?= $faculty['name']; ?>" />
        </div>
        <div class="profile-details">
            <h2><?= $faculty['name']; ?></h2>
            <p><strong>Designation:</strong> <?= $faculty['designation']; ?></p>
            <p><strong>Email:</strong> <?= $faculty['email']; ?></p>
            <p><strong>Phone:</strong> <?= $faculty['phone']; ?></p>
            <p><strong>Research Interests:</strong> <?= $faculty['research_interests']; ?></p>
            
            <h3>Courses Taught</h3>
            <ul>
                <?php while ($course = $courses_result->fetch_assoc()) : ?>
                    <li><?= $course['course_name']; ?></li>
                <?php endwhile; ?>
            </ul>
            
            <h3>Research Publications</h3>
            <ul>
                <?php while ($publication = $publications_result->fetch_assoc()) : ?>
                    <li><a href="<?= $publication['publication_link']; ?>"><?= $publication['publication_title']; ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
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
</footer>

</body>
</html>

<?php $conn->close(); ?>
