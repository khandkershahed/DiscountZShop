<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function downloadBackup()
    {
        Artisan::call('app:backup-database-command');

        $databaseName = config('database.connections.mysql.database');
        $date = date('Y-m-d_H-i-s');
        $file = storage_path("app/{$databaseName}_{$date}_backup.sql");

        return Response::download($file);
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

     public function sendResponse($result, $message)
     {
         $response = [
             'success' => true,
             'data'    => $result,
             'message' => $message,
         ];
         return response()->json($response, 200);
     }
     /**
      * return error response.
      *
      * @return \Illuminate\Http\Response
      */
     public function sendError($error, $errorMessages = [], $code = 404)
     {
         $response = [
             'success' => false,
             'message' => $error,
         ];
         if(!empty($errorMessages)){
             $response['data'] = $errorMessages;
         }
         return response()->json($response, $code);

     }
}
