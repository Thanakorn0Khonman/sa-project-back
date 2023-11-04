<?php
  
namespace App\Enums;
 
enum UserRoleEnum:string {

    case Admin = 'Admin';
    case Customer = 'Customer';
    case Audit = 'Audit';
    case Delivery = 'Delivery';
}