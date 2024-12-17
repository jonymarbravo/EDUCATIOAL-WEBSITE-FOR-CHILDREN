let question;
let form;
let res;
let qno;
let score;

const questions = [
    {
        title : 'Who is the most handsome of them all ?',
        options : [
            'Baga John Flourenz', 
            'Abao Raymart', 
            'Barrete Jonymar', 
            'Codriga Jian'
        ],
        answer : '2',
        score : 1
    },
    {
        title : 'Which of the following you think is a nigga ?',
        options : [
            'Abao Raymart',
            'Baga John Flourenz',
            'Codriga Jian',
            'Barrete Jonymar'
        ],
        answer : '1',
        score : 1
    },
    {
        title : 'Which of them you think is the most evil of them all ?',
        options : [
            'Barrete Jonymar',
            'Baga John Flourenz',
            'Abao Raymart',
            'All of above'
        ],
        answer : '3',
        score : 1
    },
    {
        title : "If you observe the following choices, which of them you think is the one who steal of Ms. Aledro's ballpen ?",
        options : [
            'Baga John Flourenz',
            'Abao Raymart',
            'Codriga Jian',
            'All of above'
        ],
        answer : '1',
        score : 1
    },
    {
        title : 'If you have an opportunity to choose, what face would you like to be your face ?',
        options : [
            'Piolo Pascual',
            'Kenneth Espinosa',
            'Baga John Flourenz',
            'Babalu'
        ],
        answer : '1',
        score : 1
    },
    {
        title : 'Which of them you think is the most dangerous of them all ?',
        options : [
            'Love',
            'Hate',
            'Trust',
            'Lust'
        ],
        answer : '3',
        score : 1
    },
    {
        title : 'Which of the following is the most successful man in the world ?',
        options : [
            'Elon Musk',
            'Bill Gates',
            'Steven Jobs',
            'Johnny Sins'
        ],
        answer : '3',
        score : 1
    },
    {
        title : 'In which of the following, is the reason why you were born?',
        options : [
            'Your Father',
            'Your Mother',
            'Your Grandfather',
            'Your Neighbor'
        ],
        answer : '3',
        score : 1
    },
    {
        title : 'If you are an IT, which of them is the most important of them all ?',
        options : [
            'Laptop',
            'Knowledge',
            'ChatGpt',
            'Bitches'
        ],
        answer : '2',
        score : 1
    },
    {
        title : 'If you observe seriously, which of the following is the fuck who made this website ?',
        options : [
            'Baga John Flourenz',
            'Abao Raymart',
            'Barrete Piolo',
            'Codriga Jian'
        ],
        answer : '2',
        score : 1
    }
];

function restartScreen() {
    document.querySelector('.quiz-heading').innerHTML = `Score : ${score}`;
    const card = document.querySelector('.question-card');
    card.innerHTML = "<ul>";
    questions.forEach((ques) => {
        const html = `
        <li>${ques.title} <div class="answer-label">${ques.options[ques.answer]}</div></li>
        `;
        card.innerHTML += html;
    });
    card.innerHTML += "</ul>";
    document.querySelector('.answer-key').style.display = 'block';
    document.querySelector('#restart-btn').style.display = 'block';
    document.querySelector('#back-btn').style.display = 'block';
}

function resetradio() {
    document.querySelectorAll('[type="radio"]').forEach((radio) => {
        radio.removeAttribute("disabled");
    });
    res.setAttribute("class","idle");
    res.innerHTML = "Empty";
}

function evaluate() {
    if (form.op.value == questions[qno].answer) {
        res.setAttribute("class", "correct");
        res.innerHTML = "Correct";
        score += questions[qno].score;
    } else {
        res.setAttribute("class", "incorrect");
        res.innerHTML = "Incorrect";
    }
    document.querySelectorAll('[type="radio"]').forEach((radio) => {
        radio.setAttribute("disabled", "");
    });
}

function getNextQuestion() {
    qno++;
    ques = questions[qno];
    question.innerHTML = ques.title;
    const labels = document.querySelectorAll('label');
    labels.forEach((label, idx) => {
        label.innerHTML = ques.options[idx];
    });
}

function handleSubmit(e) {
    e.preventDefault();
    if (!form.op.value) {
        alert('Please select an option');
    } else if (form.submit.classList.contains('submit')) {
        evaluate();
        form.submit.classList.remove('submit');
        form.submit.value = "Next";
        form.submit.classList.add('next');
    } else if (qno < questions.length - 1 && form.submit.classList.contains('next')) {
        getNextQuestion();
        resetradio();
        form.submit.classList.remove('next');
        form.submit.value = "Submit";
        form.submit.classList.add('submit');
        form.reset();
    } else if (form.submit.classList.contains('next')) {
        restartScreen();
        form.submit.classList.remove('next');
        form.submit.value = "Submit";
        form.submit.classList.add('submit');
        form.reset();
    }
}

function init() {
    document.body.innerHTML = `
        <h1 class="quiz-heading">Quiz</h1>
        <div class="app-body">
            <h1 class="answer-key">Answer Key</h1>
            <div class="question-card">
                <h2 id='question'>Question</h2>
                <form>
                    <input type="radio" id="op1" name="op" value="0">
                    <label for="op1">op1</label><br>
                    <input type="radio" id="op2" name="op" value="1">
                    <label for="op2">op2</label><br>
                    <input type="radio" id="op3" name="op" value="2">
                    <label for="op3">op3</label><br>
                    <input type="radio" id="op4" name="op" value="3">
                    <label for="op4">op4</label><br>
                    <div id="res" class="idle">Empty</div><br>
                    <input type="submit" name="submit" value="Submit" class="submit"/>
                </form>
            </div>
            <div class="buttons-container">
                <button id="restart-btn">Restart</button>
                <button id="back-btn" style="display: none;">Back</button>
            </div>
        </div>
    `;
    question = document.querySelector('#question');
    form = document.querySelector('form');
    res = document.querySelector('#res');
    qno = -1;
    score = 0;
    form.addEventListener('submit', handleSubmit);
    document.querySelector('#restart-btn').addEventListener('click', init);
    document.querySelector('#back-btn').addEventListener('click', function() {
        window.location.href = 'FinalDashboard.php#quiz';  // Your back button destination
    });
    getNextQuestion();
}

document.querySelector('#restart-btn').addEventListener('click', init);
init();
