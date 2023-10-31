<?php

namespace App\Enums;

enum OrderStatusEnum: string {
    case Pending = 'Pending';
    case PaymentChecking = 'Payment-checking';
    case Packing = 'Packing';
    case Delivering = 'Delivering';
    case Complete = 'Complete';
}