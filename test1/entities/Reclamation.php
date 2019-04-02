<?php  
	/**
	 * 
	 */
	class Reclamation
	{
		private $id;
		private $probleme;
		private $email;
		private $message;
		private $etat;
		private $date_rec;

		/*
$Probleme,$email,$message,$etat,$date_rec;
		*/
		
		function __construct($email,$probleme,$message,$date_rec)
		{
			$this->email = $email;
			$this->probleme = $probleme;
			$this->message = $message;
			$this->date_rec = $date_rec;
			$this->etat = 0 ;
		}

		function get_etat(){
		return $this->etat;
	    }

	    function get_prob(){
		return $this->probleme;
		}

		function get_message(){
		return $this->message;
		}

		function get_date(){
		return $this->date_rec;
		}

		function get_email(){
		return $this->email;
		}
		function get_id(){
		return $this->id;
		}
	}

?>