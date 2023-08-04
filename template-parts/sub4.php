<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="owlcarousel\assets\owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel\assets\owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="owlcarousel\owl.carousel.min.js"></script>
    <script src="script.js" defer></script>
    <script
      src="https://kit.fontawesome.com/9e8a8858d4.js"
      crossorigin="anonymous"
    ></script>

    <title>Document</title>
  </head>
  <body>
    <div class="main">
      <div class="header_wrapper" data-aos="slide-down">
        <div class="header">
          <div class="header_img">
            <a href="index.html"><img src="images\圖片1 (1).jpg" alt=""></a>
            <span class="header_name" >嘉祿冷凍空調</span>
          </div>
          <a href="#" class="toggle_btn">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </a>

          <div class="navbar_list">
            <ul>
              <li><a href="tree.html">關於嘉祿</a></li>
              
              <li>
                <label class="check" for="sp_check">產品與服務</label>
                <input name="sp_check" id="sp_check" type="checkbox" class="has_child" hidden></input>
                <label for="sp_check"><i class="fa-solid fa-angle-down"></i></label>
                <ul class="subnav ps-0">
                  <li><a href="sub1.html">商用空調系列</a></li>
                  <li><a href="sub2.html">冷凍冷藏系列</a></li>
                  <li><a href="sub3.html">節能空調系列</a></li>
                  <li><a href="sub4.html">產業空調系列</a></li>
                  <li><a href="sub5.html">冰水主機系列</a></li>
                </ul>
              </li>
              <li><a href="timeline.html">銷售實績</a></li>
              <li><a href="posts.html">最新消息</a></li>
              <li><a href="#fter">聯絡我們</a></li>
            </ul>
          </div>
          
          <a class="youtube_icon" href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
<path fill-rule="evenodd" d="M 13 5 L 16 14 L 16 20 L 18 20 L 18 14 L 21 5 L 19 5 L 17 11 L 15 5 Z M 24 9 C 22.933594 9 22.410156 9.167969 21.757813 9.703125 C 21.132813 10.230469 20.960938 10.636719 21 12 L 21 17 C 21 17.996094 21.164063 18.652344 21.765625 19.234375 C 22.390625 19.816406 22.980469 20 24 20 C 25.066406 20 25.648438 19.816406 26.25 19.234375 C 26.875 18.675781 27 17.996094 27 17 L 27 12 C 27 11.117188 26.84375 10.28125 26.238281 9.722656 C 25.613281 9.148438 24.96875 9 24 9 Z M 29 9 L 29 18 C 29 18.972656 29.980469 20 31 20 C 32.019531 20 32.558594 19.488281 33 19 L 33 20 L 35 20 L 35 9 L 33 9 L 33 17 C 32.988281 17.683594 32.183594 18 32 18 C 31.792969 18 31 17.957031 31 17 L 31 9 Z M 24 11 C 24.300781 11 25 10.996094 25 12 L 25 17 C 25 17.96875 24.324219 18 24 18 C 23.699219 18 23 17.988281 23 17 L 23 12 C 23 11.183594 23.433594 11 24 11 Z M 10 22 C 6.40625 22 4 24.382813 4 28 L 4 37.5 C 4 41.117188 6.40625 44 10 44 L 40 44 C 43.59375 44 46 41.617188 46 38 L 46 28 C 46 24.382813 43.59375 22 40 22 Z M 12 26 L 18 26 L 18 28 L 16 28 L 16 40 L 14 40 L 14 28 L 12 28 Z M 26 26 L 28 26 L 28 30 C 28.230469 29.640625 28.574219 29.355469 28.902344 29.195313 C 29.222656 29.03125 29.546875 28.9375 29.875 28.9375 C 30.523438 28.9375 31.03125 29.171875 31.378906 29.609375 C 31.726563 30.050781 32 30.636719 32 31.5 L 32 37.5 C 32 38.242188 31.75 38.703125 31.421875 39.097656 C 31.101563 39.492188 30.621094 39.992188 30 40 C 28.949219 40.011719 28.386719 39.449219 28 39 L 28 40 L 26 40 Z M 18 29 L 20 29 L 20 37 C 20 37.230469 20.269531 38.007813 21 38 C 21.8125 37.992188 21.820313 37.234375 22 37 L 22 29 L 24 29 L 24 40 L 22 40 L 22 39 C 21.628906 39.4375 21.4375 39.574219 21.019531 39.78125 C 20.605469 40.015625 20.183594 40 19.792969 40 C 19.308594 40 18.757813 39.5625 18.5 39.234375 C 18.269531 38.933594 18 38.625 18 38 Z M 36.199219 29 C 37.148438 29 37.816406 29.203125 38.320313 29.734375 C 38.835938 30.265625 39 30.886719 39 31.886719 L 39 35 L 35 35 L 35 36.546875 C 35 37.105469 35.074219 37.460938 35.21875 37.671875 C 35.355469 37.902344 35.632813 38.003906 36 38 C 36.40625 37.996094 36.664063 37.914063 36.800781 37.730469 C 36.941406 37.566406 37 37.101563 37 36.5 L 37 36 L 39 36 L 39 36.59375 C 39 37.683594 38.914063 38.496094 38.375 39.027344 C 37.867188 39.585938 37.074219 39.84375 36.035156 39.84375 C 35.085938 39.84375 34.34375 39.5625 33.8125 38.984375 C 33.28125 38.40625 33.003906 37.613281 33.003906 36.59375 L 33.003906 31.886719 C 33.003906 30.980469 33.320313 30.308594 33.902344 29.710938 C 34.371094 29.230469 35.25 29 36.199219 29 Z M 29 30.5 C 28.449219 30.5 28.007813 30.996094 28 31.5 L 28 37.5 C 28.007813 37.789063 28.449219 38 29 38 C 29.550781 38 30 37.574219 30 37.023438 L 30 32 C 30 31 29.550781 30.5 29 30.5 Z M 36 31 C 35.449219 31 35.007813 31.464844 35 32 L 35 33 L 37 33 L 37 32 C 37 31.386719 36.550781 31 36 31 Z"></path>
</svg></a>
        </div>
      </div>
      
    
      <div class="sub-wrapper">
        <div class="sub">
            <div class="sub-title">
                商用空調系列
            </div>           
            
            <div class="container">
                <div class="row justify-content-start align-items-end">
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\1熱交換器銅鍍錫.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\1熱交換器銅鍍錫.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div>
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\2熱交換器藍波耐蝕.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\2熱交換器藍波耐蝕.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div>  
                    
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\3熱交換器白鋁.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\3熱交換器白鋁.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\5冷凝器鄰海用-1024x768.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\5冷凝器鄰海用-1024x768.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\6冷凝器耐蝕-1.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\6冷凝器耐蝕-1.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\9多翼式空調箱蘭花園.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\9多翼式空調箱蘭花園.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\11移動式除濕機不鏽鋼板.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\11移動式除濕機不鏽鋼板.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\12移動式除濕機烤漆板.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\12移動式除濕機烤漆板.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\13吊掛臥式型除濕機.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\13吊掛臥式型除濕機.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\14落地立式型除濕機-拷貝-686x1024.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\14落地立式型除濕機-拷貝-686x1024.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\15落地立式型除濕機.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\15落地立式型除濕機.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 
                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="images\sub4\13吊掛臥式型除濕機.jpg" alt="" class="Image"> 
                            <div  class="modal">
                                <span class="close">&times;</span>
                                <img src="images\sub4\13吊掛臥式型除濕機.jpg" alt="" >
                            </div>                
                                                   
                            <figcaption>吊隱式送風機(水冷)</figcaption>                            
                        </figure>                                      
                    </div> 

                </div>
            </div>
        </div>
        
      </div>
      <div class="footer_wrapper" id="fter">
        <div class="footer">
          <div class="footer_top">
            <div class="container">
              <div class="row">
                <div class="col-xl-4">
                  <div class="left">
                    <div class="title" >嘉祿工業股份有限公司</div>
                    <div class="left_text">
                      KARO'S INDUSTRIAL CO., LTD. <br />25341 新北市石門區德茂里嘉祿街32號, <br />No. 32, Jialu St., Shihmen Dist., New Taipei City 25341, Taiwan, R.O.C.
                      <br />服務專線：+886-2-8635-4190 (~99)
                      <br />傳真：+886-2-2636-2650 <br> karos@ms35.hinet.net
                    </div>
                    <p>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28863.40149523971!2d121.518449!3d25.273102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442b6919874c7c9%3A0x29b5a8a6e8308f85!2z5ZiJ56W_5bel5qWt6IKh5Lu95pyJ6ZmQ5YWs5Y-4!5e0!3m2!1svi!2sus!4v1690814294024!5m2!1svi!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                    <p>
                      中區營業服務站 <br />
                      台中市霧峰區萊園路10-3號
                      <br />
                      服務專線：+886-4-2339-8249 <br />
                      傳真：+886-4-2339-5349
                    </p>
                    <p>
                      南區營業服務站 <br />
                      高雄市鳥松區中正路142-5號
                      <br />
                      服務專線：+886-7-7319-902 <br />
                      傳真：+886-7-7319-907
                    </p>
                  </div>
                </div>

                <div class="col-xl-4">
                  <div class="mid">
                    <p>
                      越南嘉盛工業責任有限公司 <br> KASUN INDUSTRIAL JVC LTD <br> 越南/胡志明市守德郡玲春坊第四區113之13號 <br>
                      No. 113/13, 4th Quarter, Linh Xuan Ward, Thu Duc District, HCM City, Vietnam <br>
                      服務專線：+848-6283-1828 <br />傳真： +848-6283-1859 <br>
                      kasun@kasunair.com
                    </p>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="right">
                    <div class="contact" >聯絡我們</div>
                    <input id="name" class="form-control" placeholder="名稱" />
                    <input
                        id="phone"
                        class="form-control"
                        placeholder="連絡電話"
                      />
                    <input id="email" class="form-control" placeholder="電子郵件" />
                    <textarea
                        class="form-control"
                        rows="5"
                        id="message"
                        placeholder="訊息"
                  ></textarea>
                  <div class="capcha-check">
                    
                    <input type="checkbox" name="capcha" id="capcha">
                    <label for="capcha">I am not a robot</label>
                  </div>
                
                <input type="submit" value="寄送" class="btn btn2 btn-primary" />
                </div>
              </div>
            </div>
          </div>
              </div>
            </div>
          </div>
        <div class="footer_bot1">
          <div class="footer_bot">
            <p>Copyright © 2018 karos All rights reserved.</p>
          </div>
        </div>
        </div>
      </div>
      
        
      </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
      ></script>
    </div>
  </body>
</html>
