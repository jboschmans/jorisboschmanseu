$(document).ready(function(){
  $('.smooth').on('click', function(){
    $.smooth-scroll({
      scrollElement: $('body'),
      scrollTarget: '#' + this.id
    });
  });
});
