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


		$var1 = $var2 = $var3 = $var4 = $var5 = $var6 = $var7 = "";
		$comp = $valid = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$var1 = $_POST["v1"];
		 	$dar2 = $_POST["v2"];
		 	$var3 = $_POST["v3"];
		 	$var4 = $_POST["v4"];
		 	$var5 = $_POST["v5"];
		 	$var6 = $_POST["v6"];
		 	$var7 = $_POST["v7"];

		 	$comp = $var5."-".$var6."-".$var7;

		 	$valid = $client->Venue($var1,$var2,$var3,$var4,$comp);
		 	echo $valid;

		}
	?>
