<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Resources;

use MarshallOliver\LaravelCenterEdgeAPI\Category as Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class Category extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        $table = Model::fieldMap['table'];
        $fieldMap = Model::fieldMap['fields'];

        $result = [];

        if ($request->fields) {
            $selects = Str::of($request->fields)->explode(',');
        } else {
            $selects = array_keys($fieldMap);
        }

        foreach ($selects as $select) {

            if (!array_key_exists($select, $fieldMap)) { continue; }

            $this->addSelect($table . '.' . $fieldMap[$select]);
            if (in_array($select, $base64) && $this->{$fieldMap[$select]}) {
                $result[$select] = base64_encode($this->{$fieldMap[$select]});
            } else {
                $result[$select] = $this->{$fieldMap[$select]};
            }

        }

        return $result;
    }
}