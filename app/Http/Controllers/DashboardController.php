<?php

namespace App\Http\Controllers;

use App\Document;
use App\Form;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $documents = Document::latest()->take(2)->get();
        $forms = Form::latest()->take(2)->get();
        //Todos Api
        $client = new Client;
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos/?_limit=5');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $todos = json_decode($body, true);



        return view('dashboard', compact(['documents', 'forms', 'todos']));
    }
}
