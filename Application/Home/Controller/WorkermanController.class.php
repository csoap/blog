<?php
/**
 * User: czz
 * DateTime: 2017/9/26 15:15
 * Description:
 * Tips:
 */

namespace Home\Controller;
use Think\Controller;
use Workerman\Worker;

class WorkermanController extends Controller{


    public function index(){

        Vendor('Workerman.Worker');
        $http_worker = new Worker("http://0.0.0.0:2345");

        $http_worker->count = 4;

        $http_worker->onMessage = function ($connection,$data){

            $connection->send('hello world');
        };

        Worker::runAll();


    }



}