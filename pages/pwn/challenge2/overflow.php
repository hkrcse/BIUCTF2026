<link rel="stylesheet" href="../../assets/css/main.css">

<style>
  body {
    background: radial-gradient(circle at top, #0f2027, #000);
    color: #e0e0e0;
    font-family: 'Courier New', monospace;
  }

  .container {
    max-width: 850px;
    margin: 60px auto;
    padding: 30px;
    background: rgba(10, 10, 25, 0.85);
    border: 2px solid #00fff7;
    box-shadow: 0 0 20px #00fff7, inset 0 0 10px #00fff7;
    border-radius: 14px;
  }

  h2 {
    text-align: center;
    color: #00fff7;
    text-shadow: 0 0 12px #00fff7;
    margin-bottom: 10px;
  }

  h3 {
    margin-top: 30px;
    color: #ff2efc;
    text-shadow: 0 0 8px #ff2efc;
  }

  p, li {
    color: #cfd8ff;
    line-height: 1.6;
  }

  .badge {
    display: inline-block;
    margin: 8px 6px;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.85em;
    color: #000;
    background: #00fff7;
    box-shadow: 0 0 10px #00fff7;
  }

  ul {
    margin-left: 20px;
  }

  .btn {
    display: inline-block;
    margin-top: 12px;
    padding: 10px 18px;
    color: #00fff7;
    border: 2px solid #00fff7;
    background: transparent;
    text-decoration: none;
    font-weight: bold;
    border-radius: 8px;
    box-shadow: 0 0 12px #00fff7;
    transition: all 0.25s ease;
  }

  .btn:hover {
    background: #00fff7;
    color: #000;
    box-shadow: 0 0 25px #00fff7;
  }

  code {
    display: inline-block;
    padding: 6px 10px;
    background: #000;
    color: #39ff14;
    border: 1px solid #39ff14;
    box-shadow: 0 0 8px #39ff14;
    border-radius: 6px;
  }
</style>

<div class="container">
  <h2>Easy Overflow</h2>

  <span class="badge">Binary Exploitation</span>
  <span class="badge">Easy</span>

  <p>
    A simple login binary checks whether you are an admin.
    Can you overwrite the right variable and gain access?
  </p>

  <h3>Files</h3>
  <a class="btn" href="overflow" download>
    Download Binary
  </a>

  <h3>Goal</h3>
  <ul>
    <li>Exploit the buffer overflow</li>
    <li>Trigger admin access</li>
    <li>Retrieve the flag</li>
  </ul>

  <h3>Flag Format</h3>
  <code>flag{...}</code>
</div>
