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
        <?php include 'header.php'; ?>
  
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
      { kanji: "立つ", hiragana: "たつ", romaji: "tatsu", meaning: "To stand" },
            { kanji: "座る", hiragana: "すわる", romaji: "suwaru", meaning: "To sit" },
            { kanji: "使う", hiragana: "つかう", romaji: "tsukau", meaning: "To use" },
            { kanji: "歩く", hiragana: "あるく", romaji: "aruku", meaning: "To walk" },
            { kanji: "泳ぐ", hiragana: "およぐ", romaji: "oyogu", meaning: "To swim" },
            { kanji: "買う", hiragana: "かう", romaji: "kau", meaning: "To buy" },
            { kanji: "売る", hiragana: "うる", romaji: "uru", meaning: "To sell" },
            { kanji: "読む", hiragana: "よむ", romaji: "yomu", meaning: "To read" },
            { kanji: "書く", hiragana: "かく", romaji: "kaku", meaning: "To write" },
            { kanji: "話す", hiragana: "はなす", romaji: "hanasu", meaning: "To speak" },
            { kanji: "聞く", hiragana: "きく", romaji: "kiku", meaning: "To ask" },
            { kanji: "待つ", hiragana: "まつ", romaji: "matsu", meaning: "To wait" },
            { kanji: "知る", hiragana: "しる", romaji: "shiru", meaning: "To know" },
            { kanji: "見る", hiragana: "みる", romaji: "miru", meaning: "To see" },
            { kanji: "食べる", hiragana: "たべる", romaji: "taberu", meaning: "To eat" },
            { kanji: "飲む", hiragana: "のむ", romaji: "nomu", meaning: "To drink" },
            { kanji: "帰る", hiragana: "かえる", romaji: "kaeru", meaning: "To return" },
            { kanji: "来る", hiragana: "くる", romaji: "kuru", meaning: "To come" },
            { kanji: "行く", hiragana: "いく", romaji: "iku", meaning: "To go" },
            { kanji: "出る", hiragana: "でる", romaji: "deru", meaning: "To go out" },
            { kanji: "入る", hiragana: "はいる", romaji: "hairu", meaning: "To enter" },
            { kanji: "使う", hiragana: "つかう", romaji: "tsukau", meaning: "To use" },
            { kanji: "寝る", hiragana: "ねる", romaji: "neru", meaning: "To sleep" },
            { kanji: "働く", hiragana: "はたらく", romaji: "hataraku", meaning: "To work" }
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
