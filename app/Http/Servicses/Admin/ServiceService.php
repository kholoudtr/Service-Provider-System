<?php

namespace App\Http\Servicses\Admin;

use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;

class ServiceService
{
    /**
     * TODO: Get all services without pagination
     *
     * @return Collection
     */
    public function getAllServicesList(): Collection
    {
        // TODO: Implement method to get all services with relationships
        return collect(); // Temporary return
    }

    /**
     * TODO: Get service by ID
     *
     * @param int $id
     * @return Service
     */
    public function getServiceById(int $id): Service
    {
        // TODO: Implement method to get service by ID with relationships
        throw new \Exception('Method not implemented'); // Temporary
    }

    /**
     * TODO: Update service status
     *
     * @param int $id
     * @param string $status
     * @return Service
     */
    public function updateServiceStatus(int $id, string $status): Service
    {
        // TODO: Implement method to update service status
        throw new \Exception('Method not implemented'); // Temporary
    }

}
