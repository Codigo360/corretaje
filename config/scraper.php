<?php 
require_once 'libreria/Dom/simple_html_dom.php';
class Html
{
	public function recorre($dire,$find)
		{	
			$html = file_get_html($dire);
			{
				foreach ($html->find($find) as $key=>$valor)
				{	

					//$resultado = filter_var($valor,FILTER_SANITIZE_NUMBER_INT);	
					/*$cantidad = mb_substr_count($valor,"-");
					echo "Cantidad : ".$cantidad."<br/>";*/
					if (isset($key))
					{
						$array = explode("|",$valor, 3);				
						echo "Metros : ".$array[0] . PHP_EOL."<br/>";
						echo "Dormitorios : ".$array[1] . PHP_EOL."<br/>";
						echo "Baños : ".$array[2] . PHP_EOL."<br/>";
						echo "<strong>Key : ".$key."</strong><br/>";
						echo "<hr>";
					}
										
				}																				
				echo "Registros encontrados :".$filas=count($html->find($find));
			}
		}	
	public function completo($dire,$find)
		{	
			$html = file_get_html($dire);
			{
				foreach ($html->find($find) as $key=>$valor)
				{	

					//$resultado = filter_var($valor,FILTER_SANITIZE_NUMBER_INT);	
					/*$cantidad = mb_substr_count($valor,"-");
					echo "Cantidad : ".$cantidad."<br/>";*/
					if (isset($key))
					{
						$array = explode("|",$valor, 3);				
						echo "Metros : ".$array[0] . PHP_EOL."<br/>";
						echo "Dormitorios : ".$array[1] . PHP_EOL."<br/>";
						echo "Baños : ".$array[2] . PHP_EOL."<br/>";
						echo "<strong>Key : ".$key."</strong><br/>";
						echo "<hr>";
					}
										
				}																				
				echo "Registros encontrados :".$filas=count($html->find($find));
			}
		}	

}
?>