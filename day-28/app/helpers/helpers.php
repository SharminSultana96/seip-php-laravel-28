<?php

function test()
{
    echo "Hello Test";
}
    function view($view, $data = [], $print = true)
    {
        $output = "View not found";
        $filepath = "views/".$view.".php";
        if (file_exists($filepath))
        {
            extract($data);
            ob_start();
            include $filepath;
            $output = ob_get_clean();
        }
        if ($print)
        {
            print $output;
        }
}
