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
      {
        "kanji": "つけます II",
        "hiragana": "つけます II",
        "romaji": "tsukemasu",
        "meaning": "turn on (electricity, air conditioner)"
    },
    {
        "kanji": "消します",
        "hiragana": "けしますＩ",
        "romaji": "keshimasu",
        "meaning": "off (electricity, air conditioner)"
    },
    {
        "kanji": "開けます",
        "hiragana": "あけます II",
        "romaji": "akemasu",
        "meaning": "open (door, window)"
    },
    {
        "kanji": "閉めます",
        "hiragana": "しめます II",
        "romaji": "shimemasu",
        "meaning": "close (door, window)"
    },
    {
        "kanji": "急ぎます",
        "hiragana": "いそぎます I",
        "romaji": "isogimasu",
        "meaning": "hurry"
    },
    {
        "kanji": "待ちます",
        "hiragana": "まちます I",
        "romaji": "machimasu",
        "meaning": "waiting"
    },
    {
        "kanji": "止めます",
        "hiragana": "とめます II",
        "romaji": "tomemasu",
        "meaning": "stop (ice, umbrella), park (car)"
    },
    {
        "kanji": "曲がります [右へ～]",
        "hiragana": "まがります I [みぎへ～]",
        "romaji": "magarimasu",
        "meaning": "turn, turn [right]"
    },
    {
        "kanji": "持ちます",
        "hiragana": "もちます I",
        "romaji": "mochimasu",
        "meaning": "carry, hold"
    },
    {
        "kanji": "取ります",
        "hiragana": "とります I",
        "romaji": "torimasu",
        "meaning": "take (salt)"
    },
    {
        "kanji": "手伝います",
        "hiragana": "てつだいます I",
        "romaji": "tetsudaimasu",
        "meaning": "help (work)"
    },
    {
        "kanji": "呼びます",
        "hiragana": "よびます I",
        "romaji": "yobimasu",
        "meaning": "call (taxi, name)"
    },
    {
        "kanji": "話します",
        "hiragana": "はなします I",
        "romaji": "hanashimasu",
        "meaning": "talk, talk"
    },
    {
        "kanji": "見せます",
        "hiragana": "みせます II",
        "romaji": "misemasu",
        "meaning": "show and submit"
    },
    {
        "kanji": "教えます",
        "hiragana": "おしえます II",
        "romaji": "oshiemasu",
        "meaning": "told"
    },
    {
        "kanji": "始めます",
        "hiragana": "はじめます II",
        "romaji": "hajimemasu",
        "meaning": "begin"
    },
    {
        "kanji": "降ります",
        "hiragana": "ふります I",
        "romaji": "furimasu",
        "meaning": "fall [rain, snow ~]"
    },
    {
        "kanji": "コピーします III",
        "hiragana": "コピーします III",
        "romaji": "kopi-shimasu",
        "meaning": "copy"
    },
    {
        "kanji": "エアコン",
        "hiragana": "エアコン",
        "romaji": "eakon",
        "meaning": "air conditional"
    },
    {
        "kanji": "パスポート",
        "hiragana": "パスポート",
        "romaji": "pasupo-to",
        "meaning": "passport"
    },
    {
        "kanji": "名前",
        "hiragana": "なまえ",
        "romaji": "namae",
        "meaning": "Name"
    },
    {
        "kanji": "住所",
        "hiragana": "じゅうしょ",
        "romaji": "juusho",
        "meaning": "address"
    },
    {
        "kanji": "地図",
        "hiragana": "ちず",
        "romaji": "chizu",
        "meaning": "map"
    },
    {
        "kanji": "塩",
        "hiragana": "しお",
        "romaji": "shio",
        "meaning": "salt"
    },
    {
        "kanji": "砂糖",
        "hiragana": "さとう",
        "romaji": "satou",
        "meaning": "Street"
    },
    {
        "kanji": "読み方",
        "hiragana": "よみかた",
        "romaji": "yomikata",
        "meaning": "reading convention"
    },
    {
        "kanji": "～方",
        "hiragana": "～かた",
        "romaji": "kata",
        "meaning": "way ~"
    },
    {
        "kanji": "ゆっくり",
        "hiragana": "ゆっくり",
        "romaji": "yukkuri",
        "meaning": "slow, leisurely, comfortable"
    },
    {
        "kanji": "すぐ",
        "hiragana": "すぐ",
        "romaji": "sugu",
        "meaning": "right away"
    },
    {
        "kanji": "また",
        "hiragana": "また",
        "romaji": "mata",
        "meaning": "again (~ come)"
    },
    {
        "kanji": "あとで",
        "hiragana": "あとで",
        "romaji": "atode",
        "meaning": "after"
    },
    {
        "kanji": "もう 少し",
        "hiragana": "もう すこし",
        "romaji": "mou sukoshi",
        "meaning": "just a little bit more"
    },
    {
        "kanji": "もう～",
        "hiragana": "もう～",
        "romaji": "mou",
        "meaning": "add ~"
    },
    {
        "kanji": "いいですよ。",
        "hiragana": "いいですよ。",
        "romaji": "ii desu yo",
        "meaning": "Alright. / Okay."
    },
    {
        "kanji": "さあ",
        "hiragana": "さあ",
        "romaji": "saa",
        "meaning": "Come on, / let’s go, (encourage someone)"
    },
    {
        "kanji": "あれ？",
        "hiragana": "あれ？",
        "romaji": "are?",
        "meaning": "UMBRELLA! (exclamation when surprised)"
    },
    {
        "kanji": "まっすぐ",
        "hiragana": "まっすぐ",
        "romaji": "massugu",
        "meaning": "straight"
    },
    {
        "kanji": "お釣り",
        "hiragana": "おつり",
        "romaji": "otsuri",
        "meaning": "pence"
    },
    {
        "kanji": "これでお願いします",
        "hiragana": "これでおねがいします",
        "romaji": "kore de onegaishimasu",
        "meaning": "Send me this money"
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
