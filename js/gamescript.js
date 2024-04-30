let score = 0;
        const scoreElement = document.getElementById('scoreValue');

        document.getElementById('cookie').addEventListener('click', () => {
            score++;
            scoreElement.textContent = score;
        });