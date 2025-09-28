<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Servicses\Admin\ServiceService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    /**
     * TODO: Display a listing of all services (Web Route)
     * Admin can see all services regardless of status
     */
    public function index()
    {
        // TODO: Implement method to show all services list page
        // Use $this->serviceService->getAllServicesList()
        return view("admin.services.index", ['services' => collect()]);
    }

    /**
     * TODO: Display the specified service (Web Route)
     */
    public function show($id)
    {
        // TODO: Implement method to show single service
        // Use $this->serviceService->getServiceById($id)
        return view("admin.services.show", ['service' => null]);
    }

    /**
     * TODO: Update service status (Web Route)
     */
    public function updateStatus(Request $request, $id)
    {
        // TODO: Implement method to update service status
        // Use $this->serviceService->updateServiceStatus($id, $request->status)
        return redirect()->route('admin.services.index')
            ->with('success', 'Service status updated successfully.');
    }

}
