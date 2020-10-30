<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
<div class="wrapper">
  <div class="lt_gal">
      <!-- <strong class="lt_title"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=<?php echo $bo_table; ?>&me_code=<?php echo $me_code?>"><?php echo $bo_subject; ?></a></strong> -->
      	<?php for ($i = 0; $i < count($list); $i++) {
      $link1_id = $list[$i]['wr_link1'];
      ?>
  	<div class="col-md-8" style="margin:10px 0 10px 0 ">
  		<div class="youtube" style="position:relative">
  			<iframe style=" background:#000; color:#fff"
          src="https://www.youtube.com/embed/<?php echo $link1_id; ?>?rel=0&amp;controls=0&amp;showinfo=0&autoplay=0"
          frameborder="0" border=0 scrolling=no allowfullscreen>
  			</iframe>
  			<div style="position:absolute; top:84%; left:0px; width:100%; height:20px; padding:0; margin:0; background:url(<?php echo $latest_skin_url ?>/back.png); font-color:#fff; color:#fff" >
  			</div>
  		</div>
  	</div>
  	<?php }  ?>
  	<?php if (count($list) == 0) { //동영상이 없을 때  ?>
  	<li>동영상이 없습니다.</li>
  	<?php }  ?>

      <!-- <div class="lt_more"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>&me_code=<?php echo $me_code?>"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a></div> -->
  </div>
</div>
<style>
.wrapper{margin:0 auto;max-width:1280px;position:relative}
.col-md-12,.col-md-8{
	position:relative;
	min-height:1px;
	padding-right:0px;
	padding-left:0px
}
.youtube { position: relative; width: 100%; padding-bottom: 56%; }
.youtube iframe { position: absolute; width: 100%; height: 100%; }
@media (min-width:992px) {
.col-md-4 {
		float:left
	}
	.col-md-12 {
		width:100%
	}
	.col-md-4 {
		width:33.33333333%
	}
	}
</style>
