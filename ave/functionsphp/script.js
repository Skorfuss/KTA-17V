document.write("First JavaScript code!");

window.onload = function()
{
  (function()//2-я функция введена для примера "ананимной функции".
  {
    var date = new Date();
    var time = date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
    document.getElementsByTagName('div')[0].innerHTML="JS CLOCK: "+time;
    window.setTimeout(arguments.callee, 1000);
  })();

}
