
<!DOCTYPE html>

<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<header class="conNav">
    <nav>
        <div class="box">
            <a href="index.jsp"><img src="images/header/onbekend%20simpel.png" width="50px" height="auto"></a>
        </div>

        <div class="rest">
            <a href="meadow.jsp">MEADOW</a>
            <a href="projecten.jsp">PROJECTS</a>
            <a href="verhuur.jsp">VERHUUR</a>
            <a class="actueel" href="contact.php">CONTACT</a>
        </div>
    </nav>
</header>
<main class="mainContact">
    <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="your e-mail">
        <input type="text" name="subject" placeholder="subject">
        <textarea name="message" placeholder="message"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>
    </form>
</main>
</body>
</html>
