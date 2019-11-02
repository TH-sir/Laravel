<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use App\Entity\Common\ApiResponseObject;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function reponseJSON($errorCode, $errorMsg, $resData)
    {
        $apiResponseObject = new ApiResponseObject();
        $apiResponseObject->setErrorCode($errorCode);
        $apiResponseObject->setErrorMsg($errorMsg);
        $apiResponseObject->setData($resData);
        return new JsonResponse($apiResponseObject);
    }
}
