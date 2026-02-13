<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CTF | Chicken Chaap</title>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');



        :root {

            --neon-pink: #ff2d95;

            --neon-cyan: #05ffa1;

            --bg-color: #0a0a0c;

            --panel-bg: rgba(20, 20, 25, 0.9);

        }



        body {

            background-color: var(--bg-color);

            color: #e0e0e0;

            font-family: 'Share Tech Mono', monospace;

            display: flex;

            justify-content: center;

            align-items: center;

            min-height: 100vh;

            margin: 0;

            overflow: hidden;

        }



        /* Scanline Overlay */

        body::before {

            content: " ";

            display: block;

            position: absolute;

            top: 0; left: 0; bottom: 0; right: 0;

            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.1) 50%), 

                        linear-gradient(90deg, rgba(255, 0, 0, 0.03), rgba(0, 255, 0, 0.01), rgba(0, 0, 255, 0.03));

            z-index: 10;

            background-size: 100% 3px, 3px 100%;

            pointer-events: none;

        }



        .challenge-card {

            width: 90%;

            max-width: 550px;

            background: var(--panel-bg);

            border: 2px solid var(--neon-cyan);

            box-shadow: 0 0 20px rgba(5, 255, 161, 0.2);

            padding: 30px;

            position: relative;

            z-index: 5;

        }



        .header {

            text-align: center;

            margin-bottom: 25px;

        }



        h1 {

            color: var(--neon-pink);

            text-shadow: 0 0 10px var(--neon-pink);

            text-transform: uppercase;

            letter-spacing: 4px;

            margin: 0;

            font-size: 2rem;

            animation: flicker 4s infinite;

        }



        .tagline {

            color: var(--neon-cyan);

            font-size: 0.9rem;

            opacity: 0.8;

        }



        .description {

            line-height: 1.6;

            background: rgba(0, 0, 0, 0.3);

            padding: 20px;

            border-left: 4px solid var(--neon-pink);

            margin-bottom: 25px;

            font-size: 1.1rem;

        }



        .description strong {

            color: var(--neon-cyan);

        }



        .image-container {

            width: 100%;

            border: 1px solid #333;

            margin-bottom: 25px;

            background: #000;

        }



        .image-container img {

            width: 100%;

            display: block;

            opacity: 0.9;

            transition: opacity 0.3s;

        }



        .image-container img:hover {

            opacity: 1;

        }



        .input-group {

            display: flex;

            gap: 10px;

        }



        input {

            flex-grow: 1;

            background: #111;

            border: 1px solid var(--neon-cyan);

            padding: 12px;

            color: var(--neon-cyan);

            font-family: 'Share Tech Mono', monospace;

            outline: none;

        }



        button {

            background: var(--neon-pink);

            border: none;

            color: white;

            padding: 0 20px;

            cursor: pointer;

            font-family: 'Share Tech Mono', monospace;

            text-transform: uppercase;

            font-weight: bold;

            transition: 0.2s;

        }



        button:hover {

            background: #fff;

            color: var(--neon-pink);

            box-shadow: 0 0 15px var(--neon-pink);

        }



        @keyframes flicker {

            0%, 18%, 22%, 25%, 53%, 57%, 100% { opacity: 1; }

            20%, 24%, 55% { opacity: 0.7; }

        }

    </style>

</head>

<body>



<div class="challenge-card">

    <div class="header">

        <h1>Chicken Chaap</h1>

    </div>



    <div class="description">

        There's this famous restaurant somewhere in <strong>Mirpur</strong> that provides cheap, yet flavorful cuisine. I have left a <strong>secret review</strong> about them somewhere in Google. Please find it out!

    </div>



    <div class="image-container">

        <img src="food_mirpur.jpg" alt="Evidence_Clue_02.jpg">

    </div>





</div>



</body>

</html>
