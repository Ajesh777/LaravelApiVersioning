<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // 8: For Entire Article Table contents:
        return parent::toArray($request);

        /**  
         * 8.1: For selected Article Table contents:
         * return [
         *   'id' => $this->id,
         *   'title' => $this->title,
         *   'body' => $this->body
         *   //'created_at' => $this->created_at
         *   ];
        */
    }

    /**
     * 8.2: For Json content with customised wrapping.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request){
        return [
            'version' => '1.0.1',
            'author_url' => url('http://synergyinfo.co.in')
        ];
    }
}
