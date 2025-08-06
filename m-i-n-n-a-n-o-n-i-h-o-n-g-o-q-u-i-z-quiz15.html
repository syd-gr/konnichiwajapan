<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Vocabulary Quiz</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
    .quiz-container {
      max-width: 600px;
      margin: auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
    }
    .question {
      font-size: 1.4em;
      margin-bottom: 10px;
    }
    .options {
      margin-top: 15px;
      text-align: left;
    }
    .options input {
      margin-right: 10px;
    }
    .next-btn, .result-btn, #restart-btn {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 1em;
      cursor: pointer;
    }
    .correct {
      color: green;
      font-weight: bold;
    }
    .incorrect {
      color: red;
    }
  </style>
</head>
<body>
  <div class="wrapper">
        <header class="site-header">
        <div class="header-content">
            <h1 class="page-title">
                <a href="index.php">Konnichiwa Japan</a>
            </h1>
        <div class="header-buttons">
            <button onclick="location.href='index.html'">Home</button>
            <button onclick="location.href='about.html'">About</button>
            <button onclick="location.href='support.html'">Support Us</button>
        </div>
        </div>
        <p class="header-description">Learn Japanese with passion, explore a new culture, and embrace the beauty of language!</p>
        </header>
  
  <div class="quiz-container">
    <div id="question-container">
      <div class="question" id="question"></div>
      <div class="options" id="options"></div>
      <button class="next-btn" id="action-btn">Show Answer</button>
      <button class="result-btn" id="result-btn" style="display: none;">Show Result</button>
    </div>

    <div id="result-container" style="display: none;">
      <h2>Your Score: <span id="score"></span>/<span id="total"></span></h2>
      <button id="restart-btn">Restart Quiz</button>
    </div>
  </div>

  <script>
    const vocab = [
      {
        "kanji": "立ちます",
        "hiragana": "たちます",
        "romaji": "",
        "meaning": "stand"
    },
    {
        "kanji": "座ります",
        "hiragana": "すわります",
        "romaji": "",
        "meaning": "sit"
    },
    {
        "kanji": "使います",
        "hiragana": "つかいます",
        "romaji": "",
        "meaning": "use, use"
    },
    {
        "kanji": "置きます",
        "hiragana": "おきます",
        "romaji": "",
        "meaning": "put"
    },
    {
        "kanji": "作ります，造ります",
        "hiragana": "つくります",
        "romaji": "",
        "meaning": "making, manufacturing, manufacturing"
    },
    {
        "kanji": "売ります",
        "hiragana": "うります",
        "romaji": "",
        "meaning": "sell"
    },
    {
        "kanji": "知ります",
        "hiragana": "しります",
        "romaji": "",
        "meaning": "know"
    },
    {
        "kanji": "住みます",
        "hiragana": "すみます",
        "romaji": "",
        "meaning": "live in"
    },
    {
        "kanji": "研究します",
        "hiragana": "けんきゅうします",
        "romaji": "",
        "meaning": "research"
    },
    {
        "kanji": "知って います",
        "hiragana": "しって います",
        "romaji": "",
        "meaning": "know"
    },
    {
        "kanji": "住んで います [大阪に～]",
        "hiragana": "すんで います [おおさかに～]",
        "romaji": "",
        "meaning": "live [in Osaka]"
    },
    {
        "kanji": "資料",
        "hiragana": "しりょう",
        "romaji": "",
        "meaning": "documents, materials"
    },
    {
        "kanji": "",
        "hiragana": "カタログ",
        "romaji": "",
        "meaning": "catalog"
    },
    {
        "kanji": "時刻表",
        "hiragana": "じこくひょう",
        "romaji": "",
        "meaning": "train timetables"
    },
    {
        "kanji": "服",
        "hiragana": "ふく",
        "romaji": "",
        "meaning": "clothes"
    },
    {
        "kanji": "製品",
        "hiragana": "せいひん",
        "romaji": "",
        "meaning": "product"
    },
    {
        "kanji": "",
        "hiragana": "ソフト",
        "romaji": "",
        "meaning": "software"
    },
    {
        "kanji": "専門",
        "hiragana": "せんもん",
        "romaji": "",
        "meaning": "specialize"
    },
    {
        "kanji": "歯医者",
        "hiragana": "はいしゃ",
        "romaji": "",
        "meaning": "dentist"
    },
    {
        "kanji": "床屋",
        "hiragana": "とこや",
        "romaji": "",
        "meaning": "Hair salon"
    },
    {
        "kanji": "",
        "hiragana": "プレイガイド",
        "romaji": "",
        "meaning": "ticket office (in the theater)"
    },
    {
        "kanji": "独身",
        "hiragana": "どくしん",
        "romaji": "",
        "meaning": "alone"
    },
    {
        "kanji": "特に",
        "hiragana": "とくに",
        "romaji": "",
        "meaning": "especially"
    },
    {
        "kanji": "",
        "hiragana": "思い出します",
        "romaji": "",
        "meaning": "remember, recall"
    },
    {
        "kanji": "",
        "hiragana": "ご家族",
        "romaji": "",
        "meaning": "family (for others)"
    },
    {
        "kanji": "",
        "hiragana": "いらっしゃいます",
        "romaji": "",
        "meaning": "Respect for 「い ま す」"
    },
    {
        "kanji": "",
        "hiragana": "高校",
        "romaji": "",
        "meaning": "high school"
    }
    ];

    // Shuffle function
    function shuffle(array) {
      for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
      }
    }

    // Generate quiz questions
    const questions = vocab.map((item) => {
      const correct = item.meaning;
      const wrongOptions = vocab
        .filter((v) => v.meaning !== correct)
        .sort(() => 0.5 - Math.random())
        .slice(0, 3)
        .map((v) => v.meaning);
      const options = [correct, ...wrongOptions];
      shuffle(options);

      return {
        question: `${item.kanji}（${item.hiragana}）`,
        correct,
        options
      };
    });

    let currentQuestionIndex = 0;
    let score = 0;
    let state = "show";

    const questionElement = document.getElementById("question");
    const optionsElement = document.getElementById("options");
    const actionButton = document.getElementById("action-btn");
    const resultButton = document.getElementById("result-btn");
    const resultContainer = document.getElementById("result-container");
    const scoreElement = document.getElementById("score");
    const totalElement = document.getElementById("total");

    function loadQuestion() {
      state = "show";
      actionButton.textContent = "Show Answer";

      const currentQuestion = questions[currentQuestionIndex];
      questionElement.textContent = `Q${currentQuestionIndex + 1}: ${currentQuestion.question}`;
      optionsElement.innerHTML = "";

      currentQuestion.options.forEach(option => {
        const div = document.createElement("div");
        div.innerHTML = `
          <label>
            <input type="radio" name="option" value="${option}"> ${option}
          </label>
        `;
        optionsElement.appendChild(div);
      });
    }

    function highlightAnswer() {
      const currentQuestion = questions[currentQuestionIndex];
      const options = document.querySelectorAll("input[name='option']");

      options.forEach(input => {
        const label = input.parentElement;
        input.disabled = true;
        if (input.value === currentQuestion.correct) {
          label.classList.add("correct");
        }
        if (input.checked && input.value !== currentQuestion.correct) {
          label.classList.add("incorrect");
        }
      });
    }

    actionButton.addEventListener("click", () => {
      const selectedOption = document.querySelector("input[name='option']:checked");

      if (state === "show") {
        if (!selectedOption) {
          alert("Please select an option!");
          return;
        }

        const answer = selectedOption.value;
        if (answer === questions[currentQuestionIndex].correct) {
          score++;
        }

        highlightAnswer();
        state = "next";
        actionButton.textContent = "Next Question";
      } else {
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
          loadQuestion();
        } else {
          document.getElementById("question-container").style.display = "none";
          resultContainer.style.display = "block";
          scoreElement.textContent = score;
          totalElement.textContent = questions.length;
          actionButton.style.display = "none";
        }
      }
    });

    document.getElementById("restart-btn").addEventListener("click", () => {
      currentQuestionIndex = 0;
      score = 0;
      state = "show";

      shuffle(questions); // Optional: reshuffle question order on restart
      resultContainer.style.display = "none";
      document.getElementById("question-container").style.display = "block";
      actionButton.style.display = "inline-block";
      actionButton.textContent = "Show Answer";
      resultButton.style.display = "none";

      loadQuestion();
    });

    // Start quiz
    shuffle(questions);
    loadQuestion();
  </script>
  
  <?php include 'footer.php'; ?>
    </div>
</body>
</html>
