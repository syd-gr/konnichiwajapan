<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Vocabulary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="wrapper">
<?php include 'header.php'; ?>
    
    <div class="table-container">
    <table id="excelTable" class="excel-table">
        <thead>
            <tr>
                <th colspan="5" style="text-align:center; font-size:18px;">JLPT N5 Lesson 8 All Vocabulary</th>
            </tr>
            <tr>
                <th>S.N</th>
                <th>KANJI</th>
                <th>HIRAGANA</th>
                <th>ROMANIZE</th>
                <th>MEANING</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

    <script>
        // Disable right-click and some DevTools shortcuts
        document.addEventListener("contextmenu", e => e.preventDefault());
        document.addEventListener("keydown", function (e) {
            if (
                e.key === "F12" ||
                (e.ctrlKey && e.shiftKey && ["I", "J", "C"].includes(e.key)) ||
                (e.ctrlKey && e.key === "U")
            ) {
                e.preventDefault();
            }
        });
        
        
        
        
        
        
        
        
        
        
        
        
        

        const vocabulary = [
        { kanji: "借りる", hiragana: "かりる", romaji: "kariru", meaning: "To borrow" },
            { kanji: "返す", hiragana: "かえす", romaji: "kaesu", meaning: "To return (something)" },
            { kanji: "貸す", hiragana: "かす", romaji: "kasu", meaning: "To lend" },
            { kanji: "借金", hiragana: "しゃっきん", romaji: "shakkin", meaning: "Debt" },
            { kanji: "遊ぶ", hiragana: "あそぶ", romaji: "asobu", meaning: "To play" },
            { kanji: "使う", hiragana: "つかう", romaji: "tsukau", meaning: "To use" },
            { kanji: "食べる", hiragana: "たべる", romaji: "taberu", meaning: "To eat" },
            { kanji: "飲む", hiragana: "のむ", romaji: "nomu", meaning: "To drink" },
            { kanji: "見る", hiragana: "みる", romaji: "miru", meaning: "To see" },
            { kanji: "読む", hiragana: "よむ", romaji: "yomu", meaning: "To read" },
            { kanji: "書く", hiragana: "かく", romaji: "kaku", meaning: "To write" },
            { kanji: "聞く", hiragana: "きく", romaji: "kiku", meaning: "To ask" },
            { kanji: "待つ", hiragana: "まつ", romaji: "matsu", meaning: "To wait" },
            { kanji: "知る", hiragana: "しる", romaji: "shiru", meaning: "To know" },
            { kanji: "見せる", hiragana: "みせる", romaji: "miseru", meaning: "To show" },
            { kanji: "教える", hiragana: "おしえる", romaji: "oshieru", meaning: "To teach" },
            { kanji: "習う", hiragana: "ならう", romaji: "narau", meaning: "To learn" },
            { kanji: "分かる", hiragana: "わかる", romaji: "wakaru", meaning: "To understand" },
            { kanji: "使う", hiragana: "つかう", romaji: "tsukau", meaning: "To use" },
            { kanji: "立てる", hiragana: "たてる", romaji: "tateru", meaning: "To set up" },
            { kanji: "書ける", hiragana: "かける", romaji: "kakeru", meaning: "To write (something)" },
            { kanji: "開く", hiragana: "ひらく", romaji: "hiraku", meaning: "To open" }
        ];

        function populateTable() {
            const tableBody = document.querySelector("#excelTable tbody");
            tableBody.innerHTML = "";
            vocabulary.forEach((word, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${word.kanji}</td>
                    <td>${word.hiragana}</td>
                    <td>${word.romaji}</td>
                    <td>${word.meaning}</td>
                `;
                tableBody.appendChild(row);
            });
        }

        document.addEventListener("DOMContentLoaded", populateTable);
    </script>
    
    <?php include 'footer.php'; ?>
    </div>
</body>
</html>
