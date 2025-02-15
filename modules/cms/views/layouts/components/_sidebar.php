<?php

use yii\helpers\Url;

// Get the current module, controller, and action
$module = Yii::$app->controller->module->id;
$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;

// Define sidebar menu structure with module, controller, and action
$sidebarMenus = [
    [
        'label' => 'Dashboard',
        'url' => Url::to(['/cms/default/index']),
        'icon' => 'fas fa-tachometer-alt ', // Blue for dashboard
        'module' => 'cms',
        'controller' => 'default',
        'action' => 'index',
    ],
    [
        'label' => 'Services',
        'url' => Url::to(['/cms/service/index']),
        'icon' => 'fas fa-user-graduate text-success', // Green for Services
        'module' => 'cms',
        'controller' => 'service',
        'action' => 'index',
    ],
    [
        'label' => 'Site Settings',
        'url' => Url::to(['/cms/site-settings/index']),
        'icon' => 'fas fa-chalkboard-teacher text-info', // Light blue for teachers
        'module' => 'cms',
        'controller' => 'site-settings',
        'action' => 'index',
    ],
    // [
    //     'label' => 'Subjects',
    //     'url' => Url::to(['/cms/subject/index']),
    //     'icon' => 'fas fa-book', // Yellow color for education and knowledge
    //     'module' => 'cms',
    //     'controller' => 'subject',
    //     'action' => 'index',
    // ],

    // [
    //     'label' => 'Classes & Sections',
    //     'icon' => 'fas fa-school text-warning', // Yellow for school-related items
    //     'submenu' => true,
    //     'active' => in_array($controller, ['classes', 'stream']),
    //     'items' => [
    //         [
    //             'label' => 'Classes',
    //             'url' => Url::to(['/cms/classes/index']),
    //             'module' => 'cms',
    //             'controller' => 'classes',
    //             'action' => 'index',
    //         ],
    //         [
    //             'label' => 'Sections',
    //             'url' => Url::to(['/cms/section/index']),
    //             'module' => 'cms',
    //             'controller' => 'section',
    //             'action' => 'index',
    //         ],
    //     ]
    // ],
    // [
    //     'label' => 'Finance Section',
    //     'icon' => 'fas fa-money-bill-wave text-danger', // Red for financial transactions
    //     'submenu' => true,
    //     'active' => in_array($controller, ['fees-collection', 'fees-type', 'fees-group', 'fees-assignment', 'mpesa-transaction']),
    //     'items' => [
    //         [
    //             'label' => 'Collect Fees',
    //             'url' => Url::to(['/cms/fees-collection/index']),
    //             'module' => 'cms',
    //             'controller' => 'fees-collection',
    //             'action' => 'index',
    //         ],
    //         [
    //             'label' => 'Fees Types',
    //             'url' => Url::to(['/cms/fees-type/index']),
    //             'module' => 'cms',
    //             'controller' => 'fees-type',
    //             'action' => 'index',
    //         ],
    //         [
    //             'label' => 'Fees Groups',
    //             'url' => Url::to(['/cms/fees-group/index']),
    //             'module' => 'cms',
    //             'controller' => 'fees-group',
    //             'action' => 'index',
    //         ],
    //         [
    //             'label' => 'Assign Fees',
    //             'url' => Url::to(['/cms/fees-assignment/index']),
    //             'module' => 'cms',
    //             'controller' => 'fees-assignment',
    //             'action' => 'index',
    //         ],
    //         [
    //             'label' => 'M-Pesa Transactions',
    //             'url' => Url::to(['/cms/mpesa-transaction/index']),
    //             'module' => 'cms',
    //             'controller' => 'mpesa-transaction',
    //             'action' => 'index',
    //         ],
    //     ]
    // ],
    // [
    //     'label' => 'Academics Section',
    //     'icon' => 'fas fa-chalkboard-teacher text-info', // Light blue for teachers
    //     'submenu' => true,
    //     'active' => in_array($controller, ['academic-year', 'term', 'student-attendance', 'exam-result', 'exam-type']),
    //     'items' => [
    //         [
    //             'label' => 'Academic Years',
    //             'url' => Url::to(['/cms/academic-year/index']),
    //             'icon' => 'fas fa-chalkboard-teacher text-info', // Light blue for teachers
    //             'module' => 'cms',
    //             'controller' => 'academic-year',
    //             'action' => 'index',
    //         ],
         
    //         [
    //             'label' => 'Terms',
    //             'url' => Url::to(['/cms/term/index']),
    //             'icon' => 'fas fa-chalkboard-teacher text-info', // Light blue for teachers
    //             'module' => 'cms',
    //             'controller' => 'term',
    //             'action' => 'index',
    //         ],
    //         [
    //             'label' => 'Student Attendance',
    //             'url' => Url::to(['/cms/student-attendance/index']),
    //             'icon' => 'fas fa-chalkboard-teacher text-info', // Light blue for teachers
    //             'module' => 'cms',
    //             'controller' => 'student-attendance',
    //             'action' => 'index',
    //         ],
    //         [
    //             'label' => 'Exam Results',
    //             'url' => Url::to(['/cms/exam-result/index']),
    //             'icon' => 'fas fa-chalkboard-teacher text-info', // Light blue for teachers
    //             'module' => 'cms',
    //             'controller' => 'exam-result',
    //             'action' => 'index',
    //         ],
    //         [
    //             'label' => 'Exam Types',
    //             'url' => Url::to(['/cms/exam-type/index']),
    //             'icon' => 'fas fa-chalkboard-teacher text-info', // Light blue for teachers
    //             'module' => 'cms',
    //             'controller' => 'exam-type',
    //             'action' => 'index',
    //         ],
    //     ]
    // ],
    // [
    //     'label' => 'Payhero Payments',
    //     'url' => Url::to(['/cms/payhero-payment/index']),
    //     'icon' => 'fas fa-chalkboard-teacher text-danger', // Light blue for teachers
    //     'module' => 'cms',
    //     'controller' => 'payhero-payment',
    //     'action' => 'index',
    // ],
 
];

?>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Dashboard</span>
                </li>

                <?php foreach ($sidebarMenus as $menu): ?>
                    <?php
                    $submenuActive = false; // Track if any subitem is active
                    if (isset($menu['submenu']) && $menu['submenu']) {
                        foreach ($menu['items'] as $subItem) {
                            if ($module == $subItem['module'] && $controller == $subItem['controller'] && $action == $subItem['action']) {
                                $submenuActive = true;
                                break;
                            }
                        }
                    }
                    ?>

                    <?php if (isset($menu['submenu']) && $menu['submenu']): ?>
                        <!-- Submenu -->
                        <li class="submenu <?= ($menu['active'] || $submenuActive) ? 'active' : '' ?>">
                            <a href="#"><i class="<?= $menu['icon'] ?>"></i> <span> <?= $menu['label'] ?> </span> <span class="menu-arrow"></span></a>
                            <ul style="display: <?= $submenuActive ? 'block' : 'none' ?>;">
                                <?php foreach ($menu['items'] as $subItem): ?>
                                    <li>
                                        <a href="<?= $subItem['url'] ?>"
                                            class="pjax-link <?= ($module == $subItem['module'] && $controller == $subItem['controller'] && $action == $subItem['action']) ? 'active' : '' ?>">
                                            <?= $subItem['label'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <!-- Regular Menu -->
                        <li class="<?= ($module == $menu['module'] && $controller == $menu['controller'] && $action == $menu['action']) ? 'active' : '' ?>">
                            <a href="<?= $menu['url'] ?>" class="pjax-link"><i class="<?= $menu['icon'] ?>"></i> <span> <?= $menu['label'] ?> </span></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</div>