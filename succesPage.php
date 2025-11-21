<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #dfffe0ff;
        }
        .success-card {
            background-color: #b1e7b1ff;
            border: 1px solid #66cc66;
            border-radius: 8px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            max-width: 400px;
            margin: 20vh auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .icon-container {
            background-color: #4CAF50;
            /* Darker green for icon background */
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .success-icon {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .content h2 {
            color: #333;
            margin-top: 0;
            margin-bottom: 5px;
        }

        .content p {
            color: #555;
            margin-bottom: 15px;
        }

   
    </style>
</head>

<body>
    <div class="success-card">
        <div class="icon-container">
            <span class="success-icon">&#10003;</span> 
        </div>
        <div class="content">
            <h2>Success!</h2>
            <p>Your form was submited successfully.</p>
        </div>
    </div>
</body>

</html>