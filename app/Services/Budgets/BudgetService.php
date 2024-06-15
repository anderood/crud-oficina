<?php

namespace App\Services\Budgets;

class BudgetService implements budgetServiceInterface
{

    protected $budgetService;

    public function __construct(BudgetServiceInterface $budgetService)
    {
        $this->$budgetService = $budgetService;
    }

    public function allBudgets()
    {
        // TODO: Implement allBudgets() method.
    }

    public function budgetById(int $id)
    {
        // TODO: Implement budgetById() method.
    }

    public function createBudget(array $data)
    {
        // TODO: Implement createBudget() method.
    }

    public function updateBudget(array $data, int $id)
    {
        // TODO: Implement updateBudget() method.
    }

    public function deleteBudget(int $id)
    {
        // TODO: Implement deleteBudget() method.
    }
}
