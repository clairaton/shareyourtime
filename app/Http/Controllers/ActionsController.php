<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;

class ActionsController extends Controller
{
  /**
  * Display all the actions available
  * @return: all available datas of the actions table on the actions view
  */
  public function index(){
    $actions =Action::all()->sortByDesc('id');
    return view('actions.actions', compact('actions'));
  }

  /**
  * Display all the actions available in a category
  * @param: $type as the actions type
  * @return: all available of the given type datas of the actions table on the actions view
  */
  public function displayType($type){
    $actions = Action::where('action_type',$type)->orderBy('updated_at', 'DESC')->get();
    return view('actions.actions', compact('actions'));
  }

  /**
  * Display an action
  * @param: $id of the action
  * @return: the action choosen on the action single view
  */
  public function show($type,Action $action){
    return view('actions.action', compact('action'));
  }

  /**
  * Display actions list after submitting the a search form
  * @param: id of the action to modify if modifying else nothing
  * @return: the action validation status
  */
  public function list(){
    // Search an action list using the request data
    // Store request datas
    $type=request('actionType');
    // query DB
    if($type=='all'){
      return ActionsController::index();
    }else{
      return redirect('/actions/'.$type);
    }
  }

  /**
  * Display a form to create an action and insert it in the table when submitting
  * @return: the action validation status
  */
  public function create(){
    return view('actions.create');
  }

  /**
  * Store an action
  * @return: redirect to the actions page
  */
  public function store(){
    // Create a new action using the request data
    $action =new Action;
    $action->action_name=request('actionName');
    $action->action_desc=request('actionDesc');
    $action->action_type=request('actionType');
    $action->action_begin=request('actionBegin');
    $action->action_end=request('actionEnd');
    $action->action_location=request('actionLocation');
    $action->request_company_id=1;
    // Save it into the db
    $action->save();
    // Redirect to actions page
    return redirect('/actions/'.$action->action_type);
  }


}
