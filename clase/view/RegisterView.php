<?php

class RegisterView{
    public function __construct(){}

    public function show(){
        echo "<h1>Register</h1>";

        echo '
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Register</button>
            </form>
        ';
    }
}