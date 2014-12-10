<?php

class TodosController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /todos
     *
     * @return Response
     */
    public function index()
    {
        $todos = Todo::all();

        return $todos;
    }

    /**
     * Store a new record in database.
     * POST /todos
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();

        $todoData = [
            'title'     => $data['title'],
            'completed' => $data['completed'],
        ];

        try
        {
            Todo::create($todoData);
        } catch (Exception $e)
        {
            return Response::json([
                'error' => 'ERROR: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Update the completed status of a specific todo record.
     *
     * @param $id
     */
    public function update($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->completed = Input::get('completed');
        $todo->save();
    }

}