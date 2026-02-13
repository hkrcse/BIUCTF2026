<!DOCTYPE html>
<html>
<head>
<title>Packet Whisperer</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
body {
  background: radial-gradient(circle at top, #0f2027, #000);
  color: #e5e7eb;
  font-family: monospace;
  padding: 40px;
}

/* Container */
.container {
  max-width: 900px;
  margin: auto;
  text-align: center;
}

/* Main Card */
.card {
  background: linear-gradient(180deg, #020617, #000);
  padding: 35px;
  border-radius: 18px;
  border: 1px solid #1e293b;
  box-shadow: 0 0 35px rgba(56,189,248,.2);
  max-width: 600px;
  margin: auto;
  animation: glow 2s infinite alternate;
}

/* Title */
h2 {
  color: #38bdf8;
  text-shadow: 0 0 15px rgba(56,189,248,.6);
  margin-bottom: 20px;
}

/* Text */
p {
  color: #cbd5f5;
  margin-bottom: 15px;
  line-height: 1.6;
}

/* Download Button */
.download {
  display: inline-block;
  margin-top: 15px;
  padding: 12px 24px;
  border-radius: 999px;
  background: linear-gradient(90deg, #38bdf8, #0ea5e9);
  color: #000;
  font-weight: bold;
  text-decoration: none;
  transition: .25s;
  box-shadow: 0 0 18px rgba(56,189,248,.6);
}

.download:hover {
  transform: translateY(-2px);
  box-shadow: 0 0 28px rgba(56,189,248,.9);
}

/* Hint */
.hint {
  margin-top: 25px;
  color: #9ca3af;
  font-size: 14px;
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
  margin-bottom: 18px;
}

/* Glow animation */
@keyframes glow {
  from { box-shadow: 0 0 15px rgba(56,189,248,.15); }
  to   { box-shadow: 0 0 35px rgba(56,189,248,.45); }
}
</style>
</head>

<body>

<div class="container">

  <div class="card">

    <div class="badge">NETWORK • FORENSICS</div>

    <h2>📡 Packet Whisperer</h2>

    <p>
      A suspicious network capture was found on the system.<br>
      The attacker left something behind.
    </p>

    <p><b>Download the capture file and analyze it.</b></p>

    <a class="download" href="packet_whisperer.pcap" download>
      <i class="fa-solid fa-cloud-arrow-down"></i>
      Download packet_whisperer.pcap
    </a>

    <p class="hint">
      Hint: HTTP never truly hides.
    </p>

  </div>

</div>

</body>
</html>
