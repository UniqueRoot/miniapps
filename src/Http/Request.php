<?php
namespace Fangjia\Miniapps\Http;

class Request
{
    /**
     * 接口交互
     */
    function http_post_data($url, $data_string) {
        if($data_string){
            $json = json_encode($data_string,JSON_UNESCAPED_SLASHES);
        }else{
            $json = '{}';
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json; charset=utf-8',
                'Content-Length: ' . strlen($json))
        );
        ob_start();
        curl_exec($ch);
        $return_content = ob_get_contents();
        //echo $return_content."<br>";
        ob_end_clean();
        $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // return array($return_code, $return_content);
        return $return_content;
    }

     /*
     *发送CURL get请求
     */
    function httpGet($url) {
        $curl = curl_init();    //初始化一个cURL会话。
        curl_setopt($curl, CURLOPT_TIMEOUT, 100);  //设置cURL允许执行的最长秒数
        curl_setopt($curl, CURLOPT_URL, $url);  //URL地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,FALSE);  //禁用后cURL将终止从服务端进行验证
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,FALSE);  //不验证证书是否存在
        curl_setopt($curl, CURLOPT_HEADER, FALSE);    //禁止后使用CURL_TIMECOND_IFUNMODSINCE，默认值为CURL_TIMECOND_IFUNMODSINCE
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);  //将curl_exec()获取的信息以文件流的形式返回，而不是直接输出
        $res = curl_exec($curl);  //执行一个cURL会话
        curl_close($curl);  //关闭一个cURL会话
        return $res;
    }


    /**
     * 上传接口文件
     */
    function http_up_data($url, $file,$name='') {
        $cfile =  curl_file_create($file['tmp_name'],$file['type'],$file['name']);
        $data_string['name'] = $name?$name:time();
        $data_string['file'] = $cfile;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT,60);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string );
        $result = curl_exec($ch);
        $error =  curl_error($ch);
        curl_close($ch);
        return $result;
    }

}
