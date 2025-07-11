<?php


class LoginView{

    public function show(){
        echo '<h1>Login</h1>';
        echo '<form method="post" action="index.php?controller=login&action=authenticate">';
        echo '<label for="username">Username:</label>';
        echo '<input type="text" id="username" name="username" required>';
        echo '<br>';
        echo '<label for="password">Password:</label>';
        echo '<input type="password" id="password" name="password" required>';
        echo '<br>';
        echo '<input type="submit" value="Login">';
        echo '</form>';
    }

}