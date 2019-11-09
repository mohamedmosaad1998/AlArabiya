<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CourseRequest as StoreRequest;
use App\Http\Requests\CourseRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class CourseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CourseCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Course');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/course');
        $this->crud->setEntityNameStrings('course', 'courses');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();
/*
        $this->crud->addColumns([
            [
                'name' => 'id',
                'label' => "Course ID",
            ],
            [
                'name' => 'image', // The db column name
                'label' => "Course image", // Table column heading
                'type' => 'image',
                'prefix'=>'uploads/',
                'height'=>'150px',
                'width'=>'150px',
            ],
            [
                'name'=>'title',
                'label'=>'Title',
                'type'=>'text'
            ],
            [
                'name' => 'startDate',
                'label' => "StartDate",
                'type' => "datetime",
            ],
            [
                // 1-n relationship
                'label' => 'Category', // Table column heading
                'type' => "select",
                'name' => 'category_id', // the column that contains the ID of that connected entity;
                'entity' => 'Category', // the method that defines the relationship in your Model
                'attribute' => "name", // foreign key attribute that is shown to user
                'model' => "App\Models\Category", // foreign key model
            ],
            [
                // 1-n relationship
                'label' => 'Instructor', // Table column heading
                'type' => "select",
                'name' => 'user_id', // the column that contains the ID of that connected entity;
                'entity' => 'User', // the method that defines the relationship in your Model
                'attribute' => "name", // foreign key attribute that is shown to user
                'model' => "App\Models\User", // foreign key model
            ],


        ]);

        $this->crud->addFields([
            [
                'name'=>'title',
                'label'=>'Title',
                'type'=>'text'
            ],
            [   // CKEditor
                'name' => 'description',
                'label' => 'Description',
                'type' => 'ckeditor',
                // optional:
                'extra_plugins' => ['oembed', 'widget'],
                'options' => [
                    'autoGrow_minHeight' => 200,
                    'autoGrow_bottomSpace' => 50,
                    'removePlugins' => 'resize,maximize',
                ]
            ],
            [
                'name' => 'startDate', // The db column name
                'label' => "StartDate", // Table column heading
                'type' => "datetime",
            ],
            [
                // 1-n relationship
                'label' => 'Instructor', // Table column heading
                'type' => "select",
                'name' => 'user_id', // the column that contains the ID of that connected entity;
                'entity' => 'User', // the method that defines the relationship in your Model
                'attribute' => "name", // foreign key attribute that is shown to user
                'model' => "App\Models\User", // foreign key model
            ],
            [
                // 1-n relationship
                'label' => 'Category', // Table column heading
                'type' => "select",
                'name' => 'category_id', // the column that contains the ID of that connected entity;
                'entity' => 'category', // the method that defines the relationship in your Model
                'attribute' => "name", // foreign key attribute that is shown to user
                'model' => "App\Models\Category", // foreign key model
            ],
            [
                'label' => "Course Image",
                'name' => 'image',
                'type' => 'upload',
                'upload' => true,
            ],
            [ // Table
                'name' => 'meta',
                'label' => 'Meta',
                'type' => 'table',
                'entity_singular' => 'option', // used on the "Add X" button
                'columns' => [
                    'name' => 'Meta Name',
                    'desc' => 'Meta Content',
                ],
                'max' => 50, // maximum rows allowed in the table
                'min' => 0, // minimum rows allowed in the table
            ]
        ]);
*/
        $this->crud->enableBulkActions();
        $this->crud->addBulkDeleteButton();
//        $this->crud->enableDetailsRow();
//        $this->crud->allowAccess('details_row');
        $this->crud->allowAccess('show');
        $this->crud->enableExportButtons();
        // add asterisk for fields that are required in CourseRequest
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

    public function showDetailsRow($id){
        return view('vendor.backpack.crud.details_row')->with(['data'=>Course::find($id)->toArray()]);
    }
}

