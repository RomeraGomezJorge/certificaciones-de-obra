<?php
	
	declare(strict_types=1);
	
	namespace App\Backoffice\Obra\Domain\Exception;
	
	use App\Shared\Domain\DomainError;
	
	final class ObraNotExist extends DomainError
	{
		private string $id;
		
		public function __construct(string $id)
		{
			$this->id = $id;
			
			parent::__construct();
		}
		
		public function errorCode(): string
		{
			return 'obra_not_exist';
		}
		
		protected function errorMessage(): string
		{
			return sprintf('La obra con el id <%s> no exite', $this->id);
		}
	}