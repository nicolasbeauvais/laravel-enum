<?php

namespace Spatie\Enum\Laravel\Tests\Extra;

use Spatie\Enum\Laravel\Http\EnumRequest;

final class StatusFormGetRequest extends StatusFormRequest
{
    public function enums(): array
    {
        return [
            EnumRequest::REQUEST_QUERY => [
                'status' => StatusEnum::class,
            ],
        ];
    }
}
