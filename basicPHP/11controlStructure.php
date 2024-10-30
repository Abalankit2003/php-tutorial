<html>

    <head></head>
    <body>
        // if / else / elseif / else if
        # use elseif when embedded in html 
        <?php $x = 45 ?>

        <?php if ($x >= 90): ?>
            <strong style="color : green;">A</strong>
        <?php elseif ($x >= 80): ?>
            <strong>B</strong>
        <?php elseif ($x >= 70): ?>
            <strong>C</strong>
        <?php elseif ($x >= 60): ?>
            <strong>D</strong>
        <?php else : ?>
            <strong style="color : red;">F</strong>
        <?php endif ?>
    </body>

</html>
