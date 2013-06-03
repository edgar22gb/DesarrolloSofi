<?php

if($this->id[0]=="v" and $this->id[1]=="e" and $this->id[2]=="r" and $this->id[3]==" " and $this->id[4]=="b" and $this->id[5]=="a" and $this->id[6]=="s" and $this->id[7]=="e" and $this->id[8]=="s")
{
	$enlace = mysql_connect('localhost', 'root', '');
	if(!$enlace)
	{
		die('No pudo conectarse: ' . mysql_error());

	}

	$sql = mysql_query("show databases",$enlace);
	
 	while($db= mysql_fetch_row($sql)){
		echo $db[0]."<br/>";
	}

}



if($this->id[0]=="c" and $this->id[1]=="r" and $this->id[2]=="e" and $this->id[3]=="a" and $this->id[4]==" " and $this->id[5]=="b" and $this->id[6]=="a" and $this->id[7]=="s" and $this->id[8]=="e" and $this->id[9]==" " and $this->id[10]!="" and $this->id[10]!=" ")
{
	$tama=strlen($this->id);
	$bd="";
	for($c=10;$c<$tama;$c++)
	{
		$bd=$bd.$this->id[$c];
	}

	$enlace = mysql_connect('localhost', 'root', '');
	if (!$enlace)
	{
		die('No pudo conectarse: ' . mysql_error());
	}

	$sql = 'CREATE DATABASE '.$bd;
	if (mysql_query($sql, $enlace)) 
	{
		echo "La base de datos ".$bd." fue creada correctamente";
	} 
	else 
	{
		echo 'Error al crear la base de datos: ' . mysql_error() . "\n";
	}
}

if($this->id[0]=="c" and $this->id[1]=="r" and $this->id[2]=="e" and $this->id[3]=="a" and $this->id[4]==" " and $this->id[5]=="t" and $this->id[6]=="a" and $this->id[7]=="b" and $this->id[8]=="l" and $this->id[9]=="a" and $this->id[10]==" "  and $this->id[11]!=" "  and $this->id[11]!="")
{
	$tama=strlen ($this->id);
	$bd="";
	for($c=11;$c<$tama;$c++)
	{
	$bd=$bd.$this->id[$c];
	}
	$tabla="";
	for($c=0;$c<strlen($bd);$c++){
		if($bd[$c]==" "){
			break;
		}
		else{
		$tabla=$tabla.$bd[$c];
		}
	}
	
	$base="";
	for($c=$c+1;$c<strlen($bd);$c++){
			$base=$base.$bd[$c];
	}
	$enlace = mysql_connect('localhost', 'root', '');
	mysql_select_db($base) or die(mysql_error());
	if(mysql_query("CREATE TABLE $tabla (id int auto_increment primary key)")){
	echo "tabla creada correctamente";
	}
	else{
	echo mysql_error();	
	}
	//alter table tabla1 add campo1 varchar(3)
}

if($this->id[0]=="c" and $this->id[1]=="r" and $this->id[2]=="e" and $this->id[3]=="a" and $this->id[4]==" " and $this->id[5]=="p" and $this->id[6]=="r" and $this->id[7]=="o" and $this->id[8]=="y" and $this->id[9]=="e" and $this->id[10]=="c" and $this->id[11]==" " and $this->id[12]!=" " and $this->id[12]!="")
{
	
	
	$tama=strlen ($this->id);
	$bd="";
	for($c=12;$c<$tama;$c++)
	{
	$bd=$bd.$this->id[$c];
	}
	
	$ruta="/home/edgar/Documentos/PROYECTOS";
	mkdir($ruta);
	$ruta1="/home/edgar/Documentos/PROYECTOS/ZF";
	mkdir($ruta1);
	$ruta2="/home/edgar/Documentos/PROYECTOS/ZF/Docs";
	mkdir($ruta2);
	$ruta3="/home/edgar/Documentos/PROYECTOS/ZF/Libray";
	mkdir($ruta3);
	$ruta4="/home/edgar/Documentos/PROYECTOS/ZF/Public";
	mkdir($ruta4);
	$ruta5="/home/edgar/Documentos/PROYECTOS/ZF/test";
	mkdir($ruta5);
	
	
	
	
	
	
	
	echo "Esctructura creada correctamen en ".$ruta5;

}

if($this->id[0]=="c" and $this->id[1]=="r" and $this->id[2]=="e" and $this->id[3]=="a" and $this->id[4]=="r" and $this->id[5]==" " and $this->id[6]=="p" and $this->id[7]=="r" and $this->id[8]=="o" and $this->id[9]=="y" and $this->id[10]=="e" and $this->id[11]==" " and $this->id[12]!=" " and $this->id[12]!="")
{
	$tama= strlen($this->id);
	$bd="";
	for($c=12;$c<$tama;$c++)
	{
		$bd=$bd.$this->id[$c];
	}
	$ruta="/home/edgar/Documentos/PROYECTOS";
	mkdir($ruta);
	$ruta1="/home/edgar/Documentos/PROYECTOS/RR";
	mkdir($ruta1);
	$ruta2="/home/edgar/Documentos/PROYECTOS/RR/App";
	mkdir($ruta2);
	$ruta3="/home/edgar/Documentos/PROYECTOS/RR/Config";
	mkdir($ruta3);
	$ruta4="/home/edgar/Documentos/PROYECTOS/RR/Db";
	mkdir($ruta4);
	$ruta5="/home/edgar/Documentos/PROYECTOS/RR/Lib";
	mkdir($ruta5);
	$ruta6="/home/edgar/Documentos/PROYECTOS/RR/Log";
	mkdir($ruta6);
	$ruta7="/home/edgar/Documentos/PROYECTOS/RR/Public";
	mkdir($ruta7);
	$ruta8="/home/edgar/Documentos/PROYECTOS/RR/Script";
	mkdir($ruta8);
	$ruta9="/home/edgar/Documentos/PROYECTOS/RR/Test";
	mkdir($ruta9);
	$ruta10="/home/edgar/Documentos/PROYECTOS/RR/Tmp";
	mkdir($ruta10);
	$ruta11="/home/edgar/Documentos/PROYECTOS/RR/Vendor";
	mkdir($ruta11);
	
	echo"Estructura creada en ".$ruta11;
	
	
	
	
	
	
} 
echo "hola repositorio";
/*if($this->id[0]=="c" and $this->id[1]=="o" and $this->id[2]=="n" and $this->id[3]=="t" and $this->id[4]=="e" and $this->id[5]=="n" and $this->id[6]=="e" and $this->id[7]=="d" and $this->id[8]=="o" and $this->id[9]=="r" and $this->id[10]==" " and $this->id[11]!=" " and $this->id[11]!="")
{

	
	$tama=strlen ($this->id);
	 $bd="";
	for($c=12;$c<$tama;$c++)
	{
	$bd=$bd.$this->id[$c];
	}

	$dirRaiz="home/edgar/Documentos/pdsof/docs";
	$archivoCopiar="README.txt";
	$copiadeArchivo="prueba.txt";
	
	$nombreArchivo_copiar="$dirRaiz".$archivoCopiar;
	$nombreArchivoCopia="$dirRaiz".$copiadeArchivo;
	copy($nombreArchivo_copiar,$nombreArchivoCopia);
	
	echo"archivo copiado en ".$dirRaiz;
	
}
*/


if($this->id[0]=="v" and $this->id[1]=="e" and $this->id[2]=="r" and $this->id[3]==" " and $this->id[4]=="c" and $this->id[5]=="a" and $this->id[6]=="r" and $this->id[7]=="p" and $this->id[8]=="e" and $this->id[9]=="t" and $this->id[10]=="a")
{
	$path="/home/edgar/Documentos/PROYECTOS";
	$directorio=dir($path);
	echo "Directorio ".$path."<br>";
	while ($archivo = $directorio->read())
	{
		echo $archivo."<br>";
	}
	$directorio->close();
}




/* 
if($this->id[0]=="v" and $this->id[2]=="e" and $this->id[2]=="r" and $this->id[3]==" " and $this->id[4]=="p" and $this->id[5]=="r" and $this->id[6]=="o" and $this->id[7]=="y" and $this->id[8]=="e" and $this->id[9]=="c" and $this->id[10]==" " and $this->id[11]!="")
{
	$tama=strlen ($this->id);
	$directorio="":
	for($c=11;$c<$tama;$c++)
	{
	$directorio=$directorio.$this->id[$c];
	}
	$directorio=opendir("/srv/www/")
	
	while ($archivo=readdir($directorio))
	{
		if(is_dir($archivo))
		{
			echo "[.$archivo.]<br/>";
			
		}
		else
		{
			echo $archivo."<br/>";
		}
	}
	
}*/
?>