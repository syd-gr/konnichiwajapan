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
      { kanji: "教室", hiragana: "きょうしつ", romaji: "kyoushitsu", meaning: "Classroom" },
            { kanji: "手帳", hiragana: "てちょう", romaji: "techou", meaning: "Notebook, planner" },
            { kanji: "辞書", hiragana: "じしょ", romaji: "jisho", meaning: "Dictionary" },
            { kanji: "時計", hiragana: "とけい", romaji: "tokei", meaning: "Clock, watch" },
            { kanji: "紙", hiragana: "かみ", romaji: "kami", meaning: "Paper" },
            { kanji: "カメラ", hiragana: "カメラ", romaji: "kamera", meaning: "Camera" },
            { kanji: "コンピュータ", hiragana: "コンピュータ", romaji: "konpyu-ta", meaning: "Computer" },
            { kanji: "電話", hiragana: "でんわ", romaji: "denwa", meaning: "Telephone" },
            { kanji: "郵便局", hiragana: "ゆうびんきょく", romaji: "yuubinkyoku", meaning: "Post office" },
            { kanji: "駅", hiragana: "えき", romaji: "eki", meaning: "Station" },
            { kanji: "銀行", hiragana: "ぎんこう", romaji: "ginkou", meaning: "Bank" },
            { kanji: "スーパー", hiragana: "スーパー", romaji: "su-pa", meaning: "Supermarket" },
            { kanji: "映画館", hiragana: "えいがかん", romaji: "eigakan", meaning: "Movie theater" },
            { kanji: "店", hiragana: "みせ", romaji: "mise", meaning: "Shop" },
            { kanji: "美術館", hiragana: "びじゅつかん", romaji: "bijutsukan", meaning: "Art museum" },
            { kanji: "公園", hiragana: "こうえん", romaji: "kouen", meaning: "Park" },
            { kanji: "病院", hiragana: "びょういん", romaji: "byouin", meaning: "Hospital" },
            { kanji: "図書館", hiragana: "としょかん", romaji: "toshokan", meaning: "Library" },
            { kanji: "美術", hiragana: "びじゅつ", romaji: "bijutsu", meaning: "Art" },
            { kanji: "新聞", hiragana: "しんぶん", romaji: "shinbun", meaning: "Newspaper" },
            { kanji: "テレビ", hiragana: "テレビ", romaji: "terebi", meaning: "Television" },
            { kanji: "ラジオ", hiragana: "ラジオ", romaji: "rajio", meaning: "Radio" },
            { kanji: "雑誌", hiragana: "ざっし", romaji: "zasshi", meaning: "Magazine" },
            { kanji: "漫画", hiragana: "まんが", romaji: "manga", meaning: "Comics" },
            { kanji: "小説", hiragana: "しょうせつ", romaji: "shousetsu", meaning: "Novel" },
            { kanji: "週刊誌", hiragana: "しゅうかんし", romaji: "shuukanshi", meaning: "Weekly magazine" }
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
