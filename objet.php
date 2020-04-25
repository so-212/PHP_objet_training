<?php 

class Personnage{

	private $_experience;
	private $_force;
	private $_degats;

	const FORCE_PETITE = 20 ;
	const FORCE_MOYENNE = 50 ;
	const FORCE_GRANDE = 80 ;

	public function  __construct($force, $degats){

		echo"le personnage a bien été crée";

		this->_experience = 1;
		this->_force;
		this->_degats;

	}

	public function gagnerExperience(){

		this->_experience ++;

	}

	public function frapper(Personnage $persoAfrapper){
//Personnage $persoAfrapper permet de specifier que le parametre est un objet de la classse Personnage
		$persoAfrapper->_degats += this->_force; 

	}

/*accesseurs et mutateurs*/

/*accesseur*/

	public function degats(){
		return this->_degats;
	}
	public function force(){
		return this->_force;
	}
	public function experience(){
		return this->_experience;
	}
/*mutateurs*/
	
	public function setForce($force){
//sans faire appel aux constantes:
		/*if(!is_int($force)){
			trigger_error("force ne pt pas etre negative", )
		}
		if($force > 100){
			trigger_error("la force ne pt exceder 100");
		}
*/
		//en faisant appel aux ctes:

		if(in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE? self::FORCE_GRANDE]){
			this->_force = $force;
		}


		/*this->_force = $force;*/
	}

}

