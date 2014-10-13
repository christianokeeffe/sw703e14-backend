<?php
function prepareResponse($statusCode, $data)
{
    $response = array();
    $response["status"] = getStatus($statusCode);
    $response["status_code"] = $statusCode;
    $response["data"] = $data;
    return json_encode($response);
}

function getStatus($code)
{
    $status_codes[200] = "200 OK";
    $status_codes[204] = "204 No Content";
    $status_codes[401] = "401 Unauthorized";
    $status_codes[404] = "404 Not Found";
    $status_codes[409] = "409 Conflict";

    return $status_codes[$code];
}
?>