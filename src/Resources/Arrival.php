<?php

namespace AIKG\LaravelCenterEdgeAPI\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Arrival extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
			'ref_id' => $this->RefID,
		    'ref_no' => $this->RefNo,
		    'description' => $this->Description,
		    'grp_status_no' => $this->GrpStatusNo,
		    'all_day_event' => $this->AllDayEvent,
		    'start_date_time' => $this->StartDateTime,
		    'end_date_time' => $this->EndDateTime,
		    'group_size' => $this->GroupSize,
		    'num_adults' => $this->NumAdults,
		    'num_children' => $this->NumChildren,
		    'total_sale_amount' => $this->TotalSaleAmount,
		    'total_deposit_amount' => $this->TotalDepositAmount,
		    'total_refund_amount' => $this->TotalRefundAmount,
		    'total_discount_amount' => $this->TotalDiscountAmount,
		    'total_tax_amount' => $this->TotalTaxAmount,
		    'total_gratuity_amount' => $this->TotalGratuityAmount,
		    'booking_date' => $this->BookingDate,
		    'booking_emp_no' => $this->BookingEmpNo,
		    'birthday_event' => $this->BirthdayEvent,
		    'contact_first_name' => $this->ContactFirstName,
		    'contact_last_name' => $this->ContactLastName,
		    'contact_phone_number' => $this->ContactPhoneNumber,
		    'contact_secondary_phone_number' => $this->ContactSecondaryPhoneNumber,
		    'confirmed_date_time' => $this->Confirmed_DateTime,
		    'confirmed_emp_no' => $this->Confirmed_EmpNo,
		    'notes' => $this->Notes,
		    'host_emp_no' => $this->Host_EmpNo,
		    'greeter_emp_no' => $this->Greeter_HostNo,
		    'sales_person_emp_no' => $this->SalesPersonEmpNo,
		    'time_created' => $this->TimeCreated,
		    'created_by_emp_no' => $this->CreatedBy_EmpNo,
		    'food_time_for_event' => $this->FoodTimeForEvent,
		    'food_prep_time' => $this->FoodPrepTime,
		    'kitchen_note' => $this->KitchenNote,
		    'private_notes' => $this->PrivateNotes,
		    'manual_gratuity_amount' => $this->ManualGratuityAmount,
		    'auto_gratuity_amount' => $this->AutoGratuityAmount,
		    'flat_discount_amount' => $this->FlatDiscountAmount,
		    'host_language' => $this->HostLanguage,
		    'event_type_id' => $this->EventTypeID,
		    'booked_from_web' => $this->BookedFromWeb,
		    'web_review_date' => $this->WebReviewDate,
		    'web_review_emp_no' => $this->WebReviewEmpNo,
		    'total_coupon_discount_amount' => $this->TotalCouponDiscountAmount,
		    'security_code' => base64_encode($this->SecurityCode),
		    'reschedule_ref_id' => $this->RescheduleRefID,
		    'cancel_date' => $this->CancelDate,
		    'opened_by_station_no' => $this->OpenedBy_StationNo,
		    'opened_by_emp_no' => $this->OpenedBy_EmpNo,
		    'customer_id' => $this->CustomerID,
		    'contact_customer_id' => $this->ContactCustomerID,
		    'group_id' => $this->GroupID,
		    'web_store_version' => $this->WebStoreVersion,
            'areas' => Area::collection($this->whenLoaded('areas')),
            'booking_area_guid' => $this->whenPivotLoaded('GroupAreaBookings', function () {
                return $this->pivot->AreaGUID;
            }),
            'booking_start_date_time' => $this->whenPivotLoaded('GroupAreaBookings', function () {
                return $this->pivot->StartDateTime;
            }),
            'booking_end_date_time' => $this->whenPivotLoaded('GroupAreaBookings', function () {
                return $this->pivot->EndDateTime;
            }),
        ];
    }
}