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
    $actions =Action::all();
    return view('actions.actions', compact('actions'));
  }

  /**
  * Display all the actions available in a category
  * @param: $type as the actions type
  * @return: all available of the given type datas of the actions table on the actions view
  */
  public function displayType($type){
    $actions = Action::where('action_type',$type)->get();
    return view('actions.actions', compact('actions'));
  }

  /**
  * Display an action
  * @param: $id of the action
  * @return: the action choosen on the action single view
  */
  public function show(Action $action){
    return view('actions.action', compact('action'));
  }

  /**
  * Display a form to create an action and insert it in the table when submitting
  * @return: the action validation status
  */
  public function create(){
    return view('actions.create');
  }

  /**
  * store a action
  * @param: id of the action to modify if modifying else nothing
  * @return: the action validation status
  */
  public function create(){
    return view('actions.create');
  }


}
