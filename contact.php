<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>


<section class="contact-us">
    <div class="container">
        <h2>Contact Us</h2>
        <p>If you have any questions, feel free to reach out to us. We will try to  get back to you as soon as possible!</p>
        
        <form id="contact-form">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>

            <div class="input-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your Message" rows="4" required></textarea>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>

        <div id="form-result"></div>
    </div>
</section>

<script src="script.js"></script>

</body>
</html>
