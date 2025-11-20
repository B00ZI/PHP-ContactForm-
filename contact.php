<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #ddd;
            text-align: center;
            margin-bottom: 25px;
        }
        body {
            min-height: fit-content;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #333;
        }
        form {
            margin: auto;
            width: 400px;
            background: #ddd;
            padding: 20px 30px;
            border-radius: 8px;
            border: #000 2px solid ;
            
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #333;
            border-radius: 4px;
            background-color: #f1f1f1ff;
            outline: none;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        button {
            width: 50%;
            
            margin-left: auto;

            background: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
            background: #494e52ff;
        }
    </style>
</head>
<body>
    <h1>Contact Me</h1>
    
    <form method="POST" action="formHandler.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" >
        
        <!-- <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" >
         -->
        <label for="message">Message:</label>
        <textarea id="message" name="message" ></textarea>
        
        <button type="submit">Send</button>
    </form>
</body>
</html>

<?php

?>