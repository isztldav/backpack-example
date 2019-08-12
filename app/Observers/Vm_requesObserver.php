<?php

namespace App\Observers;

use App\Models\Vm_request;

class Vm_requesObserver
{

    public function creating(Vm_request $vmRequest)
    {
        $vmRequest->user_id = backpack_user()->id;
    }

    /**
     * Handle the vm_request "created" event.
     *
     * @param  \App\Vm_request  $vmRequest
     * @return void
     */
    public function created(Vm_request $vmRequest)
    {
        //
    }

    public function updating(Vm_request $vmRequest)
    {
        //
    }

    /**
     * Handle the vm_request "updated" event.
     *
     * @param  \App\Vm_request  $vmRequest
     * @return void
     */
    public function updated(Vm_request $vmRequest)
    {
        //
    }

    public function deleting(Vm_request $vmRequest)
    {
        //
    }

    /**
     * Handle the vm_request "deleted" event.
     *
     * @param  \App\Vm_request  $vmRequest
     * @return void
     */
    public function deleted(Vm_request $vmRequest)
    {
        //
    }

    public function restoring(Vm_request $vmRequest)
    {
        //
    }

    /**
     * Handle the vm_request "restored" event.
     *
     * @param  \App\Vm_request  $vmRequest
     * @return void
     */
    public function restored(Vm_request $vmRequest)
    {
        //
    }

    /**
     * Handle the vm_request "force deleted" event.
     *
     * @param  \App\Vm_request  $vmRequest
     * @return void
     */
    public function forceDeleted(Vm_request $vmRequest)
    {
        //
    }

    public function saving(Vm_request $vmRequest)
    {
        //
    }

    public function saved(Vm_request $vmRequest)
    {
        //
    }
}
