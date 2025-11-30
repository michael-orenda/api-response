<?php

namespace MichaelOrenda\ApiResponse\Traits;

trait ApiResponseTrait
{
    public function success($data = null, $message = 'Success', $code = 200, $pagination = null)
    {
        return apiResponse($data, $message, true, $code, null, $pagination);
    }

    public function error($message = 'Error', $code = 400, $errors = null)
    {
        return apiResponse(null, $message, false, $code, $errors);
    }

    public function validationError($errors, $message = 'Validation failed')
    {
        return $this->error($message, 422, $errors);
    }
}
