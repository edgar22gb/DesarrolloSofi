<?php

class Application_Model_Clientes
{
	public function addclien($array)
	{
		$Tablecliente=new Application_Model_DbTable_Clientes();
		$Tablecliente->insert($array);
	}

}

