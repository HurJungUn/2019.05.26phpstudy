<?php

namespace Gondr\Controller;

use Gondr\DB;
use Goutte\Client;

class MainController extends Controller{
    public function index(){
        $sql = "SELECT * FROM board";
        $list = DB::fetchAll($sql);

        $this->render("main", ['list'=>$list]);
    }

    public function lunch(){
        $client = new Client();

        $crawler = $client->request("GET", "http://www.y-y.hs.kr/lunch.view?date=20190524");

        $crawler->filter(".menuName > span")->each(function($node) {
            $menu = $node->text();
            $this->render("lunch", ['lunch'=>$menu]);
        });
    }
}