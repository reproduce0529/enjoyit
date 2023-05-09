let ccArray = [];
let ArraySize = ccArray.length;
let right = 0;
let Notright = 0;
let Time = 0;
let key = 0;
let timecnt = document.querySelector(".timecnt");
let timeInter;

window.onload = function () {
  timeInter = setInterval(() => {
    timeSet();
  }, 100);
};

function timeSet() {
  Time = Time + 0.1;
  timecnt.innerHTML = "TIME : " + Time.toFixed(1) + "s";
}

function MoveFile(array) {
  ShowSentence(array);
}

function enterkey(ee) {
  if (window.event.keyCode == 13) {
    IsThisMatch(ee, ccArray[key]);
  }
}

function ShowSentence(arr) {
  ccArray = arr;
  ArraySize = arr.length;

  let beforeSen = document.querySelector("#beforeSen");
  let nowSen = document.querySelector("#nowSen");
  let afterSen = document.querySelector("#afterSen");

  if (key != 0) {
    beforeSen.innerHTML = arr[key - 1];
    nowSen.innerHTML = arr[key];

    if (arr[key + 1] == undefined) {
      afterSen.innerHTML = "";
    } else {
      afterSen.innerHTML = arr[key + 1];
    }
  } else {
    nowSen.innerHTML = arr[key];

    if (arr[key + 1] == undefined) {
      afterSen.innerHTML = "";
    } else {
      afterSen.innerHTML = arr[key + 1];
    }
  }

  let countP = document.querySelector(".countP");
  countP.innerHTML = "COUNT : " + key + 1 + "/" + ArraySize;
}

function IsThisMatch(a, b) {
  console.log(a.value, b);
  let RightCnt = document.querySelector(".RightCnt");

  if (key == ArraySize - 1) {
    GameEnd();
  } else {
    key++;
  }

  if (a.value == b) {
    right++;
    RightCnt.innerHTML = "Answer : " + right;
  } else {
    Notright++;
  }

  a.value = "";

  ShowSentence(ccArray);
}

function GameEnd() {
  
  document.getElementById("SecText").readOnly = true;
  let countP = document.querySelector(".countP").innerHTML;
  let imte = document.querySelector(".timecnt").innerHTML;
  let RightCnt = document.querySelector(".RightCnt");

  document.getElementById("imet").value = imte;
  document.getElementById("percent").value = (parseInt(RightCnt.innerHTML) / ArraySize) * 100;


  console.log(imte, (parseInt(RightCnt.innerHTML) / ArraySize) * 100)

  alert("타자연습이 종료되었습니다.");
  clearInterval(timeInter);
}
