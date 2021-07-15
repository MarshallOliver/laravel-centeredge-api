<?php

namespace AIKG\LaravelCenterEdgeAPI\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Area extends JsonResource
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
            'area_guid' => $this->AreaGUID,
            'description' => $this->Description,
            'show_area' => $this->ShowArea,
            'area_type' => $this->AreaType,
            'capacity' => $this->Capacity,
            'min_capacity' => $this->Min_Capacity,
            'pre_arrival_minutes' => $this->PreArrivalMinutes,
            'post_departure_minutes' => $this->PostDepartureMinutes,
            'area_shown_at' => $this->AreaShownAt,
            'min_deposit_amount' => $this->Min_DepositAmount,
            'open_area_desc' => $this->OpenAreaDesc,
            'web_enabled' => $this->WebEnabled,
            'inv_id' => $this->InvID,
            'web_capacity' => $this->WebCapacity,
            'short_details' => $this->ShortDetails,
            'long_details' => $this->LongDetails,
            'thumbnail' => base64_encode($this->Thumbnail),
            'picture' => base64_encode($this->Picture),
            'show_capacity' => $this->ShowCapacity,
            'laser_tag_area' => $this->LaserTagArea,
            'go_kart_area' => $this->GoKartArea,
            
        ];
    }
}