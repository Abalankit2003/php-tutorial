<?php

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
