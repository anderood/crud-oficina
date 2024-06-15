<?php

namespace App\Repositories\Budgets;

interface BudgetRepositoryInterface
{
    public function allBudgets();

    public function budgetById(int $id);

    public function createBudget(Array $data);

    public function updateBudget(Array $data, int $id);

    public function deleteBudget(int $id);
}
