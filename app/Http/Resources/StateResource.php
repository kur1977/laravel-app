<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
{
    /**
     * @var mixed
     */

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'likes' => $this->likes,
            'views' => $this->views,
        ];
    }
}
