<?php
 if (empty($_SESSION['login']) or empty($_SESSION['id_user'])){
     if($_SESSION['registration'])
     {
        echo <<<HERE
        <form action="/scripts/save_user.php" method="post">
        <p>
            <label>Ваш логін:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label>Вашt ім'я:<br></label>
            <input name="name" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label>Ваш пароль:<br></label>
            <input name="password" type="password" size="15" maxlength="15">
        </p>

        <p>
            <label>Ваш пароль ще раз:<br></label>
            <input name="password_two" type="password" size="15" maxlength="15">
        </p>
        <p>
            <input type="submit" name="submit" value="Зареєструватись">
        </p>
HERE;
        if (!empty($_SESSION['error']))
        {
        echo "<p>{$_SESSION['error']}</p>";
        }
        echo <<<HERE
        </form>
        <p>
            <a href="/scripts/in_form.php">Ввійти</a>
        <p> 
HERE;

     }
     else {
    echo <<<HERE
    <form action="/scripts/test_reg.php" method="post">
        <p>
            <label>Ваш логін:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label>Ваш пароль:<br></label>
            <input name="password" type="password" size="15" maxlength="15">
        </p>
        <p>
            <input type="submit" name="submit" value="Войти">
        </p>
HERE;
    if (!empty($_SESSION['error']))
    {
    echo "<p>{$_SESSION['error']}</p>";
    }
echo <<<HERE
    </form>
    <p>
        <a href="/scripts/reg_form.php">Зареєструватись</a>
    <p> 
HERE;
     }
    }
    else {
        echo <<<HERE
    <p>
        Ви ввійшли на сайт як {$_SESSION['name']}
    </p>
    <form autocomplete="on" class="log_out" action="/scripts/exit.php">
        <input type="submit" value="Переглянути мої відео">
    </form>
    <form autocomplete="on" class="log_out" action="/scripts/exit.php">
        <input type="submit" value="Переглянути мої групи відео">
    </form>
    <form autocomplete="on" class="log_out" action="/scripts/update_name.php" method="post">
        <input name="name" type="text" class="updete_name" size="15" maxlength="15">
        <input type="submit" value="Змінити ім'я">
    </form>
HERE;
    if (!empty($_SESSION['error']))
    {
    echo "<p>{$_SESSION['error']}</p>";
    }
    if($_SESSION['status'] == 'a' or $_SESSION['status'] == 'm')
    {
    echo <<<HERE
    <form autocomplete="on" class="create_group" action="/scripts/exit.php">
        <input type="submit" value="Додати групу з відео">
    </form>
    <form autocomplete="on" class="create_video" action="/scripts/exit.php">
    <input type="submit" value="Додати нове відео">
</form>
HERE;
    }
    if($_SESSION['status'] == 'a')
    {
    echo <<<HERE
    <form autocomplete="on" class="manage_users" action="/scripts/exit.php">
        <input type="submit" value="Переглянути список користувачів">
    </form>
HERE;
    }
echo <<<HERE
    <form autocomplete="on" class="log_out" action="/scripts/exit.php">
        <input type="submit" value="Вийти">
    </form>
HERE;
    }
?>