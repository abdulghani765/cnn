<?php
// Example PHP script for processing contact form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // In a real implementation, you would send an email or save this to a database
    $success = "Thank you, $name! Your message has been received.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Global News</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Header Styles */
        .site-header {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
        }

        .site-header .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .site-header h1 {
            font-size: 1.5rem;
        }

        .site-header nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
            font-size: 1rem;
        }

        .site-header nav a:hover {
            text-decoration: underline;
        }

        /* Contact Section Styles */
        .contact-section {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            font-size: 2rem;
            color: #333;
            text-align: center;
            margin-bottom: 1rem;
        }

        .contact-section p {
            text-align: center;
            color: #666;
            margin-bottom: 2rem;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #444;
        }

        .form-group input,
        .form-group textarea {
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #0077cc;
        }

        .submit-btn {
            padding: 0.75rem 1.5rem;
            background-color: #0077cc;
            color: #fff;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #005fa3;
        }

        .success-message {
            padding: 1rem;
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            margin-bottom: 1rem;
            text-align: center;
        }

        /* Footer Styles */
        .site-footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        .site-footer p {
            font-size: 0.875rem;
        }

    </style>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <h1>Global News</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="category.php?cat=world">World</a>
                <a href="category.php?cat=politics">Politics</a>
                <a href="category.php?cat=sports">Sports</a>
                <a href="contact.php">Contact</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="contact-section">
            <h2>Contact Us</h2>
            <p>Have any questions or feedback? We'd love to hear from you! Reach out using the form below, or contact us directly at <strong>03164544331</strong>.</p>

            <?php if (isset($success)): ?>
                <div class="success-message">
                    <p><?= $success ?></p>
                </div>
            <?php endif; ?>

            <form action="contact.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2024 Global News. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
