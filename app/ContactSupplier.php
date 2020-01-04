<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSupplier extends Model
{
    protected $table='contact_suppliers';
    protected $primaryKey='id';
    protected $fillable=['contact_type','name','business_name','contact_id','tax_number','opening_balance','pay_term','customer_group','credit_limit','email','mobile','alternate_contact_number','landline','city','State','country','custom_field_1','custom_field_2','custom_field_3','custom_field_4'];
    public function validate()
    {
    	return [
		    'contact_type' => 'required',
		    'name' => 'required',
		    'business_name' => 'required',
		    'mobile' => 'required',
            'email'=>'required'
		];
    }
}