<?php

class Application_Model_Regrecurso
{
	
	public function regRecurso($array)
	{
		$dbTable=new Application_Model_DbTable_Recurso();
		$dbTable->insert($array);
	}


}

