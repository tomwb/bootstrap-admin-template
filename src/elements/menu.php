<?php
$menu = [
  'dashboard' => [
    'name' => 'Dashboard',
    'icon' => 'fa-tachometer-alt',
    'link' => 'dashboard.php',
  ],
  'ui' => [
    'name' => 'UI Elements',
    'icon' => 'fa-desktop',
    'link' => 'ui_elements.php',
    'childrens' => [
      'typography' => [
        'name' => 'Typography',
        'link' => 'typography.php',
      ],
      'Icons' => [
        'name' => 'Icons',
        'link' => 'icons.php',
      ],
    ]
  ],
  'table' => [
    'name' => 'Table',
    'icon' => 'fa-table',
    'link' => 'table.php',
  ],
  'forms' => [
    'name' => 'Form',
    'icon' => 'fa-edit',
    'link' => 'form.php',
  ],
  'pages' => [
    'name' => 'Pages',
    'icon' => 'fa-file',
    'link' => '#',
    'childrens' => [
      'login' => [
        'name' => 'Login',
        'link' => '/src/pages/login',
      ],
      'ForgotPassword' => [
        'name' => 'Forgot Password',
        'link' => '#',
      ],
      '404' => [
        'name' => '404 Page',
        'link' => '#',
      ],
      '500' => [
        'name' => '500 Page',
        'link' => '#',
      ],
    ]
  ],
  'charts' => [
    'name' => 'Charts',
    'icon' => 'fa-chart-bar',
    'link' => '#',
  ],
  'widgets' => [
    'name' => 'Widgets',
    'icon' => 'fa-list-alt',
    'link' => '#',
  ],
  
];
?>
<aside class="left-menu">
	<ul class="nav flex-column">
    <?php
    foreach ($menu as $key => $load) :
    ?>
    <li class="nav-item <?= $key == 'active' ? 'active' : '' ?>">
      <a href="<?= $load['link'] ?>">
        <i class="fas <?= $load['icon'] ?>"></i>
        <span><?= $load['name'] ?></span>
      </a>
      <?php 
      if (! empty($load['childrens'])) :
      ?>
        <ul class="sub-nav flex-column">
        <?php
          foreach ($load['childrens'] as $key => $children) :
          ?>
          <li class="sub-nav-item">
            <a href="<?= $children['link'] ?>">
              <?= $children['name'] ?>
            </a>
          </li>
          <?php
          endforeach;
          ?>
        </ul>
      <?php
      endif; 
      ?>
    </li>
    <?php
    endforeach;
    ?>
  </ul>
</aside>