<?php


namespace Ucc;


final class Session
{
    public static function start()
    {
        if (isset($_SERVER['HTTP_SESSION_ID'])) {
            session_id($_SERVER['HTTP_SESSION_ID']);
        }
        session_start();
    }

    public static function destroy()
    {
        session_unset();
        session_destroy();
    }

    public static function set(string $key, string $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get(string $key): ?string
    {
        return $_SESSION[$key] ?? null;
    }
}