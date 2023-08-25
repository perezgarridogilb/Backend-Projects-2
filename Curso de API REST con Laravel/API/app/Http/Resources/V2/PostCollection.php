<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /** Creando una coleción y un recurso individual
     * Cómo retornando una colección podemos dar formato a un recurso individual
     */
    public $collects = PostResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        /**
         * Personalización global
         * Afectando a muchos recursos al mismo tiempo
         */
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Platzi',
                'authors' => [
                    'Nombre global',
                    'Platzi'
                ]
                ],
                'type' => 'articles'
        ];
    }
}
