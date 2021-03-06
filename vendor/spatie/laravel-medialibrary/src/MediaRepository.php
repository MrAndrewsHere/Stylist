<?php

namespace Spatie\MediaLibrary;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Illuminate\Database\Eloquent\Collection as DbCollection;

class MediaRepository
{
    /** @var \Spatie\MediaLibrary\Media */
    protected $model;

    /** @param \Spatie\MediaLibrary\Media $model */
    public function __construct(Media $model)
    {
        $this->model = $model;
    }

    /**
     * Get all media in the collection.
     *
     * @param \Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia $model
     * @param string $collectionName
     * @param array|callable $filter
     *
     * @return \Illuminate\Support\Collection
     */
    public function getCollection(HasMedia $model, string $collectionName, $filter = []): Collection
    {
        return $this->applyFilterToMediaCollection($model->loadMedia($collectionName), $filter);
    }

    /**
     * Apply given filters on media.
     *
     * @param \Illuminate\Support\Collection $media
     * @param array|callable $filter
     *
     * @return \Illuminate\Support\Collection
     */
    protected function applyFilterToMediaCollection(Collection $media, $filter): Collection
    {
        if (is_array($filter)) {
            $filter = $this->getDefaultFilterFunction($filter);
        }

        return $media->filter($filter);
    }

    public function all(): DbCollection
    {
        return $this->model->all();
    }

    public function getByModelType(string $modelType): DbCollection
    {
        return $this->model->where('model_type', $modelType)->get();
    }

    public function getByIds(array $ids): DbCollection
    {
        return $this->model->whereIn('id', $ids)->get();
    }

    public function getByModelTypeAndCollectionName(string $modelType, string $collectionName): DbCollection
    {
        return $this->model
            ->where('model_type', $modelType)
            ->where('collection_name', $collectionName)
            ->get();
    }

    public function getByCollectionName(string $collectionName): DbCollection
    {
        return $this->model
            ->where('collection_name', $collectionName)
            ->get();
    }

    /**
     * Convert the given array to a filter function.
     *
     * @param $filters
     *
     * @return \Closure
     */
    protected function getDefaultFilterFunction(array $filters): Closure
    {
        return function (Media $media) use ($filters) {
            foreach ($filters as $property => $value) {
                if (! Arr::has($media->custom_properties, $property)) {
                    return false;
                }

                if (Arr::get($media->custom_properties, $property) !== $value) {
                    return false;
                }
            }

            return true;
        };
    }
}
