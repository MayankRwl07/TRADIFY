


const questions = [
    {
        question: "What does a stock represent?",
        answers: [
            { text: "ownership", correct: true },
            { text: "loan", correct: false},
            { text: "asset", correct: false },
            { text: "liability", correct: false }
        ]
    },
    {
        question: "What is the first sale of a company’s stock called?",
        answers: [
            { text: " Dividend", correct: false },
            { text: "IPO", correct: true },
            { text: "Bond", correct: false },
            { text: "Equity", correct: false }
        ]
    },
    
    {
        question: "What does 'bid price' mean?",
        answers: [
            { text: " The price at which you sell", correct: false },
            { text: "The price at which you buy", correct: true },
            { text: "The highest price of the day", correct: false },
            { text: "The lowest price of the day", correct: false }
        ]
    },
    
    {
        question: " What does the term margin trading refer to?",
        answers: [
            { text: " Trading without any fees", correct: false },
            { text: "Buying stocks using borrowed money", correct: true },
            { text: "Selling stocks before owning them", correct: false },
            { text: "Trading within a fixed time frame", correct: false }
        ]
    },
    {
        question: " What is the role of SEBI in the stock market?",
        answers: [
            { text: " Regulate and protect investor interests", correct: true },
            { text: " Issue new shares", correct: false },
            { text: "Determine stock prices", correct: false },
            { text: "Provide loans for trading", correct: false }
        ]
    },

    {
        question: "What is the term for rapid buying and selling within a single day?",
        answers: [
            { text: "Swing trading ", correct: false },
            { text: "Position trading", correct: false },
            { text: "Day trading", correct: true },
            { text: "Investment", correct: false }
        ]
    }


];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    nextButton.textContent = "Next";
    showQuestion();
}

function showQuestion() {
    resetState();
    const currentQuestion = questions[currentQuestionIndex];
    const questionNumber = currentQuestionIndex + 1;

    questionElement.textContent = `${questionNumber}. ${currentQuestion.question}`;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.textContent = answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);

        if (answer.correct) {
            button.dataset.correct = answer.correct;
        }

        button.addEventListener("click", selectAnswer);
    });
}

function resetState() {
    nextButton.style.display = "none";
    while (answerButtons.firstChild) {
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(event) {
    const selectedButton = event.target;
    const isCorrect = selectedButton.dataset.correct === "true";

    if (isCorrect) {
        selectedButton.classList.add("correct");
        score++;
    } else {
        selectedButton.classList.add("incorrect");
        // Highlight the correct answer visually
        const correctButton = answerButtons.querySelector("button[data-correct='true']");
        correctButton.classList.add("correct");
    }

    Array.from(answerButtons.children).forEach(button => {
        button.disabled = true;
    });
    nextButton.style.display = "block";
}

function showScore() {
    resetState();
    questionElement.textContent = `You scored ${score} out of ${questions.length}!`;
    nextButton.textContent = "Play Again";
    
    nextButton.style.display = "block";
}

function handleNextButton() {
    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
        showQuestion();
    } else {
        showScore();
    }
}

nextButton.addEventListener("click", () => {
    if (currentQuestionIndex < questions.length) {
        handleNextButton();
    } else {
        startQuiz();
    }
});

startQuiz();
