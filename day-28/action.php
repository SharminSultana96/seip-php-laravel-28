<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
//echo '<pre>';
//print_r($_GET);
//echo 'hello';

$home = new Home();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $home->index();
    }
    elseif($_GET['page'] == 'about')
    {
        $home->about();
    }
      elseif($_GET['page'] == 'details')
        {
            $home->details($_GET['id']);
        }

    elseif ($_GET['page'] == 'full-name')
    {
        $home->fullName();
    }

    elseif ($_GET['page'] == 'contact')
    {
        $home->contact();
    }
}