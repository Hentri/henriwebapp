<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .about-box {
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Your Website</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <div class="about-box">
                <h2>About Us</h2>
                <p>Insert your about us content here. You can provide a brief introduction to your website or yourself in this section.</p>
            </div>
        </section>
        <section>
            <h2>Services</h2>
            <p>Explore our services and what we offer.</p>
        </section>
        <section>
            <h2>Contact Us</h2>
            <p>Contact information and a contact form can go here.</p>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Your Website Name. All rights reserved.</p>
    </footer>
</body>
</html>
