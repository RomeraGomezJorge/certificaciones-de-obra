<?php
  
  declare(strict_types=1);
  
  
  namespace App\Backoffice\Dashboard\Infrastructure\UserInterface\Web;
  
  use App\Shared\Infrastructure\Symfony\WebController;
  use Symfony\Component\HttpFoundation\Request;
  use Symfony\Component\HttpFoundation\Response;

  
  class DashboardGetLearningSupportTeamController extends WebController {
    
    const SORT_A_LIST_BY_SURNAME = 'surname';
    
    const SORT_A_LIST_ALPHABETICALLY = 'asc';
    
    const LIST_BEGIN_ON_0 = 0;
    
    const LIST_END_ON_1000 = 1000;
    

    
    public function __construct(

    ) {

    }
    
    public function __invoke(Request $request): Response {

      return $this->render('backoffice/dashboard/home.html.twig');
    }
    

    
  }
	