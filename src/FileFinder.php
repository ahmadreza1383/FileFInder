<?php
namespace src;

class FileFinder
{
    private $path;
    private $file;
    private $recursive;

    public function __construct($path, $file = '', $recursive = false)
    {
        $this->path = $path;
        $this->file = $file;
        $this->recursive = $recursive;
    }

    public function get()
    {
        if($this->recursive == false && empty($this->file))
        {
            $this->withoutRecursive();
        }
        // elseif($this->recursive == true && empty($this->file))
        // {
        //     var_dump($this->withRecursive());
        // }
        
    }

    public function withoutRecursive()
    {
        $path  = $this->path;
        
        return  array_filter(scandir($path), function($file) use ($path)
        {
            if(is_file($path.$file))
            {
                 return $file ;
            }
        });
    }

    // public function withRecursive()
    // {
    //     $path  = $this->path;
        
    //     $folders = array_filter(scandir($path));
    // }
}




























//TODO: check the last character $path exists DIRCTORY_SEPERATOR!

//1 - if files is empty , print the path files

$searchWithoutFile = function($path)
{
    return  array_filter(scandir($path), function($file) use ($path)
    {
        if(is_file($path.$file))
        {
             return $file ;
        }
    });
};

//3 - if file not empty, search file to path

$searchWithFile = function($path, $file)
{
    return array_filter(scandir($path), function($_file) use ($path, $file)
    {
        if(is_file($path.$_file) && $file == $_file)
        {
             return $_file ;
        }
    });
};




















