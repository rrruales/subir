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

	$rar1 = $rar2 = $rar3 = $rar4 = $rar5 = $rar6 = $rar7 = ""; 
	$conc = $listo = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$rar1 = $_POST["r1"];
		$rar2 = $_POST["r2"];
		$rar3 = $_POST["r3"];
		$rar4 = $_POST["r4"];
		$rar5 = $_POST["r5"];
		$rar6 = $_POST["r6"];
		$rar7 = $_POST["r7"];
		$rar55 = (string) $rar5;
		$rar66 = (string) $rar6;
		$rar77 = (string) $rar7;
		//echo gettype($rar55);
		//echo gettype($rar66);
		//echo gettype($rar77);

		$conc = $rar55." ".$rar66." ".$rar77;

		$listo = $client->Evento($rar1,$rar2,$rar3,$rar4,$conc);
	}
	echo $listo;

	?>