<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <title>김정웅 지원서</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <center>
        <h1 id='head'>dot.Net</h1>
    </center>

    <div id="content">
        <h2>인적 사항</h2>
        <table>
            <tbody>
                <tr>
                    <td>이름</td>
                    <td>:
                    <td>김정웅</td>
                </tr>
                <tr>
                    <td>기수</td>
                    <td>:
                    <td>24기</td>
                </tr>
                <tr>
                    <td>학번</td>
                    <td>:
                    <td>191037</td>
                </tr>
                <tr>
                    <td>Gmail</td>
                    <td>:
                    <td>dk20040106@gmail.com</td>
                </tr>
            </tbody>
        </table>

        <div class="w3-row">
            <div class="w3-container w3-half">
                <h2>닷넷에 지원해주신 이유는 무엇입니까?</h2>
                <p>페이스북에 있는 민사고 그룹들과 기존의 큼온, 인트라넷 등의 기능을 통합한 시스템을 만들어서 학생들의 생활을 개선하기 위함입니다.</p>
            </div>
            <div class="w3-container w3-half">
                <h2>당신은 얼마나 컴퓨터와 친한가요?</h2>
                <p>중학교 3학년때 C언어를 접하면서 컴퓨터에 관심이 생겼습니다. 학교에서 배운 Java를 포함해서 Python, R, C, HTML, CSS, Swift, Kotlin, Javascript, C#등의 프로그래밍 언어를 접해보았습니다.</p>
                <p>1학기때는 다양한 것들을 해보는 것을 목표로 웹, 앱, 게임 개발, 머신러닝 등을 공부해 보았고 지금도 계속하고 있습니다.</p>
            </div>
        </div>
    </div>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.4.2/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

    <script>
      // Your web app's Firebase configuration
      var firebaseConfig = {
       apiKey: "AIzaSyBdiMB9sk-Fj7H_H66GP95E2hjlwWISepE",
        authDomain: "loginbasedwebapp.firebaseapp.com",
        databaseURL: "https://loginbasedwebapp.firebaseio.com",
        projectId: "loginbasedwebapp",
        storageBucket: "",
        messagingSenderId: "130207329293",
        appId: "1:130207329293:web:fff850a73b41c627"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
    </script>
  </body>
</html>
