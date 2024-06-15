<?php

namespace App\Repositories\Sellers;

interface SellerRepositoryInterface
{
    public function allSellers();

    public function sellerById(int $id);

    public function createSeller(Array $data);

    public function updateSeller(Array $data, int $id);

    public function deleteSeller(int $id);
}
