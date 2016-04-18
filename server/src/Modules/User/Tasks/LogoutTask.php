<?php

namespace Mega\Modules\User\Tasks;

use Mega\Services\Core\Task\Abstracts\Task;
use Mega\Services\Authentication\Portals\AuthenticationService;

/**
 * Class LogoutTask
 *
 * @type Task
 * @package  Mega\Services\User\Tasks
 * @author   Mahmoud Zalt <mahmoud@zalt.me>
 */
class LogoutTask extends Task
{

    /**
     * @var \Mega\Modules\User\Tasks\AuthenticationService|\Mega\Services\Authentication\Portals\AuthenticationService
     */
    private $authenticationService;

    /**
     * LoginTask constructor.
     *
     * @param \Mega\Modules\User\Tasks\AuthenticationService $authenticationService
     */
    public function __construct(
        AuthenticationService $authenticationService
    ) {

        $this->authenticationService = $authenticationService;
    }

    /**
     * @param $authorizationHeader
     *
     * @return bool
     */
    public function run($authorizationHeader)
    {
        $ok = $this->authenticationService->logout($authorizationHeader);

        return $ok;
    }

}
