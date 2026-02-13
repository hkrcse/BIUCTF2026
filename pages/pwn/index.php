<!DOCTYPE html>
<html>
<head>
  <title>Password Challenge</title>
  <link rel="stylesheet" href="../../../assets/css/main.css">
</head>

<style>
  body {
    background: radial-gradient(circle at top, #120018, #000);
    color: #e6e6ff;
    font-family: 'Courier New', monospace;
  }

  .container {
    max-width: 800px;
    margin: 70px auto;
    padding: 30px;
    background: rgba(15, 5, 25, 0.9);
    border: 2px solid #b84dff;
    border-radius: 14px;
    box-shadow:
      0 0 18px #b84dff,
      inset 0 0 12px #b84dff;
  }

  h2 {
    text-align: center;
    color: #b84dff;
    text-shadow: 0 0 14px #b84dff;
    margin-bottom: 12px;
  }

  p {
    color: #d7c8ff;
    line-height: 1.6;
    text-align: center;
  }

  .badge {
    display: inline-block;
    margin: 10px 6px 20px;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 0.85em;
    background: #b84dff;
    color: #000;
    box-shadow: 0 0 10px #b84dff;
  }

  .btn {
    display: block;
    width: fit-content;
    margin: 25px auto;
    padding: 12px 22px;
    border: 2px solid #b84dff;
    background: transparent;
    color: #b84dff;
    font-weight: bold;
    text-decoration: none;
    border-radius: 10px;
    box-shadow: 0 0 14px #b84dff;
    transition: all 0.25s ease;
  }

  .btn:hover {
    background: #b84dff;
    color: #000;
    box-shadow: 0 0 26px #b84dff;
  }

  pre {
    margin-top: 30px;
    padding: 16px;
    background: #000;
    color: #39ff14;
    border-left: 4px solid #39ff14;
    box-shadow: 0 0 10px #39ff14;
    font-size: 0.95em;
    border-radius: 6px;
  }
</style>

<body>

<div class="container">
  <h2>Password Verification</h2>
  <span class="badge">REVERSE</span>

  <p>
    This binary validates an exam password locally.<br>
    Can you discover it?
  </p>

  <a href="password" download class="btn">Download Binary</a>

  <pre>
Hint:
Compiled ≠ Encrypted
  </pre>
</div>

</body>
</html>
