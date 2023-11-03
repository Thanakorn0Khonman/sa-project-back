<?php

namespace App\Enums;

enum OrderStatusEnum: string {
    case Pending = 'Pending';
    case PaymentChecking = 'Preparing';
    case Packing = 'Packing';
    case Delivering = 'Delivering';
    case Complete = 'Complete';

    case ReportPending = 'Report Pending';
    case RefundPending = 'Refund Pending';
    case ResentPending = 'Resend Pending';
    case Refunding = 'Refunding';
    case CompleteRefund = 'Complete Refund';
}