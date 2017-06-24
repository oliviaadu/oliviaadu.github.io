//window.onload = function(){

  //var submitB = document.getElementById('submit');

  //submitB.onclick = function(){
function calculateScore() {
    var checkedValue = 0;
    var counter = document.getElementById('score');
    var inputElements = document.getElementsByClassName('checkbox_input');
    for(var i=0; inputElements[i]; ++i){
      if(inputElements[i].checked){
        checkedValue += Number(inputElements[i].value);
      }
    }
    counter.innerHTML = checkedValue;
    if (checkedValue>=1){
      document.getElementById("star1").src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Gold_Star.svg/2000px-Gold_Star.svg.png";
    }
    else{
      document.getElementById("star1").src="http://weknownyourdreamz.com/images/star/star-08.svg";
    }
    if (checkedValue>=2){
      document.getElementById("star2").src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Gold_Star.svg/2000px-Gold_Star.svg.png";
    }
    else{
      document.getElementById("star2").src="http://weknownyourdreamz.com/images/star/star-08.svg";
    }
    if (checkedValue>=3){
      document.getElementById("star3").src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Gold_Star.svg/2000px-Gold_Star.svg.png";
    }
    else{
      document.getElementById("star3").src="http://weknownyourdreamz.com/images/star/star-08.svg";
    }
    if (checkedValue>=4){
      document.getElementById("star4").src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Gold_Star.svg/2000px-Gold_Star.svg.png";
    }
    else{
      document.getElementById("star4").src="http://weknownyourdreamz.com/images/star/star-08.svg";
    }
    if (checkedValue>=5){
      document.getElementById("star5").src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Gold_Star.svg/2000px-Gold_Star.svg.png";
    }
    else{
      document.getElementById("star5").src="http://weknownyourdreamz.com/images/star/star-08.svg";
    }

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    //init();
  }
//}

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Work',     11],
    ['Eat',      2],
    ['Commute',  5],
    ['Watch TV', 2],
    ['Sleep',    7]
  ]);
  var options = {
    title: 'My Daily Activities'
  };
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
