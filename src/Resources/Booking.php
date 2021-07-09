<?php

namespace AIKG\LaravelCenterEdgeAPI\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use AIKG\LaravelCenterEdgeAPI\Resources\Arrival;

class Booking extends JsonResource
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
            'area_guid' => $this->AreaGUID,
            'sub_area_guid' => $this->SubAreaGUID,
            'slot_guid' => $this->SlotGUID,
            'event_date' => $this->EventDate,
            'start_date_time' => $this->StartDateTime,
            'end_date_time' => $this->EndDateTime,
            'quantity' => $this->Quantity,
            'actual_quantity' => $this->ActQuantity,
            'arrival_info' => new Arrival($this->whenLoaded('arrivals')),

        ];
    }
}