<?php


namespace App\Traits;

trait HttpResponses {
    public function success($data, $message = null, $code = 200){
        return response()->json([
            'status' => 'Request was successfull',
            'message' => $message,
            'data' => $data
        ]);
    }

    protected function error($data, $message=null, $code){
        return response()->json([
            'status' => 'Error has occured',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}