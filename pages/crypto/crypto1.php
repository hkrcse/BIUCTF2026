<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Neon Roman Cipher</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap');

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  background: radial-gradient(circle at top, #020617, #000000);
  font-family: 'Orbitron', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #e0f2fe;
}

.challenge {
  width: 700px;
  padding: 30px;
  border-radius: 16px;
  background: rgba(2, 6, 23, 0.85);
  box-shadow:
    0 0 10px #22c55e,
    0 0 25px rgba(34, 197, 94, 0.6),
    inset 0 0 15px rgba(34, 197, 94, 0.3);
  border: 2px solid #22c55e;
}

h1 {
  text-align: center;
  font-size: 28px;
  color: #22c55e;
  text-shadow:
    0 0 5px #22c55e,
    0 0 15px #22c55e;
  margin-bottom: 20px;
}

.story {
  font-size: 14px;
  line-height: 1.7;
  color: #bae6fd;
  margin-bottom: 25px;
  text-shadow: 0 0 6px rgba(56,189,248,0.3);
}

.cipher-box {
  background: #000;
  border-radius: 10px;
  padding: 18px;
  font-size: 16px;
  text-align: center;
  color: #facc15;
  letter-spacing: 1px;
  margin-bottom: 25px;
  border: 1px solid #facc15;
  box-shadow:
    0 0 8px #facc15,
    0 0 20px rgba(250,204,21,0.6);
}

.hint {
  padding: 12px;
  border-left: 4px solid #38bdf8;
  background: rgba(2,132,199,0.08);
  font-size: 13px;
  margin-bottom: 25px;
  color: #e0f2fe;
  box-shadow: 0 0 10px rgba(56,189,248,0.3);
}

.input-area {
  display: flex;
  gap: 10px;
}

input {
  flex: 1;
  padding: 12px;
  background: #020617;
  border: 1px solid #22c55e;
  border-radius: 8px;
  color: #e0f2fe;
  font-family: 'Orbitron', sans-serif;
  outline: none;
  box-shadow: inset 0 0 10px rgba(34,197,94,0.3);
}

input::placeholder {
  color: #64748b;
}

button {
  padding: 12px 20px;
  font-family: 'Orbitron', sans-serif;
  background: #22c55e;
  color: #022c22;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
  box-shadow:
    0 0 10px #22c55e,
    0 0 25px rgba(34,197,94,0.7);
  transition: 0.2s ease-in-out;
}

button:hover {
  transform: scale(1.05);
  box-shadow:
    0 0 15px #22c55e,
    0 0 35px rgba(34,197,94,0.9);
}

.footer {
  margin-top: 20px;
  text-align: center;
  font-size: 12px;
  color: #94a3b8;
  text-shadow: 0 0 5px rgba(148,163,184,0.3);
}
</style>
</head>

<body>

<div class="challenge">
  <h1>⚔️ NEON ROMAN SECRETS 🥗</h1>

  <div class="story">
  <p> Something something Roman general something something makes amazing salad!! He also has a secret message for you btw: </p>
  
   <div class="cipher-box">
    VCOWNZ{wu3m4l_w1jb34_c5_7b3_g057_v45cw_w1jb3l}
  </div>
 <p> Could you please uncover his secrets?</p>
  </div>

  <div class="hint">
    💡 Hint: Romans didn’t use computers… but they loved shifting things.
  </div>


</div>

</body>
</html>
