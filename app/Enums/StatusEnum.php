<?php

namespace App\Enums;

enum StatusEnum : string
{
    case REJECT = 'reject';
    case ACCEPTED = 'accepted';
    case PENDING = 'pending';
    case PUBLISHED = 'published';
    case CANCELED = 'canceled';

    case PAID = 'paid';
    case NOTPAID = 'notpaid';
}
