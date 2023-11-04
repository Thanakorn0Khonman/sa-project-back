<?php

namespace App\Enums;

enum OrderStatusEnum: string {
    case Pending = 'Pending';
    case Preparing = 'Preparing';
    case Packing = 'Packing';
    case Delivering = 'Delivering';
    case Complete = 'Complete';
    case Refunding = 'Refunding';
    case Refunded = 'Refunded';
}