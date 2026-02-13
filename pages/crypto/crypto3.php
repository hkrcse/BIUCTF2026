<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Lunar Language</title>

<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">

<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  background: radial-gradient(circle at top, #0b1220, #020617 70%);
  font-family: 'JetBrains Mono', monospace;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #e5e7eb;
}

.challenge {
  width: 820px;
  padding: 34px;
  border-radius: 16px;
  background: rgba(2, 6, 23, 0.88);
  border: 1px solid rgba(34,211,238,0.35);
  box-shadow:
    0 0 22px rgba(34,211,238,0.18),
    inset 0 0 18px rgba(34,211,238,0.08);
}

.challenge h1 {
  margin: 0 0 20px;
  font-size: 24px;
  color: #22d3ee;
  letter-spacing: 1.4px;
  text-shadow:
    0 0 6px rgba(34,211,238,0.6),
    0 0 18px rgba(34,211,238,0.4);
}

.description {
  font-size: 14px;
  line-height: 1.85;
  color: #cbd5f5;
  margin-bottom: 24px;
}

.image-box {
  background: #000;
  border-radius: 12px;
  padding: 16px;
  border: 1px solid rgba(34,211,238,0.4);
  box-shadow:
    inset 0 0 14px rgba(34,211,238,0.25),
    0 0 18px rgba(34,211,238,0.25);
  margin-bottom: 22px;
  text-align: center;
}

.image-box img {
  max-width: 100%;
  border-radius: 8px;
  cursor: pointer;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.image-box img:hover {
  transform: scale(1.02);
  box-shadow: 0 0 18px rgba(34,211,238,0.4);
}

.meta {
  font-size: 12px;
  color: #64748b;
}
</style>
</head>

<body>

<div class="challenge">
  <h1>Lunar Language</h1>

  <div class="description">
    Description: They say the moon speaks it's own language.
    Can you decipher the image and tell me what the moon is trying to say?
    <br><br>
 <div class="image-box">
    <a href="lunar.png" download>
      <img src="lunar.png" alt="Moon phase cipher (click to download)">
    </a>
  </div>
<br> 
    NB: Once you get the plaintext, make sure to wrap the flag part in a {}.
  </div>

 


</div>

</body>
</html>
