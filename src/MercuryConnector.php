<?php

namespace EzeeSpace\Mercury;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

class MercuryConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        if (config('mercury.environment') === 'sandbox') {
            return 'https://api-sandbox.mercury.com/api/v1';
        }

        return 'https://api.mercury.com/api/v1';
    }

    public function defaultAuth(): ?Authenticator
    {
        return new TokenAuthenticator(config('mercury.api_key'));
    }

    public function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'accept' => 'application/json',
        ];
    }
}
