<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Would You Like to Go Out?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            position: relative;
        }
        h1 {
            color: #333;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            position: absolute;
        }
        #yesBtn {
            background-color: #4CAF50;
            color: white;
            border: none;
            left: 50%; /* Centered initially */
            transform: translateX(-50%);
        }
        #noBtn {
            background-color: #f44336;
            color: white;
            border: none;
            left: calc(50% + 110px); /* Adjust as needed */
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
    <h1>Would you like to go out with me?</h1>
    <button id="yesBtn" onclick="alert('Great! Looking forward to it!')">Yes</button>
    <button id="noBtn" onclick="moveButton()">No</button>

    <script>
        function moveButton() {
            var yesButton = document.getElementById('yesBtn');
            var noButton = document.getElementById('noBtn');

            // Set initial position of "No" button next to "Yes" button
            noButton.style.top = yesButton.offsetTop + 'px';
            
            // Move "No" button to a random position
            var maxX = window.innerWidth - noButton.clientWidth;
            var maxY = window.innerHeight - noButton.clientHeight;

            var newX = Math.floor(Math.random() * maxX);
            var newY = Math.floor(Math.random() * maxY);

            noButton.style.left = newX + 'px';
            noButton.style.top = newY + 'px';
        }
    </script>
</body>
</html>

