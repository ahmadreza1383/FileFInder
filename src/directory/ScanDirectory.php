<?php
namespace src\directory;
class ScanDirectory
{
    private static $path;

    private static array $directories = [];

    private function __construct(){}

    private function __clone(){}

    public static function setPath($path)
    {
        self::$path = $path;
    }

    public static function get()
    {
        $obj = new static;
        $obj->add([self::$path]);

        return self::$directories;
    }

    private function filterDir($path)
    {
        $dirs =  array_filter(scandir($path), function($file) use ($path) {
            if(is_dir($path.$file))
            {
                if($path.$file != $path.'..' && $path.$file != $path.'.')
                {
                    return $file;
                };
            }
        });

        $result = [];

        foreach($dirs as $dir)
        {
            $result[] = $path.$dir.DIRECTORY_SEPARATOR;
        }

        return $result;
    }

    private function add($searchesDir)
    {
        foreach($searchesDir as $dir)
        {
            if($filter = $this->filterDir($dir))
            {
                $this->add($filter);
            }

            self::$directories[] = $dir;
        }
    }
}