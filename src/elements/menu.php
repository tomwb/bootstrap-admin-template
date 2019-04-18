<?php
$menu = [
  'dashboard' => [
    'name' => 'Dashboard',
    'icon' => 'fa-tachometer-alt',
    'link' => '#',
  ],
  'pages' => [
    'name' => 'Pages',
    'icon' => 'fa-file',
    'link' => '#',
    'childrens' => [
      'table' => [
        'name' => 'Table',
        'icon' => 'fa-table',
        'link' => '#',
      ],
      'table2' => [
        'name' => 'Table',
        'icon' => 'fa-table',
        'link' => '#',
      ],
      'forms' => [
        'name' => 'Form',
        'icon' => 'fa-edit',
        'link' => '#',
        'childrens' => [
          'table' => [
            'name' => 'Table',
            'icon' => 'fa-table',
            'link' => '#',
          ],
          'table2' => [
            'name' => 'Table',
            'icon' => 'fa-table',
            'link' => '#',
          ],
        ]
      ],
      'forms2' => [
        'name' => 'Form',
        'icon' => 'fa-edit',
        'link' => '#',
      ],
    ]
  ],
  'table' => [
    'name' => 'Table',
    'icon' => 'fa-table',
    'link' => '#',
  ],
  'forms' => [
    'name' => 'Form',
    'icon' => 'fa-edit',
    'link' => '#',
  ],
  'charts' => [
    'name' => 'Charts',
    'icon' => 'fa-sitemap',
    'link' => '#',
  ],
  'login' => [
    'name' => 'Login',
    'icon' => 'fa-desktop',
    'link' => '/src/pages/login',
  ]
];
?>
<aside class="left-menu bg-dark">
	<ul class="nav flex-column">
    <?php
    foreach ($menu as $key => $load) :
    ?>
    <li class="nav-item <?= $key == 'forms' ? 'active' : '' ?>">
      <a href="<?= $load['link'] ?>">
        <i class="fas <?= $load['icon'] ?>"></i>
        <?= $load['name'] ?>
      </a>
      <?php 
      if (! empty($load['childrens'])) :
      ?>
        <ul class="nav flex-column">
        <?php
          foreach ($load['childrens'] as $key => $children) :
          ?>
          <li class="nav-item">
            <a href="<?= $children['link'] ?>">
              <i class="fas <?= $children['icon'] ?>"></i>
              <?= $children['name'] ?>
            </a>
            <?php 
            if (! empty($children['childrens'])) :
            ?>
              <ul class="nav flex-column">
              <?php
                foreach ($children['childrens'] as $key => $child) :
                ?>
                <li class="nav-item">
                  <a href="<?= $child['link'] ?>">
                    <i class="fas <?= $child['icon'] ?>"></i>
                    <?= $child['name'] ?>
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
      <?php
      endif; 
      ?>
    </li>
    <?php
    endforeach;
    ?>
  </ul>
</aside>