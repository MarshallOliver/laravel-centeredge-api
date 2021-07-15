<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Resources;

use MarshallOliver\LaravelCenterEdgeAPI\MessageLog as Model;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageLog extends JsonResource
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

            'message_id' => $this->MsgID,
			'message_date_time' => $this->MsgDateTime,
			'station_no' => $this->StationNo,
			'program_name' => $this->ProgramName,
			'emp_no' => $this->EmpNo,
			'message_text' => $this->MessageText,
			'stack_trace' => $this->StackTrace,
			'error' => $this->Error,

        ]

    }
}
