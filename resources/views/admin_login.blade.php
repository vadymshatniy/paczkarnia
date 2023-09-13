@extends('layouts.app')

@section('title')
    Login for admin
@endsection

<?php

// (A) START SESSION
session_start();

// (B) PROCESS LOGIN
if (isset($_POST["user"]) && !isset($_SESSION["user"])) {

    // (B1) USERS & PASSWORDS - SET YOUR OWN !
    $users = [
        "admin" => "1111"
    ];

    // (B2) CHECK & VERIFY
    if (isset($users[$_POST["user"]]) && $users[$_POST["user"]] == $_POST["password"]) {
        $_SESSION["user"] = $_POST["user"];
    }

    // (B3) FAILED LOGIN FLAG
    if (!isset($_SESSION["user"])) {
        $failed = true;
    }
}

// (C) REDIRECT TO HOME PAGE IF SIGNED IN - SET YOUR OWN !
if (isset($_SESSION["user"])) {
    header("Location: /admin_index");
    exit();
}

// (B) LOGIN PAGE HTML
    if (isset($failed)) { ?>
<div id="login-bad">Invalid user or password.</div>
<?php } ?>

@section('content')
    <h2>Login page for admin personel</h2>

    {{-- Login form --}}
    <form id="login-form" method="post" target="_self">
        @csrf
        <h1>PLEASE SIGN IN</h1>
        <label for="user">User</label>
        <input type="text" name="user" required>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <input type="submit" value="Sign In">
    </form>
@endsection
