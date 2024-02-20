<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Clicker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #cookie {
            width: 200px;
            height: 200px;
        }
        #score {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Cookie Clicker</h1>
    <img id="cookie" src="data/images/cookie.jpg" alt="Cookie">
    <p id="score">Score: <span id="scoreValue">0</span></p>

    <script>
        let score = 0;
        const scoreElement = document.getElementById('scoreValue');

        document.getElementById('cookie').addEventListener('click', () => {
            score++;
            scoreElement.textContent = score;
        });
    </script>
</body>
</html>