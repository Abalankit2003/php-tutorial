<?php


// $dir = scandir(__DIR__);

// echo '<pre>';
// print_r($dir);
// echo '</pre>';


// var_dump(is_dir($dir[3])); // checks whether it is a directory or not
// var_dump(is_file($dir[3])); // checks whether it is a file or not


# creating a directory

// mkdir('foo'); // creates a sub-directory in the current directory
// rmdir('foo'); // removes empty sub-directory only

// mkdir('foo/bar', recursive : true); // This is a recursive way of creating directory which means directory inside directory. It will create a sub-directory named 'foo' and within it another sub-directory named 'bar'.

# to delete the foo/bar completely. Follow followings step:
/*

 1. rmdir('foo/bar') => removes bar directory
 2. rmdir('foo') => removes foo directory

*/

# file handling

// if(file_exists('foo.txt')) 
// {

//     echo filesize('foo.txt') . '<br>'; // 0

//     file_put_contents('foo.txt','Ankit Raj');



//     echo filesize('foo.txt') . '<br>'; // 0, This will print the size of the file prior to line number 36 because filesize caches the value for better performance. To make it behave properly, use clearstatcache() after putting some content in the file

//     clearstatcache();
//     echo filesize('foo.txt'). '<br>'; // 9

// } else {

//     echo 'File not found';
// }


# opening a file

if(!file_exists('foo.txt'))
{

    echo 'File doesn\'t exist';

    return;
}

$file = fopen('foo.txt', 'r'); // fopen(filename, mode) return type => resource which means an external value. 

while(($line = fgets($file)) !== false) // fgets($filename) => reads a whole line in the file and return it
{
    echo $line .'<br>';
    
}

// output => Ankit Raj

fclose($file); // closes an already opened file



/*

    * if the file contains values like below:
        a, b, c
        d, e, f
        g, h, i
    

    Other option :
    * there to read this we will use fgetscsv($file).
    * fgetscsv return the characters separated by comma in form of an array

*/


$content = file_get_contents('foo.txt', offset : 2, length : 3); // reads the contents and store them in a variable. offset means starting index. If offset and length are optional. In that case it reads whole content.

echo $content.'<br>';


# writing into a file

file_put_contents('bar.txt', 'Hello', FILE_APPEND); // if file doesn't exist, it will create the one and write the content. If file exists then it will overwrite the content. Third argument FILE_APPEND will be used to append to the file.


# deleting a file

unlink('bar.txt');

# copy a file

copy('foo.txt', 'bar.txt'); // first argument is source file and second one is destination file

# moving a file content to another with deleting the file

// rename('foo.txt', 'bar.txt'); // first argument is source file and second one is destination file

print_r(pathinfo('bar.txt')); // Array ( [dirname] => . [basename] => bar.txt [extension] => txt [filename] => bar )
