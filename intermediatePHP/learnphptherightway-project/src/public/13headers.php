<?php

# request and response both contains header along with body.

/*
    Some status code and their meaning
    
    100-199 => Informational

    200-299 => Success
        200 -> OK
        201 -> Created
        204 -> No Content

    300-399 => Redirect
        301 -> Moved Permanently
        304 -> Not Modified
    
    400-499 => Client Error
        401 -> Unauthorized
        403 -> Forbidden
        404 -> Not Found
        405 -> Method Not Allowed

    500-599 => Server Error
        500 -> Internal Server Error
        502 -> Bad Gateway


    NOTE :-> Header must be sent before anything else.
*/
