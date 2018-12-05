<?php
/**
 * Created by PhpStorm.
 * User: zorozdd
 * Date: 2018/12/5
 * Time: 2:00 PM
 */

class WechatTestAction extends UserAction{

    public function getAccessToken(){
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx9d675cad67c4abf0&secret=cca9897f2b5adc14b3c3dc514c835fe0";
        //初始化
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 1);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        //显示获得的数据
        var_dump($data);
    }
}