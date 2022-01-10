<?php

namespace Ucc\Http;

trait JsonResponseTrait
{
    public function json($data, int $statusCode = 200): bool
    {
        http_response_code($statusCode);
        header('Session-Id: ' . session_id());
        header('Content-Type: application/json;charset=utf-8');
        $body = json_encode($data);
        echo($body);
        if (json_last_error() === JSON_ERROR_NONE) {
            return true;
        }

        return false;
    }
}