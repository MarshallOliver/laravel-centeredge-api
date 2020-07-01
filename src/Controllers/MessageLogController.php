<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Controllers;

use MarshallOliver\LaravelCenterEdgeAPI\MessageLog;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\MessageLogCollection;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\MessageLog as MessageLogResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageLogController extends Controller
{
    public function index($database, Request $request)
    {

    	return new MessageLogCollection(MessageLog::on($database)->where($request->filter)->orderBy('MsgDateTime', 'desc')->paginate(50)->withQueryString());

    }
}
