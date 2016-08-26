<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
	<title>Quiz 1</title>
	<link rel="stylesheet" href="css/cardstyle.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>
<div class="main">
    
    <div class="sidebar">
        <h2>QUIZ 1</h2>
        <h4>Time Left: 00: 59</h4>
        <div class="line">
        </div>
        <div class="labelback">
            <label>Q1. This is question 1.</label>
        </div>
        
    </div>
    <!-- Frame of Search Results -->
    <div class="contentspace">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="choice"><p>Choice 1</p>
            </div>
        <div class="choice2"><p>Choice 2</p>
            </div>
        <div class="choice3"><p>Choice 3</p>
            </div>
        <div class="choice4"><p>Choice 4</p>
            </div>
        </form>
    </div>
    <div class="tabs">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <button type="submit">1</button><button type="submit">2</button><button type="submit">3</button><button type="submit">4</button><button type="submit">5</button>
        <button type="submit">6</button><button type="submit">7</button><button type="submit">8</button><button type="submit">9</button><button type="submit">10</button>
        </form>
    </div>
</div>
</body>
</html>