<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring WordPress Customization</title>
</head>
<body>
    
    <h1>Exploring WordPress Customization</h1>
    <p>Ransome Hudson</p>
    <p>4/13/26</p>

    <?php
    // Three different variable types
    $siteName = "My WordPress Site";   // string
    $integer1 = 10;                    // integer
    $bool1 = true;                // boolean

    // User-defined function using at least two variables
    function describeSite($name, $count) {
        return "The site called '$name' currently has $count published posts.";
    }

    // echo result in an h2
    echo "<h2>" . describeSite($siteName, $integer1) . "</h2>";

    // echo a comparison of JavaScript and PHP in a paragraph
    echo "<p>Both JavaScript and PHP are widely used web programming languages.
          JavaScript runs in the browser and handles front-end,
          while PHP runs on the server and is popular for
          content management systems like WordPress</p>";
?>

</body>
</html>