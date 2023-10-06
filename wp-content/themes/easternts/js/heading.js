var words = ['Bringing Your Imagination To Life'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 0,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});


// parallax

const main = $('.Hero-back');
const text = $('.Hero-back .word');

function scroller() {
  let scrollTop =  window.scrollY;
  let diff = (text.outerHeight() - (scrollTop * 0.20)) / text.outerHeight();
  
  main.css({
    'background-position-y': `${scrollTop * 0.15}%`,
    //  'transform': `scale(${1 + scrollTop/1000})`,
  });
  text.css('opacity', diff);
}
window.addEventListener('scroll', scroller);
