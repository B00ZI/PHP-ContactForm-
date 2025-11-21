
<body>
    <h1>Contact Me</h1>

    <form method="POST" action="formHandler.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value= <?= $oldName ?>>
        <?php
        echo $nameError ? "<p style='color : red'>$nameError</p>" : "";
        ?>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value= <?= $oldEmail ?>>
        <?php
        echo $emailError ? "<p style='color : red'>$emailError</p>" : "";
        ?>

        <!-- <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" >
         -->
        <label for="message">Message:</label>
        <textarea id="message" name="message" ><?= $oldMessage ?></textarea>
        <?php
        echo $messageError ? "<p style='color : red'>$messageError</p>" : "";
        ?>
        <button type="submit">Send</button>
    </form>
</body>

</html>