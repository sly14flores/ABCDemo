<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Group;

class UserList extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

		return array(
			"id"=>$this->id,
			"firstname"=>$this->firstname,
			"lastname"=>$this->lastname,
			"email"=>$this->email,
			"username"=>$this->username,
			"created_at"=>$this->created_at
		);		
    }
}
