<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CategoryRequest as StoreRequest;
use App\Http\Requests\CategoryRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CategoryCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Category');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/category');
        $this->crud->setEntityNameStrings('category', 'categories');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
//        $this->crud->setFromDb();
        $arr=
        [
            [
                'name'=>'orderBy',
                'label'=>'Order',
                'type'=>'number'
            ]
            , [
                'name'=>'name',
                'label'=>'Name',
                'type'=>'text'
            ]
            ,[
                'name' => 'image', // The db column name
                'label' => "Category image", // Table column heading
                'type' => 'upload',
                'prefix'=>'uploads/category',
                'height'=>'150px',
                'width'=>'150px',
                'upload' => true,
            ]
        ];
        $this->crud->addFields([
            [
                'name'=>'orderBy',
                'label'=>'orderBy',
                'type'=>'number'
            ],
            [
                'name'=>'name',
                'label'=>'Name',
                'type'=>'text'
            ]
            ,[
                'name' => 'image', // The db column name
                'label' => "Category image", // Table column heading
                'type' => 'upload',
                'prefix'=>'uploads/',
                'upload' => true,
            ],
            [
                'name' => 'active',
                'label' => 'Active',
                'type' => 'checkbox'
            ]
        ]);

        $this->crud->addColumns([
            [
                'name'=>'orderBy',
                'label'=>'Order',
                'type'=>'number'
            ],
            [
                'name'=>'name',
                'label'=>'Name',
                'type'=>'text'
            ]
            ,[
                'name' => 'image', // The db column name
                'label' => "Category image", // Table column heading
                'type' => 'image',
                'prefix'=>'uploads/',
                'height'=>'300px',
                'width'=>'300px',
            ],
            [
                'name' => 'active',
                'label' => 'Active',
                'type' => 'boolean'
            ]
        ]);

        $this->crud->enableBulkActions();
        $this->crud->addBulkDeleteButton();
//        $this->crud->enableDetailsRow();
//        $this->crud->allowAccess('details_row');
        $this->crud->allowAccess('show');
        $this->crud->enableExportButtons();
        // add asterisk for fields that are required in CategoryRequest
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
