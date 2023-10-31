<?php get_header(); ?>

  <section class="about" id="about" style = 'background-image:
    url(<?= CFS()->get('background_white')?>),
    url(<?= CFS()->get('background_black')?>);'>
    <div class="container">
      <ul class="about__list">
        <?php 
        $loop = CFS()->get('card');
        foreach ($loop as $row) {
          ?>
          <li class="about__item">
            <div class="about__year"><?= $row['card_title']?></div>
            <div class="about__text"><?= $row['card_text']?></div>
          </li>
          <?php
        }
        ?>
      </ul>
    </div>
  </section>

  <section class="team" id="team">
    <div class="container">
      <div class="team__header">
        <h2 class="team__title title">
          <?= CFS()->get('team_title')?>
        </h2>
        <p class="team__subtitle subtitle">
          <?= CFS()->get('team_description')?>
        </p>
      </div>
      <ul class="team__list">
      <?php 
        $loop = CFS()->get('team_card');
        foreach ($loop as $row) {
          ?>

          <li class="team__item">
            <img src="<?= $row['team_img']?>" alt="employee photo" class="team__photo">
            <h3 class="team__name">
              <?= $row['team_name']?>
            </h3>
            <p class="team__possition">
              <?= $row['team__possition']?>
            </p>
            <div class="team__icon-list">
              <?php 
                if(!empty($row['team_twitter']['url'])) {
                  ?>
                  <a class="team__icon-link"
                  href="<?= $row['team_twitter']['url']?>"
                  target="<?= $row['team_twitter']['target']?>">
                    <i class="team__icon icon-twitter"></i>
                  </a>
                  <?php
                }
                if(!empty($row['team_instagram']['url'])) {
                  ?>
                  <a class="team__icon-link" 
                  href="<?= $row['team_instagram']['url']?>" 
                  target="<?= $row['team_instagram']['target']?>">
                    <i class="team__icon icon-instagram"></i>
                  </a>
                  <?php
                }
                if(!empty($row['team_vk']['url'])) {
                  ?>
                  <a class="team__icon-link" 
                  href="<?= $row['team_vk']['url']?>"
                  target="<?= $row['team_vk']['target']?>">
                    <i class="team__icon icon-vkontakte"></i>
                  </a>
                  <?php
                }
                if(!empty($row['team_facebook']['url'])) {
                  ?>
                  <a class="team__icon-link" 
                  href="<?= $row['team_facebook']['url']?>" 
                  target="<?= $row['team_facebook']['target']?>">
                    <i class="team__icon icon-facebook"></i>
                  </a>
                  <?php
                }
              ?>  
            </div>
          </li>
          <?php
        }
        ?>
      </ul>
    </div>
  </section>

  <section class="provide" id="provide">
    <div class="container">
      <div class="provide__header">
        <h2 class="provide__title title">
          <?= CFS()->get('provide_title')?>
        </h2>
        <p class="provide__subtitle subtitle">
          <?= CFS()->get('provide_subtitle')?>
        </p>
      </div>

      <ul class="provide__list">
        <?php 
          $loop = CFS()->get('provide_card');
          foreach ($loop as $row) {
        ?>
        <li class="Provide__item">
          <div class="ptovide__item-icon">
            <img class="ptovide__item-img" src="<?= $row['provide_card-icon']?>">
          </div>
          <h2 class="provide__item-title">
            <?= $row['provide_card_title']?>
          </h2>
          <p class="provide__item-text">
            <?= $row['provide_card_description']?>
          </p>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <div class="contact__header">
        <h2 class="contact__title title">
        <?= CFS()->get('contact_title')?>
        </h2>
        <p class="contact__subtitle subtitle">
        <?= CFS()->get('contact_subtitle')?>
        </p>
      </div>
      <ul class="contact__list">
        <li class="contact__item">
          <a 
          class="contact__link" 
          href="tel:<?= CFS()->get('contact_phone')['url']?>">
            <?= CFS()->get('contact_phone')['text']?>
          </a>
          <i class="icon-phone"></i>
        </li>
        <li class="contact__item">
          <a 
          class="contact__link" 
          href="<?= CFS()->get('contact_address')['url']?>" 
          target="<?= CFS()->get('contact_address')['target']?>">
            <?= CFS()->get('contact_address')['text']?>
          </a>
          <i class="icon-location"></i>
        </li>
        <li class="contact__item">
          <a 
          class="contact__link" 
          href="mailto:<?= CFS()->get('contact_email')['url']?>">
          <?= CFS()->get('contact_email')['text']?>
          </a>
          <i class="icon-mail-alt"></i>
        </li>
      </ul>
      <!-- <form class="contact__form">
        <input class="contact__input contact__text" type="text" placeholder="Full Name">
        <input class="contact__input contact__email" type="email" placeholder="Email">
        <input class="contact__input contact__tel" type="tel" placeholder="Number">
        <textarea class="contact__input contact__textatea" placeholder="Write your Message here..."></textarea>
        <button class="contact__button">Sabmit</button>
      </form> -->
      <?php the_content(); ?>
    </div>
  </section>
  <?php get_footer(); ?>