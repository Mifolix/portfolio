<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes\Property;
use OpenApi\Attributes\Schema;
use OpenApi\Attributes\Xml;

#[Schema(
    title: 'TechnologyResource',
    description: 'User',
    properties: [
        new Property(
            property: 'id',
            description: 'Идентификатор записи',
            type: 'integer',
        ),
        new Property(
            property: 'title',
            description: 'Название',
            type: 'string',
        ),
        new Property(
            property: 'icon',
            description: 'icon',
            type: 'string',
        ),
    ],
    xml: new Xml(
        name: 'UserResource'
    )
)]
class TechnologyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'icon' => asset('storage/' . $this->icon),
        ];
    }
}
