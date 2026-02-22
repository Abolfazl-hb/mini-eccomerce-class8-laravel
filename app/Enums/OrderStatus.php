<?php

namespace App\Enums;

enum OrderStatus: int
{
    case PENDING = 0;
    case PROCESSING = 1;
    case SENT = 2;
    case DELIVERED = 4;
    case CANCELLED = 5;
    case REFUND = 6;
}
