<?php

namespace App\Http\Servicses\Admin;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    /**
     * TODO: Get all categories without pagination
     *
     * @return Collection
     */
    public function getAllCategoriesList(): Collection
    {
        // TODO: Implement method to get all categories with parent relationship
        return collect(); // Temporary return
    }

    /**
     * TODO: Get category by ID
     *
     * @param int $id
     * @return Category
     */
    public function getCategoryById(int $id): Category
    {
        // TODO: Implement method to get category by ID with relationships
        throw new \Exception('Method not implemented'); // Temporary
    }

    /**
     * TODO: Create a new category
     *
     * @param array $data
     * @return Category
     */
    public function createCategory(array $data): Category
    {
        // TODO: Implement method to create a new category
        throw new \Exception('Method not implemented'); // Temporary
    }

    /**
     * TODO: Update an existing category
     *
     * @param int $id
     * @param array $data
     * @return Category
     */
    public function updateCategory(int $id, array $data): Category
    {
        // TODO: Implement method to update category
        throw new \Exception('Method not implemented'); // Temporary
    }

    /**
     * TODO: Delete a category
     *
     * @param int $id
     * @return bool
     */
    public function deleteCategory(int $id): bool
    {
        // TODO: Implement method to delete category
        return false; // Temporary return
    }

    /**
     * TODO: Get parent categories (categories without parent)
     *
     * @return Collection
     */
    public function getParentCategories(): Collection
    {
        // TODO: Implement method to get parent categories
        return collect(); // Temporary return
    }

    /**
     * TODO: Check if category has children
     *
     * @param int $id
     * @return bool
     */
    public function hasChildren(int $id): bool
    {
        // TODO: Implement method to check if category has children
        return false; // Temporary return
    }

    /**
     * TODO: Get categories for API with ordering, filtering, and search
     * This method should handle:
     * - Ordering by name, created_at, etc.
     * - Filtering by parent_id, status, etc.
     * - Searching by name
     * - Pagination
     *
     * @param array $params
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getCategoriesForApi(array $params = [])
    {
        // TODO: Implement this method
        // Parameters might include:
        // - search: string for name search
        // - order_by: field to order by (name, created_at)
        // - order_direction: asc/desc
        // - parent_id: filter by parent
        // - per_page: pagination


        return collect(); // Temporary return
    }
}
