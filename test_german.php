<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deutsch Test</title>
    <style>
                body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #007acc;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #007acc;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .section {
            margin-bottom: 20px;
        }
        .options {
            list-style: none;
            padding: 0;
        }
        .options li {
            margin: 10px 0;
        }
        button {
            background-color: #007acc;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #005fa3;
        }
        #timer {
            text-align: center;
            font-size: 24px;
            color: #e63946;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Deutsch Test</h1>
    <div id="timer">15:00</div>
    <div id="quizContainer"></div>
    <button onclick="submitAnswers()">Test Beenden</button>
</div>

<!-- Hidden form to submit the score and level -->
<form id="resultForm" action="save_test_result.php" method="POST" style="display: none;">
    <input type="hidden" name="user_id" value="1"> <!-- Replace with dynamic user ID -->
    <input type="hidden" name="test_name" value="German Test">
    <input type="hidden" id="score" name="score">
    <input type="hidden" id="level" name="level">
</form>

<script>
    const quizData = [
        { question: "Wie heißt du?", options: ["Ich bin 20.", "Ich heiße Anna.", "Ich komme aus Berlin.", "Ich mag Äpfel."], answer: 1 },
        { question: "Wie alt bist du?", options: ["Ich arbeite hier.", "Ich bin 25 Jahre alt.", "Ich lese ein Buch.", "Ich mag Hunde."], answer: 1 },
        { question: "Wo ist das Buch?", options: ["Es ist rot.", "Es ist auf dem Tisch.", "Ich habe es.", "Ich mag es."], answer: 1 },
        { question: "Welche Farbe hat der Himmel?", options: ["Es ist ein Tier.", "Er ist blau.", "Es ist kalt.", "Es ist groß."], answer: 1 },
        { question: "Magst du Pizza?", options: ["Ja, ich mag es.", "Ich gehe einkaufen.", "Es ist lecker.", "Ich habe zwei."], answer: 2 },
        // Add other questions here as needed
    ];

    let score = 0;
    const totalQuestions = quizData.length;
    let timeRemaining = 15 * 60; // 15 minutes in seconds
    const timerElement = document.getElementById('timer');
    const quizContainer = document.getElementById('quizContainer');

    function startQuiz() {
        quizData.forEach((quizItem, index) => {
            const section = document.createElement('div');
            section.classList.add('section');
            section.innerHTML = `<p>${index + 1}. ${quizItem.question}</p>`;
            const ul = document.createElement('ul');
            ul.classList.add('options');
            quizItem.options.forEach((option, i) => {
                ul.innerHTML += `<li><input type="radio" name="q${index}" value="${i}"> ${option}</li>`;
            });
            section.appendChild(ul);
            quizContainer.appendChild(section);
        });
        startTimer();
    }

    function startTimer() {
        const interval = setInterval(() => {
            if (timeRemaining <= 0) {
                clearInterval(interval);
                submitAnswers();
            }
            const minutes = Math.floor(timeRemaining / 60);
            const seconds = timeRemaining % 60;
            timerElement.innerHTML = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            timeRemaining--;
        }, 1000);
    }

    function submitAnswers() {
        score = quizData.reduce((acc, quizItem, index) => {
            const answer = document.querySelector(`input[name="q${index}"]:checked`);
            return acc + (answer && parseInt(answer.value) === quizItem.answer ? 1 : 0);
        }, 0);

        const percentage = (score / totalQuestions) * 100;
        let level = '';
        if (percentage >= 90) level = 'C2';
        else if (percentage >= 75) level = 'C1';
        else if (percentage >= 60) level = 'B2';
        else if (percentage >= 50) level = 'B1';
        else if (percentage >= 30) level = 'A2';
        else level = 'A1';

        // Set score and level in the hidden form
        document.getElementById('score').value = score;
        document.getElementById('level').value = level;

        // Submit the form
        document.getElementById('resultForm').submit();
    }

    startQuiz();
</script>

</body>
</html>
