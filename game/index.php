<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Pink Bunny Clicker</title>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
<style>
body {
  margin: 0;
  height: 100vh;
  background: radial-gradient(circle at top, #ffd6ea, #ff9acb);
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Quicksand', sans-serif;
}
.card {
  background: #fff0f6;
  padding: 30px 50px;
  border-radius: 25px;
  text-align: center;
  box-shadow: 0 20px 60px rgba(255,0,120,.4);
}
h1 { color:#ff4fa3; }
#bunny {
  font-size: 120px;
  cursor: pointer;
  transition:.15s;
}
#bunny:active { transform: scale(.9); }
#score {
  font-size: 24px;
  margin-top: 10px;
  color:#ff2e93;
}
</style>
</head>
<body>
<div class="card">
  <h1>Pink Bunny Clicker</h1>
  <div id="bunny">🐰</div>
  <div id="score">Score: 0</div>
</div>

<script>
let score = 0;
document.getElementById("bunny").onclick = () => {
  score++;
  document.getElementById("score").innerText = "Score: " + score;
};
</script>
</body>
</html>
