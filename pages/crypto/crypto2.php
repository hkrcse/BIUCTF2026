<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Italian Cipher Challenge</title>

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

/* Challenge container */
.challenge {
  width: 780px;
  padding: 32px;
  border-radius: 14px;
  background: rgba(2, 6, 23, 0.85);
  border: 1px solid rgba(34,211,238,0.35);
  box-shadow:
    0 0 20px rgba(34,211,238,0.15),
    inset 0 0 15px rgba(34,211,238,0.08);
}

/* Title */
.challenge h1 {
  margin: 0 0 18px;
  font-size: 24px;
  color: #22d3ee;
  letter-spacing: 1.5px;
  text-shadow:
    0 0 6px rgba(34,211,238,0.6),
    0 0 18px rgba(34,211,238,0.4);
}

/* Description */
.description {
  font-size: 14px;
  line-height: 1.8;
  color: #cbd5f5;
}

/* Cipher box */
.cipher {
  margin-top: 22px;
  padding: 18px;
  background: #000000;
  border-radius: 10px;
  font-size: 15px;
  letter-spacing: 1px;
  color: #22d3ee;
  border: 1px solid rgba(34,211,238,0.4);
  box-shadow:
    inset 0 0 10px rgba(34,211,238,0.25),
    0 0 16px rgba(34,211,238,0.2);
  word-break: break-all;
}

/* Meta */
.meta {
  margin-top: 18px;
  font-size: 12px;
  color: #64748b;
}
</style>
</head>

<body>

<div class="challenge">
  <h1>Italian Cipher Mystery</h1>

  <div class="description">
    Description: The name of this challenge hints at a certain cipher invented by an Italian.
    Can you please recover the secret it holds?
    <br><br>
    NMMUBR{Az0_15_7z3_j357_rs07t4d13z_1z_7l3_o0jtP??}.
    <br><br>
    Note that the key for this is the last name of the best footballer of our current generation.
  </div>

  <div class="cipher">
    NMMUBR{Az0_15_7z3_j357_rs07t4d13z_1z_7l3_o0jtP??}
  </div>
</div>

</body>
</html>
