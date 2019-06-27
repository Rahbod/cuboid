<?php

namespace App\Observers;

use App\Resource;

class ResourceObserver
{
    use DestroyCacheTrait;
    /**
     * Handle the resource "created" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function created(Resource $resource)
    {
        $this->deleteCacheDepartments();
    }

    /**
     * Handle the resource "updated" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function updated(Resource $resource)
    {
        $this->deleteCacheDepartments();
    }

    /**
     * Handle the resource "deleted" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function deleted(Resource $resource)
    {
        $this->deleteCacheDepartments();
    }

    /**
     * Handle the resource "restored" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function restored(Resource $resource)
    {
        //
    }

    /**
     * Handle the resource "force deleted" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function forceDeleted(Resource $resource)
    {
        //
    }
}
