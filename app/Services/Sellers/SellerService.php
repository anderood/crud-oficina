<?php

namespace App\Services\Sellers;

class SellerService implements SellerServiceInterface
{
    protected $sellerService;

    public function __construct(SellerServiceInterface $sellerService)
    {
        $this->sellerService = $sellerService;
    }

    public function allSellers()
    {
        // TODO: Implement allSellers() method.
    }

    public function sellerById(int $id)
    {
        // TODO: Implement sellerById() method.
    }

    public function createSeller(array $data)
    {
        // TODO: Implement createSeller() method.
    }

    public function updateSeller(array $data, int $id)
    {
        // TODO: Implement updateSeller() method.
    }

    public function deleteSeller(int $id)
    {
        // TODO: Implement deleteSeller() method.
    }
}
