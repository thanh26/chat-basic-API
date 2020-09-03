<?php

namespace App\Http\Resources;

use App\Models\Message;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RoomCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $rooms = $this->collection;

        foreach ($rooms as $room) {
            $latMessage = Message::where('room_id', $room->id)->latest()->first();
            if($latMessage) {

            }
            $content = $latMessage ? $latMessage->content : '';
            $createdAt = $latMessage ? $latMessage->created_at->toDateTimeString() : '';

            $room->setAttribute('lastMessageContent', $content);
            $room->setAttribute('lastMessageTime', $createdAt);
        }

        return [
            'data' => $this->collection,
        ];
    }
}
