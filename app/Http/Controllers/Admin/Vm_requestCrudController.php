<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Vm_requestRequest as StoreRequest;
use App\Http\Requests\Vm_requestRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class Vm_requestCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class Vm_requestCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Vm_request');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/vm_request');
        $this->crud->setEntityNameStrings('vm_request', 'vm_requests');
        $this->crud->setEditView('admin.vmform.edit');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();

        // Columns
        $this->crud
            ->addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Name'])
            ->addColumn(['name' => 'notes', 'type' => 'text', 'label' => 'Notes']);

        // Fields
        $this->crud
            ->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name'])
            ->addField(
                [   // CKEditor
                    'name' => 'notes',
                    'label' => 'Notes',
                    'type' => 'ckeditor',
                    // optional:
                    'extra_plugins' => ['oembed', 'widget'],
                    'options' => [
                        'autoGrow_minHeight' => 200,
                        'autoGrow_bottomSpace' => 50,
                        'removePlugins' => 'resize,maximize',
                    ]
                ]
            );

        // add asterisk for fields that are required in Vm_requestRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
