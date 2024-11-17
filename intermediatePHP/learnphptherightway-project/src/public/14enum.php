<?php

/*

    1. An enum (enumeration) in PHP is a user-defined data type introduced in PHP 8.1 that represents a set of predefined, constant values. Enums make code more readable and maintainable by grouping related constants under a single type.
    2. Enums in PHP are used when you need to define a fixed set of related, constant values, making your code more readable and less error-prone. ex :- Validation, State management, etc.


*/

enum Status
{
    case Active;
    case Inactive;
    case Pending;
}

// Using the enum
function getStatusMessage(Status $status): string
{
    return match ($status) {
        Status::Active => 'The status is active.',
        Status::Inactive => 'The status is inactive.',
        Status::Pending => 'The status is pending.',
    };
}

// Test
$status = Status::Active;
echo getStatusMessage($status); // Output: The status is active.

echo getStatusMessage(Status :: Inactive);

// More to learn
