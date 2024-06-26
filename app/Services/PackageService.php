<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StorePackageRequest;
use App\Models\PackageFeatures;

class PackageService
{

    /**
     * Handle store data event to models.
     *
     * @param StoreRequest $request
     *
     * @return array|bool
     */
    public function store(StorePackageRequest $request)
    {
        $data = $request->validated();

        return [
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
            'name_feature' => $data['name_feature']
        ];
    }

    public function storeFeatures(array $name_features, $package)
    {
        foreach ($name_features as $data) {
            PackageFeatures::create([
                'package_id' => $package,
                'name_feature' => $data['name_feature'],
            ]);
        };
    }

    public function updateFeatures(array $name_features, $package)
    {
        PackageFeatures::where('package_id', $package)->delete();
        foreach ($name_features as $data) {
            PackageFeatures::create([
                'package_id' => $package,
                'name' => $data,
            ]);
        };
    }
}
