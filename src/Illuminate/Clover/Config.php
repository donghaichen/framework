<?php

namespace Illuminate\Clover;
use Exception;
/**
 * Config.php
 *
 * @author Donghaichen <chendonghai888@gmail.com>
 * @date   [2016-01-27 15:55]
 * @todo 多级配置　不知道业务是否需要大量的三级类配置，所以暂时支持二级配置
 */

class Config
{
    // 配置文件路径
    private static $config_path = '';


    /**
     * 解析配置文件或内容
     * @return array
     */
    public static function parse($file)
    {
        $config_path = self::$config_path == '' ? APP_PATH . '/config/' : self::$config_path;
        if($file == null){
            $file = scandir($config_path);
            foreach ($file as $k => $v)
            {
                unset($file[0], $file[1]);
                if($v == 'routes.php' )
                {
                    unset($file[$k]);
                }
            }
            foreach ($file as $k => $v)
            {
                $name = str_replace('.php', '', $v);
                $file = $config_path . $v;
                $data[$name] = include $file;
            }
        }else{
            $type = $file;
            if(strpos($type, '.')){
                $type = explode('.', $type);
                $file = $config_path . $type[0] . '.php';
                $data = self::load($file)[$type[1]];
            }else{
                $file = $config_path . $file . '.php';
                $data = self::load($file);
            }

        }
        return $data;
    }

    /**
     * 加载配置文件（PHP格式）
     * @param string    $file 配置文件名
     * @return array
     */
    public static function load($file)
    {
        if(!file_exists($file))
        {
            throw new Exception("This configuration is not supported!");
        }
        return [
            include $file
        ][0];
    }

    /**
     * 获取配置参数 为空则获取所有配置
     * @param string $name 配置参数名
     * @return mixed
     */
    public static function get($name = null)
    {
        return self::parse($name);
    }
}