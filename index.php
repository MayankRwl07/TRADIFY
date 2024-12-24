<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Modules</title>
    <link rel="stylesheet" href="csss/styless.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Study Modules</h1>
        <div class="modules">
            <?php
            include 'db.php';

            // Fetch modules from the database
            $sql = "SELECT * FROM modules";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='module'>";
                    echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
                    echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No modules found!</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
    <footer>
        &copy; 2024 Study Modules. All Rights Reserved.
    </footer>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Modules</title>
    <link rel="stylesheet" href="csss/styless.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Trade Modules</div>
            <ul class="nav-links">
                <li> <a href="http://127.0.0.1:5500/STOKIFY/main.html?">home</a></li>
                <li><a href="#modules">Modules</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="http://127.0.0.1:5500/blog/contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="home" class="hero-section">
        <h1>Welcome to Trade Modules</h1>
        <p>Learn, grow, and master your skills  by tradifyy.</p>
        <p>Learn like a pro   by tradifyy.</p>
    </section>
    <div class="container" id="modules">
        <h2>Our Modules</h2>
        <div class="modules">
            <?php
            include 'db.php';

            // Fetch modules from the database
            $sql = "SELECT * FROM modules";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='module'>";
                    echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                    echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No modules found!</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
    <section id="about" class="about-section">
        <h2>About Us</h2>
        <p>Welcome to tradify , your ultimate platform for mastering the art and science of trading.
</p>
    </section>
    <section id="contact" class="contact-section">
        <h2>Contact Us</h2>
        <p>Email: support@trademodules.com</p>
        <p>Phone: 9610363350</p>
    </section>
    <footer>
        &copy; 2024 tradifyy Modules. All Rights Reserved.
    </footer>
</body>
</html>

