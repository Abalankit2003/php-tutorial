<?php

declare(strict_types = 1);

namespace App\Controllers;

require __DIR__ . "/../View.php";



class HomeController
{
    public function index() : string
    {
        // $_SESSION['count'] = $_SESSION['count'] + 1;


        // This is how cookie is set. If you want to delete cookie, then set the expiry into past time. i.e, time() - something.
        // setcookie(
        //     'username',
        //     'ankit',
        //     time() + 10
        // ); 

        // hereDoc is identation sensitive.
        // receipt[] will store each input data in form of array. It says that they are part of an array.

        return (string)(\View :: make('index', ['foo' => 'bar']));

        // return 'Home';
    }

    public function download() 
    {
        // This is how you create a download functionality in app that can be used by user to download something.
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="myfile.pdf"');

        readfile(STORAGE_PATH . 'Screenshot (6).png');
    }

    public function upload()
    {
        // echo '<pre>';
        // print_r($_FILES);
        // echo '</pre>';

        /*
            Array
                (
                    [receipt] => Array
                (
                    [name] => Screenshot (1).png
                    [type] => image/png
                    [tmp_name] => /tmp/phpaDwaTt
                    [error] => 0
                    [size] => 308903
                )

            )
            [error] => no
            UPLOAD_ERR_OK = 0
            UPLOAD_ERR_INI_SIZE = 1
            UPLOAD_ERR_FORM_SIZE = 2
            UPLOAD_ERR_PARTIAL = 3
            UPLOAD_ERR_NO_FILE = 4
            UPLOAD_ERR_NO_TMP_DIR = 6
            UPLOAD_ERR_CANT_WRITE = 7
            UPLOAD_ERR_EXTENSION = 8
        */

        $filePath = STORAGE_PATH . '/'. $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath); // This is done because PHP stores the file temporarily and it has to be moved to a permanent directory.

        header('Location: /');

        exit; // It is important to exit the script after a redirect otherwise it will still execute the script thereafter.
        // echo '<pre>';
        // var_dump(pathinfo($filePath));
        // echo '</pre>';

    }
}
