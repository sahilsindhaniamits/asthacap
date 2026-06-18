<?php
namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
class ApprovedLeads extends Model
{
    protected $fillable = ['loan_request_id', 'UTOKEN', 'appno','sanctionamt','emiamt','loant','roi','appva','pf','gst','totalv','security','dummy','dummy1','adhaar_number'];
    protected $table='approved_leads';

   
   
}