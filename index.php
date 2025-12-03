<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring WordPress Customization</title>
</head>
<body>

    <h1>Exploring WordPress Customization</h1>

    <p><strong>Name:</strong> Christopher McPherson</p>
    <p><strong>Date:</strong> December 2, 2025</p>

    <?php
        $siteName = "My WordPress Practice Site"; // string
        $visitorCount = 5; // integer
        $isActive = true; // boolean

        function getWelcomeMessage($name, $count) {
            return "Welcome to " . $name . "! You are visitor number " . $count . ".";
        }

        $message = getWelcomeMessage($siteName, $visitorCount);

        echo "<h2>$message</h2>";

        
        echo "<p><strong>PHP</strong> runs on the server and generates dynamic webpage content before it reaches the browser, ";
        echo "while <strong>JavaScript</strong> runs in the browser and controls interactivity after the page loads.</p>";
    ?>

</body>
</html>
