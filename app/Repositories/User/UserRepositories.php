<?php


namespace App\Repositories\User;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\RepositoryInterface;

class UserRepositories  implements RepositoryInterface
{
    // model property on class instances
    protected $model;

    // request property
    protected $request;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function prepare(object $request)
    {
        $this->request = $request;
    }

    // Get all instances of model
    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    // create a new record in the database
    public function create(array $data)
    {
        $this->model->fill($this->request->validated());
        return $this->model->save();
    }

    // update record in the database
    public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }

}