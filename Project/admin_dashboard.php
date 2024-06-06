<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Include Font Awesome library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="black.png" alt="L9 Fitness Gym Logo" class="logo">
        </div>
        <div class="title">L9 Fitness Gym</div>
        <nav>
            <ul>
                <li><a href="admin_dashboard.php">Dashboard</a></li>
                <li><a href="package.html">Plan & Package</a></li>
                <li><a href="member.html">Member</a></li>
                <li><a href="trainers.html">Trainers</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

<main>
    <div class="welcome-message">
        <h1>Welcome to Gym Dashboard</h1>
    </div>
    <div class="content">
        <div class="section circular-section" id="plan">
            <h2><a href="security manaement.html"><i class="fas fa-camera-alt"></i> security Management</h2>
        </div>
        <div class="section circular-section" id="packages">
            <h2><a href="package.html"><i class="fas fa-box-open"></i> plans & Packages </a></h2>
        </div>
        <div class="section circular-section" id="members">
            <h2><a href="member.html"><i class="fas fa-users"></i> Members </a></h2>
        </div>
        <div class="section circular-section" id="trainers">
            <h2><a href="trainers.html"><i class="fas fa-user-tie"></i> Trainers </a></h2>
        </div>
        <div class="section circular-section" id="membership">
            <h2><a href="member Validation.html"><i class="fas fa-certificate"></i> Membership Validity </a></h2>
        </div>
        <div class="section circular-section" id="appointments">
            <h2><a href="schedule.html"><i class="fas fa-calendar-check"></i> Schedule</h2>
        </div>
    </div>
</main>

<footer>
    <div class="footer">
        <div class="footer-menu">
            <!-- Footer menu content goes here -->
        </div>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="footer-info">
            <p>&copy; 2024 L9 Fitness Gym. All rights reserved.</p>
        </div>
    </div>
</footer>