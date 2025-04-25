<?php


function modules()
{
    $dirs = glob(ROOTPATH."/Modules/*", GLOB_ONLYDIR);
    
    $modules = [];
    foreach($dirs as $str){
        $str = trim(str_replace(ROOTPATH."/Modules", "", $str), "/");
        if($str!='Modules')
            $modules[] = $str;
    }

    return $modules;
    
}

function hasModule($moduleName)
{
    $moduleName = ucfirst($moduleName);
    
    $modules = modules();
    
    $ret = array_filter($modules, function($val) use ($moduleName) { 
        return $moduleName == $val;
    });

    return count($ret) > 0;
}