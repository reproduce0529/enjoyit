const lang = "kor";
const folder_num = 1;

window.onload = function () {
  checkAll();
};

function ShowSubMenu(x) {
  let Menu = document.querySelectorAll(".Menu");

  for (let i = 0; i < Menu.length; i++) {
    if (i == x) {
      Menu[i].classList.add("active");
    } else {
      Menu[i].classList.remove("active");
    }
  }

  checkAll();
}

function ShowLangMenu(x) {
  let LangMenu = document.querySelectorAll(".LangMenu");
  for (let i = 0; i < LangMenu.length; i++) {
    if (i == x) {
      LangMenu[i].classList.add("active");
    } else {
      LangMenu[i].classList.remove("active");
    }
  }

  checkAll();
}

function checkAll() {
  let Menu = document.querySelectorAll(".Menu");
  let LangMenu = document.querySelectorAll(".LangMenu");

  let menuIndex;
  let LangMenuIndex;
  for (let i = 0; i < Menu.length; i++) {
    for (let j = 0; j < Menu[i].classList.length; j++) {
      if (Menu[i].classList[j] == "active") {
        menuIndex = i;
      }
    }
  }

  for (let i = 0; i < LangMenu.length; i++) {
    for (let j = 0; j < LangMenu[i].classList.length; j++) {
      if (LangMenu[i].classList[j] == "active") {
        LangMenuIndex = i;
      }
    }
  }

  ShowList(menuIndex, LangMenuIndex);
}


function ShowList(menu1, lang) {
  let path = "";
  let Langage;
  let ListBox = document.querySelector(".ListBox");
  ListBox.innerHTML = "";
  if (lang == 0) {
    path += "kor/";
    path += "tp_";
    path += menu1 + 1;
    Langage = "kor";
    menu1 = menu1 + 1;
  } else {
    path += "eng/";
    path += "tp_";
    path += menu1 + 1;
    Langage = "eng";
    menu1 = menu1 + 5
  }

  fetch("./menu.json")
    .then((res) => res.json())
    .then((data) => {
      
        for(let i = 0; i < data.data.length; i ++){

            if(data.data[i].lang == Langage){
              if(data.data[i].menu_idx == menu1){
                
                let div = document.createElement("div");
                div.classList.add("GameList");
                let a = document.createElement("a");

                a.setAttribute("href", "./play.php?lang=" + data.data[i].lang + "&&path=tp_" + menu1 + "/" + data.data[i].test_path);
                let p = document.createElement("p");
                p.innerHTML = data.data[i].test_name;
                a.appendChild(p)
                div.appendChild(a)
    
    
                ListBox.appendChild(div)
              }

             
            }
           
        }


    });
}
