<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\PositionAdvertisementInterface;
use App\Models\PositionAdvertisement;

class PositionAdvertisementReporitory extends BaseRepository implements PositionAdvertisementInterface
{
    public function __construct(PositionAdvertisement $positionAdvertisement)
    {
        $this->model = $positionAdvertisement;
    }

    /**
     * Handle show method and delete data instantly from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete(mixed $id): mixed
    {
        return $this->model->query()
            ->findOrFail($id)
            ->delete();
    }

    /**
     * Handle get the specified data by id from models.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->where('user_id', $id)
            ->get();
    }

    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()
            ->get();
    }

    /**
     * Handle store data event to models.
     *
     * @param array $data
     *
     * @return mixed
     */
    public function updateOrCreate($page, $position, $price): mixed
    {
        return $this->model->query()
            ->updateOrCreate(
                ['page' => $page,
                'position' => $position],
                ['price' => $price]
            );
    }

    /**
     * Handle show method and update data instantly from models.
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */
    public function update(mixed $id, array $data): mixed
    {
        return $this->model->query()
            ->findOrFail($id)
            ->update($data);
    }

    public function getByPage (mixed $page)
    {
        return $this->model->query()
        ->where('page', $page)
        ->get();
    }
}