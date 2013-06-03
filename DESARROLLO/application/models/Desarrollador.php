<?php

class Application_Model_Desarrollador
{
	public  function regdes($array)
		{
	$dbTable = new Application_Model_DbTable_Desarrolladores();
	$dbTable->insert($array);
		}
		
	
		
		
}

