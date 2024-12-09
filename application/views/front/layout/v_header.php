<?php
function time_elapsed_string($datetime, $full = false)
{
  $now = time();
  $date = strtotime($datetime);
  $diff = $now - $date;
  $unit = array(
    'year' => 60 * 60 * 24 * 365,
    'month' => 60 * 60 * 24 * 30,
    'day' => 60 * 60 * 24,
    'hour' => 60 * 60,
    'minute' => 60,
    'second' => 1,
  );

  foreach ($unit as $key => $value) {
    $unit_time = floor($diff / $value);
    if ($unit_time >= 1) {
      $time = $unit_time . ' ' . $key . ($unit_time > 1 ? 's' : '') . ' ago';
      return $time;
    }
  }
}



?>
<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dandapala Digital</title>
  <meta name="description" content="Dandapala Digital- Majalah Dandapala">
  <meta name="keywords" content="dandapala">
  <meta name="theme-color" content="#2757fd">

  <!-- preload head styles -->
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/css/unicons.min.css" as="style" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/css/swiper-bundle.min.css" as="style" />

  <!-- preload footer scripts -->
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/libs/jquery.min.js" as="script" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/libs/scrollmagic.min.js" as="script" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/libs/swiper-bundle.min.js" as="script" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/libs/anime.min.js" as="script" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/helpers/data-attr-helper.js" as="script" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/helpers/swiper-helper.js" as="script" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/helpers/anime-helper.js" as="script" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/helpers/anime-helper-defined-timelines.js"
    as="script" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/uikit-components-bs.js" as="script" />
  <link rel="preload" href="<?= base_url("assets/front/template") ?>/js/app.js" as="script" />

  <!-- app head for bootstrap core -->
  <script src="<?= base_url("assets/front/template") ?>/js/app-head-bs.js"></script>

  <!-- include uni-core components -->
  <link rel="stylesheet" href="<?= base_url("assets/front/template") ?>/js/uni-core/css/uni-core.min.css" />

  <!-- include styles -->
  <link rel="stylesheet" href="<?= base_url("assets/front/template") ?>/css/unicons.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/template") ?>/css/prettify.min.css" />
  <link rel="stylesheet" href="<?= base_url("assets/front/template") ?>/css/swiper-bundle.min.css" />

  <!-- include main style -->
  <link rel="stylesheet" href="<?= base_url("assets/front/template") ?>/css/theme/demo-seven.min.css" />

  <!-- include scripts -->
  <script src="<?= base_url("assets/front/template") ?>/js/uni-core/js/uni-core-bundle.min.js"></script>
</head>
