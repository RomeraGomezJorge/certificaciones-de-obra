<?php


namespace App\Shared\Infrastructure;


use App\Shared\Infrastructure\UserInterface\Web\TwigTemplateGlobalConstants;
use Symfony\Component\Routing\RouterInterface;

class TwigTemplateConstantsBase
{
    /**
     * @var RouterInterface
     */
    protected RouterInterface $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function getAddUrl(array $params = [])
    {
        return $this->router->generate(static::ADD_PATH,$params);
    }

    public function getCreateUrl(array $params = [])
    {
        return $this->router->generate(static::CREATE_PATH,$params);
    }

    public function getDeleteUrl(array $params = [])
    {
        return $this->router->generate(static::DELETE_PATH,$params);
    }

    public function getEdithUrl(string $id)
    {
        return $this->router->generate(static::EDIT_PATH, ['id' => $id]);
    }

    public function getListUrl(array $params = [])
    {
        return $this->router->generate(static::LIST_PATH, $params);
    }

    public function getUpdateUrl(array $params = [])
    {
        return $this->router->generate(static::UPDATE_PATH,$params);
    }

    public function getDeleteConfirmationModalUrl(array $params = [])
    {
        return $this->router->generate(TwigTemplateGlobalConstants::DELETE_CONFIRMATION_MODAL_PATH,$params);
    }


}