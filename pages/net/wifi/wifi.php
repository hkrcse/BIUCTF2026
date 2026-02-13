<link rel="stylesheet" href="../../assets/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
/* Page background */
body {
  background: radial-gradient(circle at top, #0f2027, #000);
}

/* Centered container */
.container {
  max-width: 900px;
  margin: auto;
  text-align: center;
}

/* Main challenge card */
.challenge {
  background: linear-gradient(180deg, #020617, #000);
  padding: 35px;
  border-radius: 18px;
  border: 1px solid #1e293b;
  box-shadow: 0 0 35px rgba(56,189,248,.25);
  animation: glow 2s infinite alternate;
}

/* Title */
h2 {
  color: #38bdf8;
  text-shadow: 0 0 15px rgba(56,189,248,.6);
  margin-bottom: 20px;
}

/* Paragraph text */
p {
  color: #cbd5f5;
  line-height: 1.6;
}

/* Download button */
.btn {
  display: inline-block;
  margin-top: 20px;
  padding: 12px 26px;
  border-radius: 999px;
  background: linear-gradient(90deg, #38bdf8, #0ea5e9);
  color: #000;
  font-weight: bold;
  box-shadow: 0 0 18px rgba(56,189,248,.6);
  transition: .25s;
}

.btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 0 28px rgba(56,189,248,.9);
}

/* Objective box */
.objective {
  margin-top: 30px;
  padding: 18px;
  border-radius: 14px;
  border: 1px dashed #38bdf8;
  color: #e5e7eb;
  box-shadow: inset 0 0 15px rgba(56,189,248,.25);
}

/* Badge */
.badge {
  display: inline-block;
  padding: 4px 14px;
  background: #38bdf8;
  color: #000;
  border-radius: 999px;
  font-size: 12px;
  font-weight: bold;
  margin-bottom: 15px;
}

/* Glow animation */
@keyframes glow {
  from { box-shadow: 0 0 15px rgba(56,189,248,.15); }
  to   { box-shadow: 0 0 35px rgba(56,189,248,.45); }
}
</style>

<div class="container">

  <div class="challenge">

    <div class="badge">WIRELESS • ATTACK</div>

    <h2>📡 Rogue Access Point</h2>

    <p>
      A student reported frequent Wi‑Fi disconnections on campus.<br>
      Security suspects a <b>rogue access point (evil twin)</b>.
    </p>

    <p>
      Download the captured wireless traffic and investigate:
    </p>

    <a href="capture.cap" download class="btn">
      <i class="fa-solid fa-wifi"></i>
      Download Capture File
    </a>

    <div class="objective">
      <b>🎯 Objective:</b><br>
      Identify the rogue AP and extract the flag.
    </div>

  </div>

</div>
