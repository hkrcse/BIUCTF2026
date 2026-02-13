# BIUCTF2026

[![GitHub Repo](https://img.shields.io/badge/repo-BIUCTF2026-blue)](https://github.com/hkrcse/BIUCTF2026)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)
[![Kali Linux](https://img.shields.io/badge/platform-KaliLinux-orange)](#)

BIUCTF2026 is a local web application challenge. This guide will help you set it up on your **Kali Linux** machine.

---

## 🚀 Prerequisites

Before you start, make sure you have installed:

- [Git](https://git-scm.com/)  
- Apache2  
- MySQL / MariaDB


<h1>BIUCTF2026 Setup Guide (Kali Linux)</h1>

<p>Follow these steps to get <strong>BIUCTF2026</strong> running on your local Kali Linux environment.</p>

<h2>Prerequisites</h2>
<ul>
    <li>Git</li>
    <li>Apache2</li>
    <li>MySQL / MariaDB</li>
</ul>

<h2>Step 1 — Clone the Repository</h2>
<pre><code>git clone &lt;paste-this-repo-link&gt;</code></pre>

<h2>Step 2 — Switch to Root (Optional)</h2>
<pre><code>sudo su</code></pre>
<p>Enter your password when prompted.</p>

<h2>Step 3 — Start Required Services</h2>
<pre><code>systemctl start apache2
systemctl start mysql</code></pre>

<h2>Step 4 — Import Database</h2>
<pre><code>mysql &lt; BIUCTF2026/config/biuctf.sql</code></pre>
<p>This will create the necessary database and tables.</p>

<h2>Step 5 — Move Project to Web Directory</h2>
<pre><code>mv -r BIUCTF2026 /var/www/html</code></pre>

<h2>Step 6 — Set Correct Permissions</h2>
<pre><code>chown -R www-data:www-data /var/www/html/BIUCTF2026</code></pre>
<p>This ensures Apache has proper access.</p>

<h2>Step 7 — Access the Application</h2>
<p>Open your browser and go to:</p>
<pre><code>http://localhost/BIUCTF2026</code></pre>
<p>You should see the <strong>BIUCTF2026</strong> application running.</p>

<div class="note">
    <strong>Note:</strong>
    <ul>
        <li>Make sure Apache2 and MySQL are running whenever you want to access the project.</li>
        <li>Adjust permissions if necessary for other users.</li>
    </ul>
</div>

</body>
</html>
