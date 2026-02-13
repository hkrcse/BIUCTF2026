<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>BIUCTF Arena</title>

<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root {
  --bg: #0b0f14;
  --card: #121821;
  --accent: #00e5ff;
  --text: #cfd8dc;
  --danger: #ff5252;
  --success: #00e676;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'JetBrains Mono', monospace;
}

body {
  background: radial-gradient(circle at top, #101720, #05070a);
  color: var(--text);
  min-height: 100vh;
}

/* ===== CONTAINER ===== */
.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
  padding: 40px 0;
}

/* ===== HEADER ===== */
header {
  text-align: center;
  margin-bottom: 60px;
  animation: fadeDown 1s ease;
}

header h1 {
  font-size: 3rem;
  color: var(--accent);
  text-shadow: 0 0 20px rgba(0,229,255,0.4);
}

header p {
  opacity: 0.7;
  margin-top: 10px;
}

/* ===== SECTION ===== */
h2 {
  margin: 50px 0 20px;
  color: #ffffff;
  font-size: 1.6rem;
  display: flex;
  align-items: center;
  gap: 10px;
}

/* ===== GRID ===== */
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: 20px;
}

/* ===== CARD ===== */
.card {
  background: linear-gradient(180deg, #121821, #0b0f14);
  border-radius: 14px;
  padding: 22px;
  position: relative;
  text-decoration: none;
  color: var(--text);
  overflow: hidden;
  transition: transform .3s ease, box-shadow .3s ease;
  animation: fadeUp .8s ease forwards;
}

.card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg, transparent, rgba(0,229,255,0.15), transparent);
  opacity: 0;
  transition: opacity .3s;
}

.card:hover::before {
  opacity: 1;
}

.card:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 0 0 25px rgba(0,229,255,0.25);
}

.card i {
  font-size: 2rem;
  color: var(--accent);
}

.badge {
  position: absolute;
  top: 15px;
  right: 15px;
  background: rgba(0,229,255,0.15);
  color: var(--accent);
  padding: 4px 10px;
  border-radius: 20px;
  font-size: 0.7rem;
}

.card h3 {
  margin-top: 15px;
  font-size: 1.2rem;
  color: #fff;
}

.card p {
  font-size: 0.85rem;
  opacity: 0.7;
  margin: 10px 0 20px;
}

.btn {
  display: inline-block;
  padding: 6px 14px;
  border-radius: 20px;
  font-size: 0.8rem;
  background: rgba(0,229,255,0.15);
  color: var(--accent);
}

/* ===== FOOTER ===== */
.footer {
  text-align: center;
  margin-top: 80px;
  opacity: 0.5;
  font-size: 0.8rem;
}

/* ===== ANIMATIONS ===== */
@keyframes fadeUp {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeDown {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>
</head>

<body>

<div class="container">

<header>
  <h1>⚔️ BIUCTF ARENA ⚔️</h1>
  <p>Educational Cybersecurity Challenges • 3 Hours • No AI</p>
</header>

<!-- WEB -->
<h2><i class="fa-solid fa-globe"></i> Web Security</h2>

<div class="grid">

<a href="pages/web/student.php" class="card">
  <span class="badge">Task-01: SQLi-I</span>
  <i class="fa-solid fa-database"></i>
  <h3>Student Records</h3>
  <p>Extract hidden data using SQL injection</p>
  <span class="btn">Exploit</span>
</a>


<a href="pages/web/faculty.php" class="card">
  <span class="badge">Task-02: SQLi-II</span>
  <i class="fa-solid fa-users"></i>
  <h3>Faculty Directory</h3>
  <p>Search faculty profiles</p>
  <span class="btn">Enter</span>
</a>
<a href="pages/web/results.php" class="card">
  <span class="badge">Task-03: SQLi-III</span>
  <i class="fa-solid fa-database"></i>
  <h3>Student Results</h3>
  <p>No output, only truth</p>
  <span class="btn">Enter</span>
</a>

<a href="pages/web/feedback.php" class="card">
  <span class="badge">Task-04: XSS-I</span>
  <i class="fa-solid fa-comment-dots"></i>
  <h3>Course Feedback</h3>
  <p>Your words stay forever</p>
  <span class="btn">Enter</span>
</a>

<a href="pages/web/objection.php" class="card">
  <span class="badge">Task-05: XSS-II</span>
  <i class="fa-solid fa-mask"></i>
  <h3>Objection Portal</h3>
  <p>Reflections can be dangerous</p>
  <span class="btn">Enter</span>
</a>

<a href="pages/web/idor.php" class="card">
  <span class="badge">Task-06: IDOR</span>
  <i class="fa-solid fa-id-card"></i>
  <h3>Student API</h3>
  <p>Are IDs really private?</p>
  <span class="btn">Enter</span>
</a>
<a href="pages/web/obfuscated.php" class="card">
  <span class="badge">Task-07: Obfuscated</span>
  <i class="fa-solid fa-user-secret"></i>
  <h3>Access Admin</h3>
  <p>Trust is dangerous</p>
  <span class="btn">Enter</span>
</a>
</div>

<!-- AUTH -->
<h2><i class="fa-solid fa-user-shield"></i> Authentication & Logic</h2>
<div class="grid">

<a href="pages/auth/login.php" class="card">
  <span class="badge">Task-08: Auth Bypass</span>
  <i class="fa-solid fa-key"></i>
  <h3>Login Portal</h3>
  <p>Who are you really?</p>
  <span class="btn">Enter</span>
</a>

<a href="pages/auth/login2.php" class="card">
  <span class="badge">Task-09: Bruteforce</span>
  <i class="fa-solid fa-bolt"></i>
  <h3>Rate-less Login</h3>
  <p>No rate limit protection</p>
  <span class="btn">Attack</span>
</a>

</div>

<!-- CRYPTO -->
<h2><i class="fa-solid fa-lock"></i> Cryptography</h2>
<div class="grid">

<a href="pages/crypto/crypto1.php" class="card">
  <span class="badge">Task-10: Crypto-I</span>
  <i class="fa-solid fa-chess-rook"></i>
  <h3>Roman Cipher</h3>
  <p>Shift the letters. Uncover the general’s secret.</p>
  <span class="btn">Decrypt</span>
</a>
<a href="pages/crypto/crypto2.php" class="card">
  <span class="badge">Task-11: Crypto-II</span>
  <i class="fa-solid fa-user-shield"></i>
  <h3>Italian Cipher</h3>
  <p>A classic cipher with a modern twist</p>
  <span class="btn">Decrypt</span>
</a>

<a href="pages/crypto/crypto3.php" class="card">
  <span class="badge">Task-12: CRYPTO-III</span>
  <i class="fa-solid fa-moon"></i>
  <h3>Lunar Language</h3>
  <p>Moon phase cipher</p>
  <span class="btn">Decode</span>
</a>
<a href="pages/crypto/crypto4.php" class="card">
  <span class="badge">Task-13: CRYPTO-IV</span>
  <i class="fa-solid fa-code"></i>
  <h3>Neon Cipher</h3>
  <p>Mixed ciphers & encodings</p>
  <span class="btn">Decode</span>
</a>



</div>

<!-- ================= OSINT ================= -->
<h2><i class="fa-solid fa-user-secret"></i> OSINT</h2>
<div class="grid">

<a href="pages/osint/osint1.php" class="card">
  <span class="badge">Task-14: OSINT-I</span>
  <i class="fa-solid fa-utensils"></i>
  <h3>Chicken Chaap</h3>
  <p>Track a secret review through the streets of Mirpur.</p>
  <span class="btn">Locate Signal</span>
</a>

<a href="pages/osint/osint2.php" class="card">
  <span class="badge">Task-15: OSINT-II</span>
  <i class="fa-solid fa-snowflake"></i>
  <h3>Deep Freeze</h3>
  <p>Triangulate coordinates from an encrypted image in the South Sector.</p>
  <span class="btn">Initialize Searching</span>
</a>

<a href="pages/osint/osint3.php" class="card">
  <span class="badge">Task-16: OSINT-III</span>
  <i class="fa-solid fa-share-nodes"></i>
  <h3>Stalking the Advisor</h3>
  <p>Trace the advisor’s online trail.</p>
  <span class="btn">Start Stalking</span>
</a>

</div>


<!-- ================= BINARY ================= -->
<h2><i class="fa-solid fa-bug"></i> Binary Exploitation</h2>

<div class="grid">

<a href="pages/pwn/index.php" class="card">
  <span class="badge">Task-17: PWN-I</span>
  <i class="fa-solid fa-terminal"></i>
  <h3>Attendance Binary</h3>
  <p>Legacy C program</p>
  <span class="btn">Exploit</span>
</a>

<a href="pages/pwn/challenge2/overflow.php" class="card">
  <span class="badge">Task-18: PWN-II</span>
  <i class="fa-solid fa-skull-crossbones"></i>
  <h3>Easy Overflow</h3>
  <p>Smash the stack, become admin</p>
  <span class="btn">Exploit</span>
</a>

</div>

<!-- NETWORK -->
<h2><i class="fa-solid fa-network-wired"></i> Network Security</h2>
<div class="grid">

<a href="pages/net/packet_whisper.php" class="card">
  <span class="badge">Task-19: PCAP</span>
  <i class="fa-solid fa-wave-square"></i>
  <h3>Campus Network</h3>
  <p>Hidden services in packets</p>
  <span class="btn">Analyze</span>
</a>

<a href="pages/net/wifi/wifi.php" class="card">
  <span class="badge">Task-20: Wi-Fi</span>
  <i class="fa-solid fa-wifi"></i>
  <h3>Rogue Access Point</h3>
  <p>Evil twin hides in the air</p>
  <span class="btn">Analyze</span>
</a>

</div>

<div style="
  margin-top:40px;
  padding:14px 0;
  text-align:center;
  font-size:1rem;
  color:#9ffcff;
  background:#020617;
  border-top:1px solid #0ea5e9;
  text-shadow: 0 0 6px #0ea5e9, 0 0 12px #0ea5e9;
">
  <span>Organized by</span>

  <strong style="
    margin-left:6px;
    color:#67e8f9;
    text-shadow:
      0 0 6px #22d3ee,
      0 0 12px #22d3ee,
      0 0 24px #0ea5e9;
  ">
    AI Community, BUBT
  </strong>

   <!-- inline animation -->
  <style>
    @keyframes pulseGlow {
      0% {
        transform: scale(1);
        filter: drop-shadow(0 0 4px #22d3ee)
                drop-shadow(0 0 8px #0ea5e9);
      }
      100% {
        transform: scale(1.15);
        filter: drop-shadow(0 0 10px #67e8f9)
                drop-shadow(0 0 20px #22d3ee)
                drop-shadow(0 0 30px #0ea5e9);
      }
    }
  </style>
</div>


</div>

</body>
</html>
