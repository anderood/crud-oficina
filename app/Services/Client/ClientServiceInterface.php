<?php

namespace App\Services\Client;

interface ClientServiceInterface
{
    public function allClients();

    public function clientById(int $id);

    public function createClient(Array $data);

    public function updateClient(Array $data, int $id);

    public function deleteClient(int $id);
}
