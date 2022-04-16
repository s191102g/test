

var more = document.querySelector(".more");
var start = 2;
var quantity = 2;
more.onclick = ()=>{
    let http = new XMLHttpRequest();
    http.open("post","backend/loadMore.php",true);
    http.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
    )
    http.send("start="+start+"&quantity="+quantity)
    http.onload = ()=>{
        let datares = http.response;
        let data = JSON.parse(datares);
        let html = data.map((e)=>{
            return `
            <section>
      <div class="box-img" onclick="see(${e.id})">
                  <img src="publlic/images/${e.hinh}" alt="">
      </div>

      <div class="box-text">
            <span>${e.tieu_de}</span>
      </div>

      <div class="box-like">
      <input type="hidden" name="" value="${e.id}">
            <div class="like"></div>
      </div>
      </section>
            `;
        })
       
        let ctn = document.querySelector("main");
        ctn.innerHTML += html.join("");
        like()
    }
    start+=2;
}

let menu = document.querySelector("header");
menu.onclick = () =>{
  
  title.innerText= "document"
}
var title = document.querySelector("title");
var see = (id)=>{
    title.innerText = "ok";
     let page="";
      let url = "okokokok"
    history.pushState({},page,url)
     let http = new XMLHttpRequest();
     http.open("post","backend/news.php",true);
     http.setRequestHeader(
         "Content-type",
         "application/x-www-form-urlencoded"
     )
     http.send("id="+id)
     http.onload = ()=>{
         let datares = http.response;
         let data = JSON.parse(datares);
        console.log(data);
        
     }
 }

 var like = () =>{
    var likeBtn = document.querySelectorAll(".box-like");
    console.log(likeBtn);
    likeBtn.forEach(e => {
        e.onclick = ()=>{
           let id = e.children[0].value
          
           let http = new XMLHttpRequest();
           http.open("post","backend/like.php",true);
           http.setRequestHeader(
               "Content-type",
               "application/x-www-form-urlencoded"
           )
           http.send("id="+id)
           http.onload = ()=>{
               let datares = http.response;
              
              console.log(datares);
              
           }
       }
    })
 }
 like()
