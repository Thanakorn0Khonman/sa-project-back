<?php

namespace App\Enums;

enum OrderStatusEnum: string {
    case Pending = 'Pending';
    case Preparing = 'Preparing';
    case Packing = 'Packing';
    case Delivering = 'Delivering';
    case CompleteDelivery = 'CompleteDelivery';

    case ReportPending = 'ReportPending';
    case RefundPending = 'RefundPending';
    case ResentPending = 'ResentPending';
    case Refunding = 'Refunding';
    case CompleteRefund = 'CompleteRefund';
}