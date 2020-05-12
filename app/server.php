<?php

//
//$server = new Swoole\Websocket\Server("0.0.0.0", 9502);
//
//$server->on('open', function($server, $req) {
//    echo "connection open: {$req->fd}\n";
//});
//
//$server->on('message', function($server, $frame) {
//    echo "received message: {$frame->data}\n";
//    $server->push($frame->fd, json_encode(["hello", "world"]));
//});
//
//$server->on('close', function($server, $fd) {
//
//    echo "connection close: {$fd}\n";
//});
//
//$server->start();



$serv = new Swoole\Server("0.0.0.0", 9502);

//监听连接进入事件
$serv->on('Connect', function ($serv, $fd) {
    echo "Client: Connect.\n";
});

//监听数据接收事件
$serv->on('Receive', function ($serv, $fd, $from_id, $data) {
    var_dump($data);
    $serv->send($fd, "Server已经收到您的信息: ".$data);
});

//监听连接关闭事件
$serv->on('Close', function ($serv, $fd) {
    echo "Client: Close.\n";
});

//启动服务器
$serv->start();


////创建Server对象，监听 127.0.0.1:9502端口，类型为SWOOLE_SOCK_UDP
//$serv = new Swoole\Server("0.0.0.0  ", 9501, SWOOLE_PROCESS, SWOOLE_SOCK_UDP);
//
////监听数据接收事件
//$serv->on('Packet', function ($serv, $data, $clientInfo) {
//    $serv->sendto($clientInfo['address'], $clientInfo['port'], "Server ".$data);
//    var_dump($clientInfo);
//});
//
////启动服务器
//$serv->start();

