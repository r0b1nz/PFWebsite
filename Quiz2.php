<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
	<title>Quiz 1</title>
	<link rel="stylesheet" href="css/quiz2style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript">
        function Choice1(){
        alert("Choice1");
        }
        function Choice2(){
        alert("Choice2");
        }
        function Choice3(){
        alert("Choice3");
        }
        function Choice4(){
        alert("Choice4");
        }
    </script>
</head>
<body>
<div class="main animated fadeIn">
    <div class="sidebar">
        <h2>QUIZ 1</h2>
        <h4>Time Left: 00: 59</h4>
        <div class="line">
        </div>
        <div class="labelback">
            <label>Q1. Choice Question 1.</label>
        </div>
        
    </div>
    <div class="contentspace">
        <div class="btn">
        <button type="submit" onclick="Choice1();" id="btn">Possible Answer 1</button>
        <button type="submit" onclick="Choice2();" id="btn">Possible Answer 2</button>
        <button type="submit" onclick="Choice3();" id="btn">Possible Answer 3</button>
        <button type="submit" onclick="Choice4();" id="btn">Possible Answer 4</button></div>
    </div>
</div>
</body>
</html>