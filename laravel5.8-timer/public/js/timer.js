
  

  
  
  
  
  
  //長押し押下時
//   $('.btnspinner').on('touchstart mousedown click', function(e){
//       if(arySpinnerCtrl['interval']) return false;
//       var target = $(this).data('target');
//       arySpinnerCtrl['target'] = target;
//       arySpinnerCtrl['timestamp'] = e.timeStamp;
//       arySpinnerCtrl['cal'] = Number($(this).data('cal'));
//       //クリックは単一の処理に留める
//       if(e.type == 'click'){
//           spinnerCal();
//           arySpinnerCtrl = [];
//           return false;
//       }
//       //長押し時の処理
//       setTimeout(function(){
//           //インターバル未実行中 + 長押しのイベントタイプスタンプ一致時に計算処理
//           if(!arySpinnerCtrl['interval'] && arySpinnerCtrl['timestamp'] == e.timeStamp){
//               arySpinnerCtrl['interval'] = setInterval(spinnerCal, spin_speed);
//           }
//       }, 500);
//   });
  
//   //長押し解除時 画面スクロールも解除に含む
//   $(document).on('touchend mouseup scroll', function(e){
//       if(arySpinnerCtrl['interval']){
//           clearInterval(arySpinnerCtrl['interval']);
//           arySpinnerCtrl = [];
//       }
//   });
  
//   //変動計算関数
//   function spinnerCal(){
//       var target = $(arySpinnerCtrl['target']);
//       var num = Number(target.val());
//       num = num + arySpinnerCtrl['cal'];
//       if(num > Number(target.data('max'))){
//           target.val(Number(target.data('max')));
//       }else if(Number(target.data('min')) > num){
//           target.val(Number(target.data('min')));
//       }else{
//           target.val(num);
//       }
//   }
  
// });



// //  Clock page JavaScript 

// var defaults = {}
//   , one_second = 1000
//   , one_minute = one_second * 60
//   , one_hour = one_minute * 60
//   , one_day = one_hour * 24
//   , startDate = new Date()
//   , face = document.getElementById('lazy');

// // http://paulirish.com/2011/requestanimationframe-for-smart-animating/
// var requestAnimationFrame = (function() {
//   return window.requestAnimationFrame       || 
//          window.webkitRequestAnimationFrame || 
//          window.mozRequestAnimationFrame    || 
//          window.oRequestAnimationFrame      || 
//          window.msRequestAnimationFrame     || 
//          function( callback ){
//            window.setTimeout(callback, 1000 / 60);
//          };
// }());

// tick();

// function tick() {

//   var now = new Date()
//     , elapsed = now - startDate
//     , parts = [];

//   parts[0] = '' + Math.floor( elapsed / one_hour );
//   parts[1] = '' + Math.floor( (elapsed % one_hour) / one_minute );
//   parts[2] = '' + Math.floor( ( (elapsed % one_hour) % one_minute ) / one_second );

//   parts[0] = (parts[0].length == 1) ? '0' + parts[0] : parts[0];
//   parts[1] = (parts[1].length == 1) ? '0' + parts[1] : parts[1];
//   parts[2] = (parts[2].length == 1) ? '0' + parts[2] : parts[2];

//   face.innerText = parts.join(':');
  
//   requestAnimationFrame(tick);
  
// }