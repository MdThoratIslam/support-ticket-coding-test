<?php

namespace App\Http\Resources\Tickets;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     *     $table->foreignId('user_id')->constrained('users');
     * $table->string('name');
     * $table->string('description');
     * $table->enum('status', ['open', 'closed']);
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'user'          => $this->user,
            'name'          => $this->name,
            'description'   => $this->description,
            'status'        => $this->status,
            'created_at'    => Carbon::parse($this->created_at)->timezone('Asia/Kolkata')->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::parse($this->updated_at)->timezone('Asia/Kolkata')->format('Y-m-d H:i:s'),
        ];
    }
}
