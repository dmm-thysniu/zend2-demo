<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Portal\Controller\Index' => 'Portal\Controller\IndexController',
        ),
    ),
    
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'album' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/index[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Portal\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',      
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',        
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),        
//        'template_path_stack' => array(
//            'portal' => __DIR__ . '/../view',
//        ),
    ),
);

