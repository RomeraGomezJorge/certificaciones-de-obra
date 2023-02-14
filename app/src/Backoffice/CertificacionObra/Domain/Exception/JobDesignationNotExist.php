<?php
	
	declare(strict_types=1);
	
	namespace App\Backoffice\CertificacionObra\Domain\Exception;
	
	use App\Shared\Domain\DomainError;
	
	final class JobDesignationNotExist extends DomainError
	{
		private string $id;
		
		public function __construct(string $id)
		{
			$this->id = $id;
			
			parent::__construct();
		}
		
		public function errorCode(): string
		{
			return 'certificacion_obranot_exist';
		}
		
		protected function errorMessage(): string
		{
			return sprintf('The job designation <%s> does not exist', $this->id);
		}
	}