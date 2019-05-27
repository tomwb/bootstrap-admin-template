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
      'Buttons' => [
        'name' => 'Buttons',
        'link' => 'buttons.php',
      ],
    ]
  ],
  'table' => [
    'name' => 'Table',
    'icon' => 'fa-table',
    'link' => 'tables.php',
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
  
];
?>
<aside class="left-menu">
  <div class="menu-close text-right p-2">
    <i class="fa fa-times"></i>
  </div>
	<ul class="nav flex-column">
    <?php
    foreach ($menu as $key => $load) :
    ?>
    <li class="nav-item <?= $key == 'dashboard' ? 'active' : '' ?>">
      <a href="<?= $load['link'] ?>">
        <i class="fas <?= $load['icon'] ?>"></i>
        <span><?= $load['name'] ?></span>
      </a>
      <?php 
      if (! empty($load['childrens'])) :
      ?>
        <small class="nav-open">
          <i class="fa fa-plus-square-o"></i>
          <i class="fa fa-minus-square-o"></i>
        </small>
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