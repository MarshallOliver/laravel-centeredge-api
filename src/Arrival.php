<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
    protected $table = 'GroupArrivals';
    protected $primaryKey = 'RefID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $hidden = ['SecurityCode'];

    const fieldMap = [
    	'table' => 'GroupArrivals',
		'fields' => [	    
			'ref_id' => 'RefID',
		    'ref_no' => 'RefNo',
		    'description' => 'Description',
		    'grp_status_no' => 'GrpStatusNo',
		    'all_day_event' => 'AllDayEvent',
		    'start_date_time' => 'StartDateTime',
		    'end_date_time' => 'EndDateTime',
		    'group_size' => 'GroupSize',
		    'num_adults' => 'NumAdults',
		    'num_children' => 'NumChildren',
		    'total_sale_amount' => 'TotalSaleAmount',
		    'total_deposit_amount' => 'TotalDepositAmount',
		    'total_refund_amount' => 'TotalRefundAmount',
		    'total_discount_amount' => 'TotalDiscountAmount',
		    'total_tax_amount' => 'TotalTaxAmount',
		    'total_gratuity_amount' => 'TotalGratuityAmount',
		    'booking_date' => 'BookingDate',
		    'booking_emp_no' => 'BookingEmpNo',
		    'birthday_event' => 'BirthdayEvent',
		    'contact_first_name' => 'ContactFirstName',
		    'contact_last_name' => 'ContactLastName',
		    'contact_phone_number' => 'ContactPhoneNumber',
		    'contact_secondary_phone_number' => 'ContactSecondaryPhoneNumber',
		    'confirmed_date_time' => 'Confirmed_DateTime',
		    'confirmed_emp_no' => 'Confirmed_EmpNo',
		    'notes' => 'Notes',
		    'host_emp_no' => 'Host_EmpNo',
		    'greeter_emp_no' => 'Greeter_HostNo',
		    'sales_person_emp_no' => 'SalesPersonEmpNo',
		    'time_created' => 'TimeCreated',
		    'created_by_emp_no' => 'CreatedBy_EmpNo',
		    'food_time_for_event' => 'FoodTimeForEvent',
		    'food_prep_time' => 'FoodPrepTime',
		    'kitchen_note' => 'KitchenNote',
		    'private_notes' => 'PrivateNotes',
		    'manual_gratuity_amount' => 'ManualGratuityAmount',
		    'auto_gratuity_amount' => 'AutoGratuityAmount',
		    'flat_discount_amount' => 'FlatDiscountAmount',
		    'host_language' => 'HostLanguage',
		    'event_type_id' => 'EventTypeID',
		    'booked_from_web' => 'BookedFromWeb',
		    'web_review_date' => 'WebReviewDate',
		    'web_review_emp_no' => 'WebReviewEmpNo',
		    'total_coupon_discount_amount' => 'TotalCouponDiscountAmount',
		    'security_code' => 'SecurityCode',
		    'reschedule_ref_id' => 'RescheduleRefID',
		    'cancel_date' => 'CancelDate',
		    'opened_by_station_no' => 'OpenedBy_StationNo',
		    'opened_by_emp_no' => 'OpenedBy_EmpNo',
		    'customer_id' => 'CustomerID',
		    'contact_customer_id' => 'ContactCustomerID',
		    'group_id' => 'GroupID',
		    'web_store_version' => 'WebStoreVersion',
		    
		],

	];

	const base64 = [
        'security_code',

    ];

    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('TimeCreated', 'desc');
        });
    }

    public function areas()
    {
    	return $this->belongsToMany('MarshallOliver\LaravelCenterEdgeAPI\Area')
    				->using('MarshallOliver\LaravelCenterEdgeAPI\Booking')
    				->withPivot('EventDate', 'StartDateTime', 'EndDateTime');
    }

    public function bookings() {
    	return $this->hasMany('MarshallOliver\LaravelCenterEdgeAPI\Booking', 'RefID', 'RefID');
    }

    // public function areas() {
    // 	return $this->hasManyThrough('MarshallOliver\LaravelCenterEdgeAPI\Area', 'MarshallOliver\LaravelCenterEdgeAPI\Booking', 'RefID', 'AreaGUID', 'RefID', 'AreaGUID');
    // }
}
