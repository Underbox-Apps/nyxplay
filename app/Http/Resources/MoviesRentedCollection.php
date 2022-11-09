<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MoviesRentedCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        try {
            return [
                "id" => $this->id,
                "movie_id" => $this->movie_id,
                "movie_name" => $this->movie_name,
                "user_id" => $this->user_id,
                "created_at" => $this->created_at,
                "expiration_date" => $this->expiration_date,
                "user" => new UserResource($this->lodger_user),
            ];
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                "serve_error_message" => $e->getMessage()
            ], 402);
        }

    }
}
