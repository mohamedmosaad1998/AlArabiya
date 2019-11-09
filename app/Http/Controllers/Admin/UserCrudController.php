<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\UserRequest as StoreRequest;
use App\Http\Requests\UserRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    public function show($id)
    {
        $content = parent::show($id);

        $this->crud->removeColumns(['des','name','title','date','extras','image']);

        $this->crud->addColumn([
        'name'=>'des',
        'label'=>'Description',
        'type'=>'textarea'
        ])->makeFirstColumn();

        $this->crud->addColumn([
            'name'=>'name',
            'label'=>'Name',
            'type'=>'text'
        ])->makeFirstColumn();

        $this->crud->addColumn([
            'name'=>'title',
            'label'=>'Title',
            'type'=>'text'
        ])->makeFirstColumn();

        $this->crud->addColumn([
            'name' => 'image', // The db column name
            'label' => "Profile image", // Table column heading
            'type' => 'image',
            'prefix'=>'uploads/',
            'height' => '200px',
            'width' => '200px',
        ])->makeFirstColumn();

        return $content;
    }
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\User');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/user');
        $this->crud->setEntityNameStrings('user', 'users');

        // TODO: remove setFromDb() and manually define Fields and Columns

        // add asterisk for fields that are required in UserRequest

        $this->crud->addColumns([
            'title',
            'name',
            [
                'name' => 'email', // The db column name
                'label' => "Email Address", // Table column heading
                'type' => 'email',
            ],
            [
                'name' => 'isActive',
                'label' => 'Active',
                'type' => 'boolean',
                // optionally override the Yes/No texts
                 'options' => [1 => 'Active', 0 => 'Inactive']


            ],
            [
                'name' => "bdate", // The db column name
                'label' => "Birthday", // Table column heading
                'type' => "date",
            ],
            [
                'name' => 'image', // The db column name
                'label' => "Profile image", // Table column heading
                'type' => 'image',
                'prefix'=>'uploads/'
            ],
        ]);


        $this->crud->addFields([
            [
                'name' => 'title',
                'label' => 'Title',
                'type' => 'text'
            ],
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text'
            ],
            [
                'name' => 'email',
                'label' => 'Email Address',
                'type' => 'email'
            ],
            [
                'name' => 'des',
                'label' => 'Description',
                'type' => 'textarea'
            ],
            [   // date_picker
                'name' => 'bdate',
                'type' => 'date',
                'label' => 'Birthday',
                // optional:
                'date_picker_options' => [
                    'todayBtn' => 'linked',
                    'format' => 'dd-mm-yyyy',
                    'language' => 'fr'
                ],
            ],
            [
                'label' => "Profile Image",
                'name' => 'image',
                'type' => 'upload',
                'upload' => true,
            ],
            [   // Password
                'name' => 'password',
                'label' => 'Password',
                'type' => 'password'
            ],
            [   // Password
                'name' => 'password_confirmation',
                'label' => 'password Confirmation',
                'type' => 'password'
            ],
            [
                'name' => 'isActive',
                'label' => "Active",
                'type' => 'select2_from_array',
                'options' => [1 => 'Active', 0 => 'not Active'],
                'allows_null' => false,
                'default' => 1,
            ],
            [
                'name' => 'is_admin',
                'label' => "Admin",
                'type' => 'select2_from_array',
                'options' => [0 => 'User',1 => 'Admin'],
                'allows_null' => false,
                'default' => 0,
            ]
        ]);
        $this->crud->enableBulkActions();
        $this->crud->addBulkDeleteButton();
//        $this->crud->enableDetailsRow();
//        $this->crud->allowAccess('details_row');
        $this->crud->allowAccess('show');
        $this->crud->enableExportButtons();
//        $this->crud->allowAccess('clone');
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        $this->validate($request,['password' => ['sometimes', 'string', 'min:8', 'confirmed']]);
        if ($request->has('password'))$request['password']=Hash::make($request['password']);
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        if ($request->has('password') && $request->password !=''){
            $this->validate($request,['password' => ['sometimes', 'string', 'min:8', 'confirmed']]);
            $request['password']=Hash::make($request['password']);
        }
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
    public function showDetailsRow($id){return view('vendor.backpack.crud.details_row')->with(['data'=>User::find($id)]);}
}
