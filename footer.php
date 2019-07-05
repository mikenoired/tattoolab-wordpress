<footer>
  <?php dynamic_sidebar('footerDescription');
  if (has_nav_menu('social')) :
    wp_nav_menu(array(
      'theme_location'  => 'social',
      'container_class' => 'social',
      'link_before'     => '<span>',
      'link_after'      => '</span>' . tattoolab_get_svg(array('icon' => 'chain')),
    ));
  endif;
  echo "<p class='years'>2017 – " . date("Y") . "</p>";
  ?>
  <a class="credits" href="//github.com/unkstd/">
    Made by <svg xmlns="//www.w3.org/2000/svg" viewBox="0 0 2045.23 1606">
      <defs>
        <style>
          .cls-1 {
            fill: #fff;
          }
        </style>
      </defs>
      <path class="cls-1" d="M0,0H410.08V171.58H214.48V1434.42h195.6V1606H0Z" />
      <path class="cls-1" d="M1467,356.89v916.24H1262.82V1156.46q-51.46,61.77-128.68,95.23T967.7,1285.14q-183.62,0-289.11-102.09T573.07,880.21V356.89H787.54V851q0,123.54,55.77,184.45T1002,1096.4q114.93,0,182.73-71.2t67.78-205V356.89Z" />
      <path class="cls-1" d="M1636.87,1606V1434.42h193.89V171.58H1636.87V0h408.36V1606Z" />
    </svg>
  </a>
</footer>
<?php wp_footer() ?>
</body>

</html>