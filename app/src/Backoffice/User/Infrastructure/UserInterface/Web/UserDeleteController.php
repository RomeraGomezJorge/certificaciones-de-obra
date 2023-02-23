<?php

declare(strict_types=1);

namespace App\Backoffice\User\Infrastructure\UserInterface\Web;

use App\Backoffice\User\Application\Delete\UserDeleter;
use App\Shared\Infrastructure\Constant\MessageConstant;
use App\Shared\Infrastructure\Symfony\WebController;
use App\Shared\Infrastructure\UserInterface\Web\ValidationRulesToDelete;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserDeleteController extends WebController
{
    /**
     * @var UserDeleter
     */
    private UserDeleter $deleter;
    /**
     * @var ValidationRulesToDelete
     */
    private ValidationRulesToDelete $rulesToDelete;

    public function __construct(UserDeleter $deleter, ValidationRulesToDelete $rulesToDelete)
    {
        $this->deleter       = $deleter;
        $this->rulesToDelete = $rulesToDelete;
    }

    public function __invoke(Request $request): JsonResponse
    {
        $id               = $request->get('id');
        $isCsrfTokenValid = $this->isCsrfTokenValid($id, $request->get('csrf_token'));

        if (!$isCsrfTokenValid) {
            return new JsonResponse(array(
                'status'  => 'fail_invalid_csfr_token',
                'message' => MessageConstant::INVALID_TOKEN_CSFR_MESSAGE
            ));
        }

        $validationErrors = $this->rulesToDelete->verify($request);

        $response = $validationErrors->count() !== 0 ?
            array(
                'status'  => 'fail',
                'message' => MessageConstant::UNEXPECTED_ERROR_HAS_OCCURRED
            ) :
            $this->delete($id);

        return new JsonResponse($response);
    }

    private function delete(string $id): array
    {
        $this->deleter->__invoke($id);

        return ['status' => 'success'];
    }
}
	
