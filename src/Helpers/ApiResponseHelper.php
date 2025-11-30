<?php

use Illuminate\Http\JsonResponse;

if (!function_exists('apiResponse')) {
    function apiResponse(
        $data = null,
        $message = null,
        $status = true,
        $code = 200,
        $errors = null,
        $pagination = null
    ): JsonResponse {

        return response()->json([
            'status'     => $status,
            'message'    => $message ?? config('api-response.default_message'),
            'data'       => $data,
            'errors'     => $errors,
            'pagination' => $pagination
        ], $code);
    }
}
