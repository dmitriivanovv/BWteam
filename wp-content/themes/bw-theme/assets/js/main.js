// $(document).ready(function () {

//   // SMOOTH MENU SCROLL
//   $('nav a[href^="#"]').click(function () {
//     let target = $(this).attr('href');
//     $('html, body').animate({
//       scrollTop: $(target).offset().top
//     }, 500);
//     $('nav a[href^="#"]').parent().removeClass('active');
//     $(this).parent().addClass('active');
//     $('.menu__mobile .menu').toggle(500);
//     $(".menu__burger").toggleClass('close');
//     return false;
//   });

//   // MOBILE MENU SHOW/HIDE
//   $('.menu__burger').click(function () {
//     $('.menu__mobile .menu').toggle(500);
//     $(this).toggleClass('close');
//   })
// });

$(document).ready(function () {
  /*Плавная прокрутка страницы */
  $('header a[href^="#"]').click(function() {
      let target = $(this).attr("href");
      $('html, body').animate ({
        scrollTop: $(target).offset().top
      }, 500);
      /*Если у родительского элемента класс menu__item */
      if ($(this).parent().hasClass('menu__item')) {
        /*тогда этому родителю добавляется класс active и срабатывает toggle для бургер-меню */
        $('nav a[href^="#"]').parent().removeClass('active');
        $(this).parent().addClass('active');
        $('.menu__mobile .menu').toggle(500);
        $('.menu__burger').toggleClass('close');
      }
      return false;
  });
  /*Мобильное меню */
  $('.menu__burger').click(function() {
      $('.menu__mobile .menu').toggle(500);
      $(this).toggleClass('close');
  });
    
});