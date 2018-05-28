<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use app\Actor;





class ActorController extends Controller
{
    function Index (){
    	$sql = "SELECT * FROM actors ORDER BY actor_id ASC";
    	$taskss = DB::select($sql);

    	foreach($taskss as $row){
    		echo $row->first_name;
    		echo "<br>";
    	}
    }

   function get2(){
   	$task = Actor::orderBy('actor_id', 'asc')->get();

   	foreach ($taskss as $row) {
   		echo $row->first_name;
    		echo "<br>";
   		
   	}
   }
}
