<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/backoffice/user/create' => [
            [['_route' => 'user_add', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\UserAddController'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'user_create', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\UserPostController'], null, ['POST' => 0], null, false, false, null],
        ],
        '/backoffice/user/update' => [[['_route' => 'user_update', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\UserPutController'], null, ['POST' => 0], null, false, false, null]],
        '/backoffice/user/username-available' => [[['_route' => 'user_name_available', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\UserNameAvailableController'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/user/email-available' => [[['_route' => 'user_email_available', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\UserEmailAvailableController'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/user/delete' => [[['_route' => 'user_delete', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\UserDeleteController'], null, ['POST' => 0], null, false, false, null]],
        '/backoffice/user/reset-password-modal' => [[['_route' => 'user_reset_password_modal', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\ResetPasswordModalPopupController'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/user/reset-password' => [[['_route' => 'user_reset_password', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\ResetPasswordPostByAjaxController'], null, ['POST' => 0], null, false, false, null]],
        '/backoffice/user/account-management' => [[['_route' => 'user_account_management', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\AccountManagementGetController'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/user/update-account' => [[['_route' => 'user_account_update', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\AccountPutController'], null, ['POST' => 0], null, false, false, null]],
        '/backoffice/job-designation/create' => [
            [['_route' => 'certificacion_obra_add', '_controller' => 'App\\Backoffice\\CertificacionObra\\Infrastructure\\UserInterface\\Web\\CertificacionObraAddController'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'certificacion_obra_create', '_controller' => 'App\\Backoffice\\CertificacionObra\\Infrastructure\\UserInterface\\Web\\CertificacionObraPostController'], null, ['POST' => 0], null, false, false, null],
        ],
        '/backoffice/job-designation/update' => [[['_route' => 'certificacion_obra_update', '_controller' => 'App\\Backoffice\\CertificacionObra\\Infrastructure\\UserInterface\\Web\\CertificacionObraPutController'], null, ['POST' => 0], null, false, false, null]],
        '/backoffice/job-designation/delete' => [[['_route' => 'certificacion_obra_delete', '_controller' => 'App\\Backoffice\\CertificacionObra\\Infrastructure\\UserInterface\\Web\\CertificacionObraDeleteController'], null, ['POST' => 0], null, false, false, null]],
        '/reset-password' => [
            [['_route' => 'forgot_password_request', '_controller' => 'App\\Backoffice\\Authentication\\ResetPasswordRequest\\Infrastructure\\UserInterface\\Web\\ResetPasswordRequestController'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'process_sending_password_reset_email', '_controller' => 'App\\Backoffice\\Authentication\\ResetPasswordRequest\\Infrastructure\\UserInterface\\Web\\ProcessSendingPasswordResetEmailController'], null, ['POST' => 0], null, false, false, null],
        ],
        '/email-message-sent' => [[['_route' => 'email_message_sent', '_controller' => 'App\\Backoffice\\Authentication\\ResetPasswordRequest\\Infrastructure\\UserInterface\\Web\\EmailMessageSentController'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/delete-confirm-modal' => [[['_route' => 'delete_confirmation_modal', '_controller' => 'App\\Shared\\Infrastructure\\UserInterface\\Web\\DeleteConfirmationModalController'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Backoffice\\Authentication\\Login\\SecurityController:login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Backoffice\\Authentication\\Login\\SecurityController:logout'], null, null, null, false, false, null]],
        '/backoffice/dashboard/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Backoffice\\Dashboard\\Infrastructure\\UserInterface\\Web\\DashboardController'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/dashboard/search-learning-support-team' => [[['_route' => 'dashboard_learning_support_team_data', '_controller' => 'App\\Backoffice\\Dashboard\\Infrastructure\\UserInterface\\Web\\DashboardGetLearningSupportTeamController'], null, ['GET' => 0], null, false, false, null]],
        '/backoffice/error' => [[['_route' => 'error_page', '_controller' => 'App\\Backoffice\\ErrorPage\\Infrastructure\\UserInterface\\Web\\ErrorPageGetController'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/translations(?:/([\\w]+)(?:\\.(js|json))?)?(*:84)'
                .'|/backoffice/(?'
                    .'|user/(?'
                        .'|list(?:/([^/\\-]++)(?:\\-([^/]++)(?:/([^/\\-]++)(?:\\-([^/\\-]++)(?:\\-([^/]++)(?:/([^/\\-]++)(?:\\-([^/]++)(?:/([^/]++))?)?)?)?)?)?)?)?(*:242)'
                        .'|edit/([^/]++)(*:263)'
                    .')'
                    .'|job\\-designation/(?'
                        .'|list(?:/([^/\\-]++)(?:\\-([^/]++)(?:/([^/\\-]++)(?:\\-([^/\\-]++)(?:\\-([^/]++)(?:/([^/\\-]++)(?:\\-([^/]++)(?:/([^/]++))?)?)?)?)?)?)?)?(*:420)'
                        .'|edit/([^/]++)(*:441)'
                    .')'
                .')'
                .'|/set\\-a\\-new\\-password(?'
                    .'|(?:/([^/]++))?(*:490)'
                    .'|(*:498)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        84 => [[['_route' => 'bazinga_jstranslation_js', '_controller' => 'bazinga.jstranslation.controller::getTranslationsAction', 'domain' => 'messages', '_format' => 'js'], ['domain', '_format'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'user_list', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\UserGetController', 'pageLabel' => 'page', 'page' => 1, 'orderLabel' => 'order', 'order' => 'createAt', 'orderBy' => 'desc', 'limitLabel' => 'rows_per_page', 'limit' => 10, 'filters' => null], ['pageLabel', 'page', 'orderLabel', 'order', 'orderBy', 'limitLabel', 'limit', 'filters'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        263 => [[['_route' => 'user_edit', '_controller' => 'App\\Backoffice\\User\\Infrastructure\\UserInterface\\Web\\UserEditController'], ['id'], ['GET' => 0], null, false, true, null]],
        420 => [[['_route' => 'certificacion_obra_list', '_controller' => 'App\\Backoffice\\CertificacionObra\\Infrastructure\\UserInterface\\Web\\CertificacionObraGetController', 'pageLabel' => 'page', 'page' => 1, 'orderLabel' => 'order', 'order' => 'createAt', 'orderBy' => 'desc', 'limitLabel' => 'rows_per_page', 'limit' => 10, 'filters' => null], ['pageLabel', 'page', 'orderLabel', 'order', 'orderBy', 'limitLabel', 'limit', 'filters'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        441 => [[['_route' => 'certificacion_obra_edit', '_controller' => 'App\\Backoffice\\CertificacionObra\\Infrastructure\\UserInterface\\Web\\CertificacionObraEditController'], ['id'], ['GET' => 0], null, false, true, null]],
        490 => [[['_route' => 'reset_password', '_controller' => 'App\\Backoffice\\Authentication\\ResetPasswordRequest\\Infrastructure\\UserInterface\\Web\\NewPasswordGetController', 'token' => null], ['token'], ['GET' => 0], null, false, true, null]],
        498 => [
            [['_route' => 'update_password', '_controller' => 'App\\Backoffice\\Authentication\\ResetPasswordRequest\\Infrastructure\\UserInterface\\Web\\NewPasswordPostController', 'token' => null], [], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
