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
      <div class="timeline_wrapper">
        <div class="timeline_title">銷售實績</div>
        <div class="timeline">
          
            <div class="timeline_container left_container">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                        <table>
                            <tbody>
                                <tr>
                                    <td>台灣精銳科技(股)公司</td>
                                    <td>桃園醫院</td>
                                </tr>
                                <tr>
                                    <td>台塘尖山埤度假會議中心		</td>
                                    <td>南投酒廠</td>
                                </tr>
                                <tr>
                                    <td>台中榮民總醫院		</td>
                                    <td>屏東地方法院</td>
                                </tr>
                                <tr>
                                    <td>中興大學		</td>
                                    <td>秀朗醫院</td>
                                </tr>
                                <tr>
                                    <td>桃園醫療所				</td>
                                    <td>台鹽</td>
                                </tr>
                                <tr>
                                    <td>勞研所			</td>
                                    <td>育達商職</td>
                                </tr>
                                <tr>
                                    <td>環隆科技			</td>
                                    <td>禾伸堂</td>
                                </tr>
                                <tr>
                                    <td>旺成電子	</td>
                                    <td>金門縣立醫院
</td>
                                </tr>
                            </tbody>
                        </table>
                        <span class="left_container_arrow"></span>
                </div>
                <span class="text_box_date_right">91年度 / 2002</span>
            </div>

            <div class="timeline_container right_container">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>麻豆新樓醫院</td>
                        <td>桃園醫院</td>
                      </tr>
                      <tr>
                        <td>基隆市議會	</td>
                        <td>養豬科學研究所</td>
                      </tr>
                      <tr>
                        <td>寶成國際總部新建工程</td>
                        <td>土庫農會</td>
                      </tr>
                      <tr>
                        <td>南投醫院</td>
                        <td>亞洲光學</td>
                      </tr>
                    </tbody>
                  </table>
                  <span class="right_container_arrow"></span>
                </div>
                <div class="text_box_date_left">92年度 / 2003</div>
            </div>
            <div class="timeline_container left_container ">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                        <table>
                            <tbody>
                                <tr>
                                    <td>三峽市場	</td>
                                    <td>彰化市圖書館
</td>
                                </tr>
                                <tr>
                                    <td>中興大學		</td>
                                    <td>陸軍新店營區
</td>
                                </tr>
                                <tr>
                                    <td>大園國小		</td>
                                    <td>勤益技術學院
</td>
                                </tr>
                                <tr>
                                    <td>中興大學		</td>
                                    <td>秀朗醫院</td>
                                </tr>
                                <tr>
                                    <td>中興大學				</td>
                                    <td>中原大學</td>
                                </tr>
                                <tr>
                                    <td>台電南投辦公大樓				</td>
                                    <td>東勢高工
</td>
                                </tr>
                                <tr>
                                    <td>靜宜大學				</td>
                                    <td>國立台南藝術學院
</td>
                                </tr>
                                <tr>
                                    <td>頭城體育館		</td>
                                    <td>亞歷山大
</td>
                                </tr>
                                <tr>
                                    <td>嘉義市政府	</td>
                                    <td>萬芳醫院
</td>
                                </tr>
                                <tr>
                                    <td>陸航廠	</td>
                                    <td>雪山隧道
</td>
                                </tr>
                                <tr><td>嘉義長青綜合服務中心
</td></tr>
                            </tbody>
                        </table>
                        <span class="left_container_arrow"></span>
                </div>
                <div class="text_box_date_right">93年度 / 2004</div>
            </div>
            <div class="timeline_container right_container">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>訊碟科技</td>
                        <td>台銀斗六分行</td>
                      </tr>
                      <tr>
                        <td>草屯行政中心		</td>
                        <td>台灣凸板</td>
                      </tr>
                      <tr>
                        <td>私立均頭國中均頭館	</td>
                        <td>平鎮活動中心</td>
                      </tr>
                      <tr>
                        <td>大鼎活蝦</td>
                        <td>行政院動植物檢疫中心</td>
                      </tr>
                      <tr>
                        <td>佳山教準部餐廳新建工程</td>
                        <td>宜蘭技術學院</td>
                      </tr>
                      <tr>
                        <td>台中火力發電廠	</td>
                        <td>台電大甲電廠</td>
                      </tr>
                      <tr>
                        <td>中原大學</td>
                        <td>中壢衛生所,戶政事務所空調工程</td>
                      </tr>
                      <tr>
                        <td>台中捐血中心	</td>
                        <td>台中魚市場</td>
                      </tr>
                      <tr>
                        <td>玄奘大學</td>
                        <td>白蘭氏雞精</td>
                      </tr>
                      <tr>
                        <td>富邦證券	</td>
                        <td>鴻益農業有限公司(后里廠)</td>
                      </tr>
                      <tr>
                        <td>豐原醫院	</td>
                      </tr>
                    </tbody>
                  </table>
                  <span class="right_container_arrow"></span>
                </div>
                <div class="text_box_date_left">94年度 / 2005</div>
            </div>
            <div class="timeline_container left_container">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>海洋大學</td>
                        <td>南開學院</td>
                      </tr>
                      <tr>
                        <td>高鐵桃園(青埔)站		</td>
                        <td>	開南圖書館</td>
                      </tr>
                      <tr>
                        <td>高鐵新竹(六家)站	</td>
                        <td>北醫醫院</td>
                      </tr>
                      <tr>
                        <td>大仁技術學院</td>
                        <td>三芝馬偕護校</td>
                      </tr>
                      <tr>
                        <td>金山郵政</td>
                        <td>彰化福工</td>
                      </tr>
                      <tr>
                        <td>中華電信高雄客服中心	</td>
                        <td>中龍鋼鐵</td>
                      </tr>
                      <tr>
                        <td>花蓮客家文物中心</td>
                        <td>台電屏東材料大樓</td>
                      </tr>
                      <tr>
                        <td>台南花卉展覽中心</td>
                        <td>平湖騰達限公司</td>
                      </tr>
                      <tr>
                        <td>國家高速網路</td>
                        <td>	中央首相</td>
                      </tr>
                      <tr>
                        <td>南港活動中心</td>                        
                      </tr>                      
                    </tbody>
                  </table>
                  <span class="left_container_arrow"></span>
                </div>
                <div class="text_box_date_right">95年度 / 2006
</div>
            </div>
            <div class="timeline_container right_container" >
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>松山車站</td>
                        <td>廣用電子廠</td>
                      </tr>
                      <tr>
                        <td>新莊捷運（０９～１２站）</td>
                        <td>越峰電子廠</td>
                      </tr>
                      <tr>
                        <td>交九轉運站</td>
                        <td>大億電子廠</td>
                      </tr>
                      <tr>
                        <td>保警總隊</td>
                        <td>桃園客家文化中心</td>
                      </tr>
                      <tr>
                        <td>龍泉營區	</td>
                        <td>金六結營區</td>
                      </tr>
                      <tr>
                        <td>龍門核四</td>
                        <td>國軍斗六醫院</td>
                      </tr>
                      <tr>
                        <td>僑光技術學院</td>
                        <td>澎湖生活館</td>
                      </tr>
                      <tr>
                        <td>台化宜蘭廠</td>
                        <td>台化桃園廠</td>
                      </tr>
                      <tr>
                        <td>輔英科技大學</td>
                        <td>	三芝馬偕護校</td>
                      </tr>
                      <tr>
                        <td>國防部博愛專案</td>                        
                        <td>	康乃爾小學</td>                        
                      </tr>                      
                    </tbody>
                  </table>
                  <span class="right_container_arrow"></span>
                </div>
                <div class="text_box_date_left">96年度 / 2007</div>
            </div>
            <div class="timeline_container left_container">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>台灣廣用傳動(中科)</td>
                        <td>捷運新莊線CK378C標</td>
                      </tr>
                      <tr>
                        <td>長庚醫院美容手術室	</td>
                        <td>國防部斗煥坪、關西營區</td>
                      </tr>
                      <tr>
                        <td>國防部Y-065南區營區</td>
                        <td>長庚大學</td>
                      </tr>
                      <tr>
                        <td>台中英才郵局</td>
                        <td>勝華科技印度廠</td>
                      </tr>
                      <tr>
                        <td>恆暉內湖區舊宗段工業科技</td>                 
                      </tr>
                         
                    </tbody>
                  </table>
                  <span class="left_container_arrow"></span>
                </div>
                <div class="text_box_date_right">97年度 / 2008</div>
            </div>
            <div class="timeline_container right_container">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>金門牛隻屠宰場	</td>
                        <td>	越南台塑重工</td>
                      </tr>
                      <tr>
                        <td>中龍鋼鐵  </td>
                        <td>明台產物</td>
                      </tr>
                      <tr>
                        <td>中國鋼鐵</td>
                        <td>彰化嘉生農場養菇園</td>
                      </tr>
                      <tr>
                        <td>衫林溪大飯店</td>
                        <td>劍潭青年活動中心</td>
                      </tr>
                      <tr>
                        <td>板橋車站	</td>
                        <td>欣欣養菌園</td>
                      </tr>
                      <tr>
                        <td>越南富士康</td>
                        <td>	台化仁澤耐隆聚合廠</td>
                      </tr>
                      <tr>
                        <td>高雄台灣三井一期工程	</td>
                        <td>台北市交九轉運站</td>
                      </tr>
                      <tr>
                        <td>台中元隆養菌場</td>
                        <td>華膳空廚</td>
                      </tr>
                        
                    </tbody>
                  </table>
                  <span class="right_container_arrow"></span>
                </div>
                <div class="text_box_date_left">98年度 / 2009</div>
            </div>
            <div class="timeline_container left_container">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>台灣大哥大	</td>
                        <td>	花蓮藍天旅館</td>
                      </tr>
                      <tr>
                        <td>台北市大湖國小  </td>
                        <td>台北國賓大飯店</td>
                      </tr>
                      <tr>
                        <td>中國鋼鐵</td>
                        <td>彰化嘉生農場養菇園</td>
                      </tr>
                      <tr>
                        <td>衫林溪大飯店</td>
                        <td>劍潭青年活動中心</td>
                      </tr>
                      <tr>
                        <td>板橋車站	</td>
                        <td>欣欣養菌園</td>
                      </tr>
                      <tr>
                        <td>越南富士康</td>
                        <td>	台化仁澤耐隆聚合廠</td>
                      </tr>
                      <tr>
                        <td>高雄台灣三井一期工程	</td>
                        <td>台北市交九轉運站</td>
                      </tr>
                      <tr>
                        <td>台中元隆養菌場</td>
                        <td>華膳空廚</td>
                      </tr>
                        
                    </tbody>
                  </table>
                  <span class="left_container_arrow"></span>
                </div>
                <div class="text_box_date_right">99年度 / 2010</div>
            </div>

            <div class="timeline_container right_container" >
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>台灣大哥大	</td>
                        <td>	花蓮藍天旅館</td>
                      </tr>
                      <tr>
                        <td>台北市大湖國小  </td>
                        <td>台北國賓大飯店</td>
                      </tr>
                      <tr>
                        <td>中國鋼鐵</td>
                        <td>彰化嘉生農場養菇園</td>
                      </tr>
                      <tr>
                        <td>衫林溪大飯店</td>
                        <td>劍潭青年活動中心</td>
                      </tr>
                      <tr>
                        <td>板橋車站	</td>
                        <td>欣欣養菌園</td>
                      </tr>
                      <tr>
                        <td>越南富士康</td>
                        <td>	台化仁澤耐隆聚合廠</td>
                      </tr>
                      <tr>
                        <td>高雄台灣三井一期工程	</td>
                        <td>台北市交九轉運站</td>
                      </tr>
                      <tr>
                        <td>台中元隆養菌場</td>
                        <td>華膳空廚</td>
                      </tr>
                        
                    </tbody>
                  </table>
                  <span class="right_container_arrow"></span>
                </div>
                <div class="text_box_date_left">100年度 / 2011</div>
            </div>
            <div class="timeline_container left_container " >
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>台灣大哥大	</td>
                        <td>	花蓮藍天旅館</td>
                      </tr>
                      <tr>
                        <td>台北市大湖國小  </td>
                        <td>台北國賓大飯店</td>
                      </tr>
                      <tr>
                        <td>中國鋼鐵</td>
                        <td>彰化嘉生農場養菇園</td>
                      </tr>
                      <tr>
                        <td>衫林溪大飯店</td>
                        <td>劍潭青年活動中心</td>
                      </tr>
                      <tr>
                        <td>板橋車站	</td>
                        <td>欣欣養菌園</td>
                      </tr>
                      <tr>
                        <td>越南富士康</td>
                        <td>	台化仁澤耐隆聚合廠</td>
                      </tr>
                      <tr>
                        <td>高雄台灣三井一期工程	</td>
                        <td>台北市交九轉運站</td>
                      </tr>
                      <tr>
                        <td>台中元隆養菌場</td>
                        <td>華膳空廚</td>
                      </tr> 
                    </tbody>
                  </table>
                  <span class="left_container_arrow"></span>
                </div>
                <div class="text_box_date_right">101年度 / 2012</div>
            </div>
            <div class="timeline_container right_container">
                <i class="fa-regular fa-calendar-days"></i>
                <div class="text_box">
                  <table>
                    <tbody>
                      <tr>
                        <td>好市多股份有限公司/北高雄大順店</td>                     
                      </tr>    
                    </tbody>
                  </table>
                  <span class="right_container_arrow"></span>
                </div>
                <div class="text_box_date_left">108年度 / 2019</div>
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
