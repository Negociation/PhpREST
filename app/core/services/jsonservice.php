<?php

namespace Services;

use Doctrine\Common\Annotations\AnnotationReader;



class JsonService{
	
	protected static $modelObject;
	protected static $jsonTokens = [];
	protected static $properties = [];
	protected static $jsonOutput = [];
	protected static $objectOutput;
	
	//Get a JSON Output
	public static function encode($convertObject){
	

		if(is_object($modelObject = $convertObject)){ /* CONVERT OBJECTS TO JSON */
			
			//Reflection Object
			$reflectionClass = new \ReflectionClass(get_class($modelObject));
			$annotationReader = new AnnotationReader();
			
			
			//Get Properties	
			foreach ($reflectionClass->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED) as $prop) {
				//Annotations of Property
				$obj = $annotationReader->getPropertyAnnotations(new \ReflectionProperty($reflectionClass->getName(), $prop->getName()));

				//Push Annotation
				array_push(self::$properties, array($prop->getName(),$obj));
			}
								

			//Read Properties
			foreach (self::$properties as $key => $propertyArray){
				foreach ($propertyArray[1] as $propKey => $property) {
					if(get_class($property) == 'Annotations\MER\Coluna'){
						$indexName = isset($property->nome) ? $property->nome : $propertyArray[$propKey];
						
						if(!isset($jsonOutput[$indexName])){
							self::$jsonOutput[$indexName] = $modelObject->__get($propertyArray[$propKey]);			
						}else{
							throw new \Exception('Multiple Paramerts seted with the same Json Key at (' . get_class($modelObject) . ').');
							return false;
						}
					}
				}
			}
			
			return json_encode(self::$jsonOutput);
			
		}else if(is_array($arrayObject = $convertObject) && count($convertObject) == 2){ /* CONVERT SQL ARRAYS TO JSON */
		
			//Reflection Object
			$reflectionClass = new \ReflectionClass(get_class($arrayObject[1]));
			$annotationReader = new AnnotationReader();



			//Get Properties	
			foreach ($reflectionClass->getProperties(\ReflectionProperty::IS_PUBLIC | \ReflectionProperty::IS_PROTECTED) as $prop) {
				//Annotations of Property
				$obj = $annotationReader->getPropertyAnnotations(new \ReflectionProperty($reflectionClass->getName(), $prop->getName()));

				//Push Annotation
				array_push(self::$properties, array($prop->getName(),$obj));
			}
			
			/* TODO */
			// Relacionar a declaração de coluna com a declaração de Json em um Array de Mapeamento
			// Ler a entrada de dados e verificar se alguma coluna do array bate com a coluna de Json
			// Elaborar um Array [Json] = Valor do Array
			// Caso a entrada seja um Array de Array tratar
			
			





			
			
			
			
		}else{
			return false;
		}
	}
	
	//Get a Object Output
	public function decode($jsonInput){
		if (json_last_error() === JSON_ERROR_NONE) {
		}else{
			return false;
		}
	}
	
}


?>