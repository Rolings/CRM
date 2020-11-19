<?php


namespace App\Repositories;


interface  RepositoryInterface
{

    /**
     * Function prepare request
     * @param object $request
     * @return mixed
     */
    public function prepare(object $request);

    /**
     * Function return all model
     * @return mixed
     */
    public function all();

    /**
     * Function find in model by id
     * @param int $id
     * @return mixed
     */
    public function find(int $id);

    /**
     * Function create record in model
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * Function update record in model by id
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id);

    /**
     * Function remove record by id
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);

    /**
     * Function return record in model by id
     * @param int $id
     * @return mixed
     */
    public function show(int $id);
}