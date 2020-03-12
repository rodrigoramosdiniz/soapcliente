<?php
session_start();

$operacao = $_GET["operacao"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$client = new SoapClient("http://localhost:8000/calcws?wsdl");

if($operacao === "somar") {
    $params = [
        "getSoma" => [
            "n1" => $n1,
            "n2" => $n2
        ]
    ];

    $result = $client->__soapCall("getSoma", $params);
} elseif($operacao === "sub") {
    $params = [
        "getSub" => [
            "n1" => $n1,
            "n2" => $n2
        ]
    ];

    $result = $client->__soapCall("getSub", $params);
} elseif($operacao === "div") {
    $params = [
        "getDivisao" => [
            "n1" => $n1,
            "n2" => $n2
        ]
    ];

    $result = $client->__soapCall("getDivisao", $params);
}

 elseif($operacao === "mult") {
    $params = [
        "getMulti" => [
            "n1" => $n1,
            "n2" => $n2
        ]
    ];

    $result = $client->__soapCall("getMulti", $params);
}

$_SESSION["result"] = $result->return;

header("Location: form.php");