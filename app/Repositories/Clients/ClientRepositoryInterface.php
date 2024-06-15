<?php

namespace App\Repositories\Clients;

interface ClientRepositoryInterface
{
    public function allClients();

    public function clientById(int $id);

    public function createClient(Array $data);

    public function updateClient(Array $data, int $id);

    public function deleteClient(int $id);
}
