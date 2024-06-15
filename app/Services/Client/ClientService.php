<?php

namespace App\Services\Client;

class ClientService implements ClientServiceInterface
{

    protected $clientService;

    public function __construct(ClientServiceInterface $clientService)
    {
        $this->clientService = $clientService;
    }

    public function allClients()
    {
        // TODO: Implement allClients() method.
    }

    public function clientById(int $id)
    {
        // TODO: Implement clientById() method.
    }

    public function createClient(array $data)
    {
        // TODO: Implement createClient() method.
    }

    public function updateClient(array $data, int $id)
    {
        // TODO: Implement updateClient() method.
    }

    public function deleteClient(int $id)
    {
        // TODO: Implement deleteClient() method.
    }
}
