<?php 
namespace bagadlag\controller;

use bagadlag\model\dao\daoEvent;

class EventController{
	
	public function show()
	{
		
		$a = new daoEvent();
		$result = $a->selectAll();
			
		include("view/event.html");
	}
	
	   public function delEvent()
    {
        $id = intval($_GET['id']);
        $a = new daoEvent();
        $a->eventDelete($id);
    }

}



?>