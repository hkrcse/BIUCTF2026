<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OSINT | Deep Freeze Extraction</title>

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <style>

        :root {

            --neon-pink: #ff00ff;

            --neon-cyan: #00ffff;

            --bg-dark: #050505;

            --panel-bg: rgba(10, 10, 15, 0.95);

        }



        body {

            background-color: var(--bg-dark);

            color: #fff;

            font-family: 'Share Tech Mono', monospace;

            display: flex;

            justify-content: center;

            align-items: center;

            min-height: 100vh;

            margin: 0;

            background-image: radial-gradient(circle at 2px 2px, rgba(0, 255, 255, 0.05) 1px, transparent 0);

            background-size: 40px 40px;

        }



        /* Scanline Overlay */

        body::after {

            content: " ";

            display: block;

            position: fixed;

            top: 0; left: 0; bottom: 0; right: 0;

            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.2) 50%);

            z-index: 10;

            background-size: 100% 4px;

            pointer-events: none;

        }



        .challenge-container {

            border: 2px solid var(--neon-cyan);

            box-shadow: 0 0 20px var(--neon-cyan);

            padding: 35px;

            max-width: 600px;

            background: var(--panel-bg);

            border-radius: 4px;

            position: relative;

            z-index: 5;

        }



        .header-box {

            text-align: center;

            margin-bottom: 25px;

            border-bottom: 1px solid #222;

            padding-bottom: 15px;

        }



        h1 {

            color: var(--neon-pink);

            text-shadow: 0 0 10px var(--neon-pink);

            text-transform: uppercase;

            letter-spacing: 4px;

            margin: 0;

            animation: flicker 4s infinite;

        }



        .status-tag {

            font-size: 0.7rem;

            color: var(--neon-cyan);

            background: rgba(0, 255, 255, 0.1);

            padding: 2px 8px;

            display: inline-block;

            margin-top: 10px;

            border: 1px solid var(--neon-cyan);

        }



        .intel-text {

            line-height: 1.6;

            margin: 20px 0;

            font-size: 0.95rem;

            color: #ccc;

        }



        .highlight { color: var(--neon-cyan); }

        .critical { color: var(--neon-pink); text-decoration: underline; }



        .evidence-frame {

            border: 1px solid #333;

            background: #000;

            padding: 10px;

            margin: 20px 0;

            position: relative;

        }



        .evidence-frame img {

            width: 100%;

            height: auto;

            display: block;

            filter: grayscale(30%) contrast(110%);

            transition: 0.3s;

        }



        .evidence-frame:hover img {

            filter: grayscale(0%) brightness(1.1);

        }



        .terminal-input-wrapper {

            display: flex;

            align-items: center;

            background: rgba(0, 0, 0, 0.6);

            border: 1px solid #444;

            padding: 12px;

            margin-top: 25px;

        }



        .terminal-input-wrapper span {

            color: var(--neon-pink);

            margin-right: 10px;

            font-weight: bold;

        }



        input {

            background: transparent;

            border: none;

            color: var(--neon-cyan);

            font-family: 'Share Tech Mono', monospace;

            width: 100%;

            outline: none;

            font-size: 1rem;

        }



        .btn-submit {

            width: 100%;

            margin-top: 15px;

            background: transparent;

            border: 1px solid var(--neon-pink);

            color: var(--neon-pink);

            padding: 12px;

            font-family: 'Share Tech Mono', monospace;

            text-transform: uppercase;

            cursor: pointer;

            transition: 0.2s;

        }



        .btn-submit:hover {

            background: var(--neon-pink);

            color: #000;

            box-shadow: 0 0 15px var(--neon-pink);

        }



        @keyframes flicker {

            0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% { opacity: 1; }

            20%, 22%, 24%, 55% { opacity: 0.6; }

        }



        .footer-note {

            font-size: 0.65rem;

            color: #555;

            text-align: center;

            margin-top: 20px;

        }

    </style>

</head>

<body>



<div class="challenge-container">

    <div class="header-box">

        <h1>Cordinate</h1>

        <div class="status-tag">SECURE CONNECTION // SOUTH_SECTOR_GRID</div>

    </div>



    <div class="intel-text">

        Intelligence reports a high-value establishment hidden in an unexpected sector. 

        A <span class="highlight">secret review</span> has been logged into the grid.

        <br><br>

        Extract the <span class="critical">GPS Metadata</span> from the local evidence file to triangulate the facility's exact coordinates.

    </div>



    <div class="evidence-frame">

        <img src="location.png" alt="SECURE_DATA_ENCRYPTED">

    </div>

</div>



</body>

</html>
