<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // TODO: Implement the resource transformation
        // Return an array with the following fields:
        // - id, name, parent_id
        // - parent (when loaded)
        // - children_count (when loaded)
        // - created_at, updated_at

        return [
            // TODO: Add category fields here
        ];
    }
}
