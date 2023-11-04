<?php

namespace App\Enums;

enum OrderStatusEnum: string {
    case Pending = 'Pending';
    case Preparing = 'Preparing';
    case Packing = 'Packing';
    case Delivering = 'Delivering';
    case CompleteDelivery = 'Complete Delivery';

    case ReportPending = 'Report Pending';
    case RefundPending = 'Refund Pending';
    case ResentPending = 'Resend Pending';
    case Refunding = 'Refunding';
    case CompleteRefund = 'Complete Refund';
}