<?php
function prepareResponse($status, $statusCode, $data)
{
    $response = array();
    $response["status"] = $status;
    $response["status_code"] = $statusCode;
    $response["data"] = $data;
    return json_encode($response);
}
?>