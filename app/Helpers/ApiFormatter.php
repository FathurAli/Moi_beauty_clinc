<?php

namespace App\Helpers;
//namespace : menentukan lokasi folder dari file ini

//nama class == nama file
class ApiFormatter {
    //variabel struktur data yang akan ditampilkan di response postman
    protected static $response = [
        "status" => NULL,
        "message" => NULL,
        "data" => NULL,
    ];

    public static function sendResponse($status = NULL, $message = NULL, $data = [])
    {
        self::$response['status'] = $status;
        self::$response['message'] = $message;
        self::$response['data'] = $data;
        return response()->json(self::$response, self::$response['status']);
        // status : http status code (200,400,500)
        // message : desc http status code ('success', 'bad request', 'server error')
        // data : hasil yang diambil dari db
        // Penggunaan static property dan static method pada helper tersebut, bermaksud agar pemanggilannya tidak perlu melalui object, melainkan langsung melalui class nya. misal: NamaClass::property atau NamaClass::method() 
        // Static method sendResponse() memiliki tiga parameter yg diberi default value null. nantinya, argument dari parameter tersebut disimpan ke static property dan dikembalikan dalam bentuk response json.
    }
}
?>