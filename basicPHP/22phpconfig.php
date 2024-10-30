/*

 1. click on config button in of apache server and click on php.ini. This is the configuration file of php.
 2. In the file, text after a semicolon is treated as comment.
 3. Not all configuration can be altered at runtime(using init_set() and init_get()), but only through changing in the mentioned file.
 4. After changing something in the file, restart the server.
 5. Example of runtime alter in configuration file
        init_set('maximum_execution_time', 3);
            - This line sets the maximum execution time of the script to 3 seconds.


*/
