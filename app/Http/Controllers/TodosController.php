<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $client = new Client;
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos/?_limit=20');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $todo = json_decode($body, true);

        return view('todos.index', compact('todo'));
    }
}
