<?php
$GLOBALS['THRIFT_ROOT'] = 'C:\\Users\\Ronald Ruales\\Desktop\\Prueba\\thrift-0.11.0\\lib\\php\\lib';

	require_once 'Types.php';
	require_once 'Servidor.php';

	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/Transport/TTransport.php';
	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/Transport/TSocket.php';
	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/Protocol/TProtocol.php';
	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/Protocol/TBinaryProtocol.php';
	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/Transport/TBufferedTransport.php';
	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/Type/TMessageType.php';
	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/Factory/TStringFuncFactory.php';
	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/StringFunc/TStringFunc.php';
	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/StringFunc/Core.php';
	require_once $GLOBALS['THRIFT_ROOT'].'/Thrift/Type/TType.php';
	use Thrift\Protocol\TBinaryProtocol;
	use Thrift\Transport\TSocket;
	use Thrift\Transport\TSocketPool;
	use Thrift\Transport\TFramedTransport;
	use Thrift\Transport\TBufferedTransport;
	use Thrift\Exception\TTransportException;
	use Thrift\Exception\TProtocolException;


	$host = '127.0.0.1';
	$port = 8000;
	$socket = new Thrift\Transport\TSocket($host,$port);
	$socket->setRecvTimeout(5000);
    $socket->setSendTimeout(5000);
	$transport = new TBufferedTransport($socket);
	$protocol = new TBinaryProtocol($transport);
	
	$client = new ServidorClient($protocol);
	$transport-> open();

	$sas1 = $sas2 = $comprobar = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$sas1 = $_POST["s1"];
		$sas2 = $_POST["s2"];
		$comprobar = $client->Login($sas1,$sas2);
	}
	echo $comprobar;

	?>