<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
global $is_admin;
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$thumb_width = 300;
$thumb_height = 50;
?>

<!-- <?php echo $bo_subject; ?> -->
<div id="logo">
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail( $bo_table, $list[$i]['wr_id'],$thumb_width, $thumb_height);

    if($thumb['ori']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    ?>
    <!-- <?php //echo $list[$i]['href']; ?> -->
      <a href="//dmsudqor.cafe24.com/my_gb/" >
        <img src="<?php echo $img; ?>">
      </a>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <div class="empty_li">게시물이 없습니다.</div>
    <?php }  ?>
</div>
<!-- <?php echo $bo_subject; ?> -->
