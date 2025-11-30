<?php

namespace MichaelOrenda\ApiResponse\Traits;

trait ApiResponseTrait
{
    /** -------------------------
     * SUCCESS RESPONSES
     * ------------------------*/
    public function success($data = null, $message = 'Success', $code = 200, $pagination = null)
    {
        return apiResponse($data, $message, true, $code, null, $pagination);
    }

    public function created($data = null, $message = 'Resource created')
    {
        return apiResponse($data, $message, true, 201);
    }

    public function updated($data = null, $message = 'Resource updated')
    {
        return apiResponse($data, $message, true, 200);
    }

    public function deleted($message = 'Resource deleted')
    {
        return apiResponse(null, $message, true, 200);
    }

    public function noContent()
    {
        return apiResponse(null, 'No Content', true, 204);
    }

    public function paginatedSuccess($paginator, $message = 'Success')
    {
        return apiResponse(
            $paginator->items(),
            $message,
            true,
            200,
            null,
            [
                'current_page' => $paginator->currentPage(),
                'last_page'    => $paginator->lastPage(),
                'per_page'     => $paginator->perPage(),
                'total'        => $paginator->total(),
            ]
        );
    }

    /** -------------------------
     * ERROR RESPONSES
     * ------------------------*/

    public function error($message = 'Error', $code = 400, $errors = null)
    {
        return apiResponse(null, $message, false, $code, $errors);
    }

    public function validationError($errors, $message = 'Validation failed')
    {
        return $this->error($message, 422, $errors);
    }

    public function unauthorized($message = 'Unauthorized')
    {
        return $this->error($message, 401);
    }

    public function forbidden($message = 'Forbidden')
    {
        return $this->error($message, 403);
    }

    public function notFound($message = 'Resource not found')
    {
        return $this->error($message, 404);
    }

    public function conflict($message = 'Conflict')
    {
        return $this->error($message, 409);
    }

    public function serverError($message = 'Server error', $errors = null)
    {
        return $this->error($message, 500, $errors);
    }

    public function maintenance($message = 'Service unavailable')
    {
        return $this->error($message, 503);
    }


    /** -------------------------
     * CUSTOM RESPONSE
     * ------------------------*/
    public function custom($data = null, $message = 'Response', $success = true, $code = 200, $errors = null, $pagination = null)
    {
        return apiResponse($data, $message, $success, $code, $errors, $pagination);
    }
}
