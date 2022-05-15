const question = document.getElementById("question");
const choices = Array.from(document.getElementsByClassName("choice-text"));

/*Heads up Display*/
const progressText = document.getElementById("progressText");
const scoreText = document.getElementById('score')

/*Progress Bar */

const progressBarFull = document.getElementById("progressBarFull");

let currentQuestion = {}
let acceptingAnswers = false;
let score = 0;
let questionCouter = 0;
let avaliableQuestions = [];

let questions = [
    {
        "question": "Dentro de qual elemento HTML colocamos o JavaScript??",
        "choice1": "<script>",
        "choice2": "<javascript>",
        "choice3": "<js>",
        "choice4": "<scripting>",
        "answer": 1
      },
      {
        "question": "Qual é a sintaxe correta para se referir a um script externo chamado 'xxx.js'?",
        "choice1": "<script href='xxx.js'>",
        "choice2": "<script name='xxx.js'>",
        "choice3": "<script src='xxx.js'>",
        "choice4": "<script file='xxx.js'>",
        "answer": 3
      },
      {
        "question": "Como você escreve 'Hello World' em uma caixa de alerta?",
        "choice1": "msgBox('Hello World');",
        "choice2": "alertBox('Hello World');",
        "choice3": "msg('Hello World');",
        "choice4": "alert('Hello World');",
        "answer": 4
      },
      {
        "question": "Como descrever o Billadas?",
        "choice1": "O melhor",
        "choice2": "O cara sheipado",
        "choice3": "the king",
        "choice4": "The Goat",
        "answer": 1
      },
      {
        "question": "Como se caga?",
        "choice1": "Sentado",
        "choice2": "De pé",
        "choice3": "De lado",
        "choice4": "Voando",
        "answer": 1
      },{
        "question": "Você vai sempre pra FAU?",
        "choice1": "Sempre",
        "choice2": "Quase sempre",
        "choice3": "As vezes",
        "choice4": "Não vou mesmo",
        "answer": 2
      }
]

// CONSTANTS

const CORRECT_BONUS = 10;
const MAX_QUESTIONS = 6;

startGame = () =>{
    questionCounter = 0;
    score = 0;
    avaliableQuestions = [...questions];
    
    getNewQuestion();
}

getNewQuestion = () => {

    if(avaliableQuestions.length === 0 || questionCouter >= MAX_QUESTIONS) {
        //go to the end page
        return window.location.assign("/end.html");
    }

    questionCouter++;
    /*HUD*/ progressText.innerText = `Perguntas ${questionCouter}/${MAX_QUESTIONS}`
    //Update the progress Bar
    progressBarFull.style.width = `${(questionCouter/MAX_QUESTIONS) * 100}%`;

    const questionIndex = Math.floor(Math.random() * avaliableQuestions.length);
    currentQuestion = avaliableQuestions[questionIndex];
    question.innerText = currentQuestion.question;

    choices.forEach(choice => {
        const number = choice.dataset['number']
        choice.innerText = currentQuestion["choice" + number]
    });

    avaliableQuestions.splice(questionIndex, 1);
    acceptingAnswers = true;
};

choices.forEach( choice => {
    choice.addEventListener('click', e =>{
        console.log(e.target)
        if(!acceptingAnswers) return;


        acceptingAnswers = false;
        const selectedChoice = e.target;
        const selectedAnswer = selectedChoice.dataset['number'];

        const classToApply =
        selectedAnswer == currentQuestion.answer ? 'correcta' : 'incorrecta';

        /* Implementando pontuação dinámica*/
        if(classToApply === 'correcta'){
            incrementScore(CORRECT_BONUS);
        }


        selectedChoice.parentElement.classList.add(classToApply);

        setTimeout( () =>{
            selectedChoice.parentElement.classList.remove(classToApply);
            getNewQuestion();
        }, 1000);
        
        
    });
});

incrementScore = num => {
    score +=num;
    scoreText.innerText = score;
}

startGame()