<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .quiz-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .question {
            margin: 20px 0;
        }
        .options {
            list-style-type: none;
            padding: 0;
        }
        .options li {
            margin: 10px 0;
        }
        button {
            display: block;
            margin: auto;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="quiz-container">
        <h1>Quiz Test</h1>
        <div id="quiz"></div>
        <button id="submit">Submit</button>
        <div class="result" id="result"></div>
    </div>

    <script>
        const quizData = [
            // A1 Level
            { question: "What is the capital of the UK?", options: ["London", "Paris", "Berlin", "Madrid"], answer: 0 },
            { question: "How do you say 'hello' in English?", options: ["Hola", "Bonjour", "Ciao", "Hello"], answer: 3 },
            { question: "What color is the sky?", options: ["Green", "Red", "Blue", "Yellow"], answer: 2 },
            { question: "How many days are in a week?", options: ["5", "6", "7", "8"], answer: 2 },
            { question: "What do you call a pet that barks?", options: ["Cat", "Dog", "Fish", "Bird"], answer: 1 },
            // A2 Level
            { question: "What is the opposite of 'hot'?", options: ["Cold", "Warm", "Cool", "None"], answer: 0 },
            { question: "Which is a fruit?", options: ["Carrot", "Apple", "Bread", "Cheese"], answer: 1 },
            { question: "Where do you usually go shopping?", options: ["Market", "School", "Hospital", "Library"], answer: 0 },
            { question: "What time do you usually eat dinner?", options: ["Morning", "Afternoon", "Evening", "Night"], answer: 2 },
            { question: "What is the past tense of 'go'?", options: ["Went", "Gone", "Going", "Go"], answer: 0 },
            // B1 Level
            { question: "What is a synonym for 'happy'?", options: ["Sad", "Joyful", "Angry", "Tired"], answer: 1 },
            { question: "What does HTML stand for?", options: ["Hyper Text Markup Language", "High Text Markup Language", "Hyperlink and Text Markup Language", "None"], answer: 0 },
            { question: "Which element is used for a hyperlink in HTML?", options: ["<link>", "<a>", "<href>", "<url>"], answer: 1 },
            { question: "What is the correct CSS syntax to change the background color?", options: ["background-color: blue;", "bg-color: blue;", "color: blue;", "background: blue;"], answer: 0 },
            { question: "What does CSS stand for?", options: ["Cascading Style Sheets", "Computer Style Sheets", "Colorful Style Sheets", "None"], answer: 0 },
            // B2 Level
            { question: "What is the main purpose of JavaScript?", options: ["Style web pages", "Make web pages interactive", "Store data", "Create databases"], answer: 1 },
            { question: "Which of the following is a JavaScript data type?", options: ["String", "Color", "Font", "None"], answer: 0 },
            { question: "What HTML tag is used to define an internal style sheet?", options: ["<style>", "<css>", "<script>", "<style-sheet>"], answer: 0 },
            { question: "What does the 'function' keyword do in JavaScript?", options: ["Defines a function", "Calls a function", "Creates a variable", "None"], answer: 0 },
            { question: "Which CSS property is used to change the text color?", options: ["color", "text-color", "font-color", "background-color"], answer: 0 },
            // C1 Level
            { question: "What is the purpose of the <div> tag in HTML?", options: ["Define a division or section", "Create a link", "Style text", "None"], answer: 0 },
            { question: "Which of the following is a JavaScript loop?", options: ["for", "if", "else", "switch"], answer: 0 },
            { question: "What is the box model in CSS?", options: ["Padding, margin, border, and content", "Width and height only", "Background and color", "None"], answer: 0 },
            { question: "What does 'this' refer to in JavaScript?", options: ["The global object", "The function itself", "The current object", "None"], answer: 2 },
            { question: "How do you declare a variable in JavaScript?", options: ["var", "let", "const", "All of the above"], answer: 3 },
            // C2 Level
            { question: "What is the purpose of the 'async' attribute in a <script> tag?", options: ["Load scripts asynchronously", "Load scripts synchronously", "Execute scripts immediately", "None"], answer: 0 },
            { question: "What is a closure in JavaScript?", options: ["Function with access to outer scope", "A block of code", "An error type", "None"], answer: 0 },
            { question: "How can you prevent a form from submitting in JavaScript?", options: ["e.preventDefault()", "form.stopSubmit()", "event.prevent()", "None"], answer: 0 },
            { question: "What is the purpose of the 'data-*' attributes in HTML?", options: ["Store extra information", "Define styles", "Create links", "None"], answer: 0 },
            { question: "What does the 'hover' pseudo-class do in CSS?", options: ["Styles elements when hovered over", "Styles elements when clicked", "Styles elements when loaded", "None"], answer: 0 },
            // Additional Questions...
            // Add remaining questions up to 100 here...
        ];

        const quizContainer = document.getElementById('quiz');
        const submitButton = document.getElementById('submit');
        const resultContainer = document.getElementById('result');

        function loadQuiz() {
            quizData.forEach((currentQuestion, questionIndex) => {
                const questionEl = document.createElement('div');
                questionEl.classList.add('question');
                questionEl.innerHTML = `<h2>${currentQuestion.question}</h2>`;
                
                const optionsList = document.createElement('ul');
                optionsList.classList.add('options');
                
                currentQuestion.options.forEach((option, optionIndex) => {
                    const li = document.createElement('li');
                    li.innerHTML = `<input type="radio" name="question${questionIndex}" value="${optionIndex}"> ${option}`;
                    optionsList.appendChild(li);
                });
                
                questionEl.appendChild(optionsList);
                quizContainer.appendChild(questionEl);
            });
        }

        function calculateScore() {
            let score = 0;
            quizData.forEach((currentQuestion, questionIndex) => {
                const answer = document.querySelector(`input[name="question${questionIndex}"]:checked`);
                if (answer && parseInt(answer.value) === currentQuestion.answer) {
                    score++;
                }
            });
            return score;
        }

        function showResult() {
            const score = calculateScore();
            const level = (score >= 0 && score <= 40) ? 'A1-A2' :
                         (score >= 41 && score <= 70) ? 'B1-B2' :
                         (score >= 71 && score <= 100) ? 'C1-C2' : 'Invalid Score';
            resultContainer.innerHTML = `<h2>Your Score: ${score} / ${quizData.length}</h2><h3>Level: ${level}</h3>`;
        }

        submitButton.addEventListener('click', showResult);
        
        loadQuiz();
    </script>
</body>
</html>
