<?php

if (isset($_POST['submit'])) {
    $result = $_POST['num1'] * $_POST['num2'];
}
?>
<html>

<body>
    <form action="#" method="post">
        Num1:<input name="num1"><br>
        Num2:<input name="num2">
        Answer: <input value="<?php if (isset($result)) echo $result ?>">
        <input type="submit" name="submit">
        <input value="">
    </form>
</body>

</html>