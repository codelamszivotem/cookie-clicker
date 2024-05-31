<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Clicker Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #cookie {
            width: 200px;
            height: 200px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <img id="cookie" src="cookie.png" alt="Cookie">
    <?php
    session_start();
    $score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;

    if (isset($_POST['clicked'])) {
    // Přičíst skóre
    $score++;
    $_SESSION['score'] = $score;
    // Zobrazit skóre
    echo "
    <script>alert('Score: $score');</script>";
    }
    ?>
    <form method="post" style="display: none;">
        <input type="hidden" name="clicked" value="true">
        <input type="submit" id="cookieButton">
    </form>
    <script>
        document.getElementById('cookie').addEventListener('click', function () {
            document.getElementById('cookieButton').click();
            // Přidat efekt při kliknutí na cookie
            this.style.transform = 'scale(1.1)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 100);
        });
    </script>
</body>
</html>
