<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePropertyRequest;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(StorePropertyRequest $request)
    {
        $this->authorize('properties-manage');

        return Property::create($request->validated());
    }
}
