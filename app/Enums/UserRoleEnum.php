<?php
  
namespace App\Enums;
 
enum UserRoleEnum:string {

    case Admin = 'Admin';
    case Customer = 'Customer';
    case Accounting = 'Accounting';
    case Warehouse = 'Warehouse';
}