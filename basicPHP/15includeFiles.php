<?php


/** require / require_once / include / include_once */

# include and include_once return a boolean value {1, 0} for file existence and non-file existence respectively. It can be used in case where I want to get the data from other file and want to render with customization.

# require and require_once does not return value. It comes in handy when we want to render other file content as it is without any customization.

# require Vs require_once => Assume a case where the required file takes the value from the calling file and executes some operation on it and return the result. In that case, if we use require more than one time for the same file, then each time it will take the updated value from the previous require result. While in case of require_once, no matter how many times you call the same file, It is not going to update the value by reference. 

# NOTE :-> require is like call by reference while require_once is call by value. Same goes for include and include_once.
