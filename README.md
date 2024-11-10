
# IIIT-Guwahati Computer Science Department Website


The CSE Department website serves as a comprehensive resource for students, faculty, and visitors, offering essential information about the department's academic programs, faculty profiles, internship opportunities, research initiatives, and events. Additionally, the website highlights information related to admission procedure, notable alumni accomplishments and facilitates easy access to contact information, making it an ideal platform for anyone seeking to learn more about the department’s offerings and community.


A unique aspect addressed as a crucial requirement is the internship page. The is a new, dedicated feature on the CSE department website, providing students with a centralized hub for accessing CSE-specific internship opportunities, resources, and guidance. Previously absent on the department’s website, this page fills a crucial gap, supporting students in finding relevant internships and preparing for industry.
## Features

- User-Friendly Navigation
- Scalability
- Regular Updates and Maintenance



## UML Diagrams

- **Class Diagram:** Demonstrates the project's structure by outlining classes, attributes, methods, and the relationships between them.

- **Use Case Diagram:** Shows primary interactions between users and the system, highlighting key functionalities accessible to each user role. Here two actors are considered, namely a visitor and admin.

![usecase](https://github.com/NISHANT03-cOdeR/CSE_IIITG/blob/361b72be373b26a892da45b25603eaac68d37293/images/USECASE.jpg)
  
## Screenshots

![ss1](https://github.com/NISHANT03-cOdeR/CSE_IIITG/blob/e936c74c2ab4116dc90ae6640d5aa984fb751dc8/images/ss1.jpg)
![ss2](https://github.com/NISHANT03-cOdeR/CSE_IIITG/blob/a057855e23610a43ad844981071c8a7883edb8c2/images/ss2.jpg)
![ss3](https://github.com/NISHANT03-cOdeR/CSE_IIITG/blob/fdff6bca931b0277c6aa94741cebfd39baea0fde/images/ss3.jpg)
## Technology Stack

**Frontend:** HTML, CSS

**Backend:** PHP

**Database:** MySQL


## Directory Structure

The direcory contains two folders namely, codefiles and images, containing the requred code files (.css, .html, .php) including the landing page index.html and the set of all images used in the website.
```bash
├── codefiles/         
├── images/             
└── README.md 
```
  
## Prerequisites

To work on this project, make sure the following software and versions are installed:

- **XAMPP:** Version 8.1 or higher (PHP 8.1 recommended). 
  
- **VSCode:** Latest version, or any code editor that supports PHP, HTML, CSS.

- **MySQL:** Version 8.0 or compatible with XAMPP.

- **HTML & CSS Standards:** Ensure you're using HTML5 and CSS3 for modern syntax support and compatibility.

## Step-by-Step User Guide

1. Clone the Repository:

- Start by cloning the website repository from your version control system (GitHub, GitLab, etc.)
- Open a terminal and run the following command to clone the repository:

```bash
  git clone <repository_url>
```
  

- Move into the cloned project directory:

```bash
  cd <project_directory>
```

2. Set Up XAMPP

-  Download and install XAMPP.
- After installation, open the XAMPP Control Panel and start Apache and MySQL.

3. Configure the Project in XAMPP

- Move the cloned project folder to the htdocs directory inside your XAMPP installation directory. This is typically located at: 

```bash
  C:\xampp\htdocs\<project_folder>
```

- Open a browser and access the project by navigating to: http://localhost/<project_folder>


4. Set Up the MySQL Database

- Open phpMyAdmin at http://localhost/phpmyadmin.
- Create a new database named faculty_database.
- Import the provided SQL file (e.g., database.sql) to set up tables and initial data.
- Ensure tables like phd_students, faculty, and events have sample data for project visualization.

5. Configure Database Connection in PHP

- In your project directory, find the PHP files handling database connections.
- Update the database connection settings with your credentials:

```bash
  $conn = new mysqli("localhost", "root", "", "faculty_database");
```

6. Edit the project in your desired IDE as per the standards. (configuring extensions etc)


## Deployment

If planning to deploy this project on a server:

- Ensure the database and PHP files are secure.
- Configure the server environment to match the XAMPP development setup.
- Review file permissions and secure database credentials.

## Authors

- [Sunidhi Choudhary]()
- [Pratiksha Jha](https://github.com/Pritu345)
- [Sonu Moni Rabha](https://github.com/SONUXO)
- [Nishant Kashyap](https://github.com/NISHANT03-cOdeR)





