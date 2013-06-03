<?php

class Application_Model_Versiones
{
public  function regversion($array)
	{
		$dbTable = new Application_Model_DbTable_Version();
		$dbTable->insert($array);
	}

}

