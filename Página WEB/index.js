let options = {
    startAngle: -1.55,
    size: 150,
    value: 0.85,
    fill: {gradient: ['#fff']}
  }
  $(".circle .bar").circleProgress(options).on('circle-animation-progress',
  function(event, progress, stepValue){
    $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
  });
  $(".js .bar").circleProgress({
    value: 0.40
  });
  $(".php .bar").circleProgress({
    value: 0.50
  });
  $(".sql .bar").circleProgress({
    value: 0.40
  });
  $(".wordpress .bar").circleProgress({
    value: 0.85
  });
  $(".wix .bar").circleProgress({
    value: 0.90
  });