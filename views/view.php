<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$members = $atts['members'];
?>

<section class="about-us-section full-width-section">
    <div class="container">
        <ul class="team-member-list row">
            <?php foreach ($members as $key => $member) {?>
                <li class="team-member col-12 mb-4">
                    <div class="row">
                        <div class="col-md-6 team-member__content-block mb-3">
                            <?php echo $member['info_text'] ?>
                        </div>

                        <div class="col-md-6 mb-5 <?php if($key % 2 !== 0) echo 'order-md-first' ?>">
                            <div class="team-member__info-block">
                                <div class="team-member__img-wrap">
                                    <?php if($member['member_photo']['url'] !== '') { ?>
                                        <svg class="image-crop" viewBox="0 0 350 333.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
                                            <clipPath id="hexagonal-mask">
                                                <path d="M312.2,164.1c12.9,0,25.5,1.1,37.8,3.3C346,74.3,269.2,0,175.1,0C78.4,0,0,78.4,0,175.1c0,69.7,40.7,129.8,99.6,158 C121.9,236.3,208.6,164.1,312.2,164.1z"/>
                                            </clipPath>

                                            <image clip-path="url(#hexagonal-mask)" width="350" height="350" xlink:href="<?php echo $member['member_photo']['url'] ?>" />
                                        </svg>
                                    <?php } ?>

                                    <div class="team-member__image-overlay" <?php if($page_background !== null) echo 'style="background-image: url('.$page_background.')"'; ?>></div>
                                </div>

                                <div class="team-member__meta">
                                    <blockquote class="team-member__blockquote">
                                        <?php echo $member['member_blockquote'] ?>
                                    </blockquote>

                                    <span class="team-member__name">
                                        <strong><?php echo $member['member_name'] ?></strong>
                                    </span>,
                                    <span class="team-member__position"><?php echo $member['member_position'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>