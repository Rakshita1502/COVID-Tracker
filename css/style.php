<style media="screen">
html{
  scroll-behavior: smooth;
}
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Mulish', sans-serif;
}

.row{
  margin-left: 0!important;
  margin-right: 0!important;
}
.nav-style{
  background-color: #a29bfe !important;
}
.nav-style a{
  color: white;
}
/* main */
.main-header{
  height: 450px;
  width: 100%;
}
.rightside h1{
  font-size: 2rem;
  line-height: 3rem;
}
.corona-rot img{
  animation: gocorona 3s linear infinite;
}
@keyframes gocorona {
  0%{transform:rotate(0);}
  100%{transform:rotate(360deg);}
}
.leftside img{
  animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat {
  0%{transform:scale(0.75);}
  20%{transform:scale(1);}
  40%{transform:scale(0.75);}
  60%{transform: scale(1);}
  80%{transform: scale(0.75);}
  100%{transform: scale(1);}
}

/* corona-update */
.corona-update{
  margin: 0 0 30px 0;
}
.corona-update h3{
  color: #ff7677;
}
.corona-update h1{
  font-size: 2rem;
  text-align: center;
}
/* about section */
.sub-section{
  background-color: #fbfafd;
}

/* footer */
.footer-style{
  background-color: #434e52;
}
.footer-style p{
  margin-bottom: 0!important;
}

#myBtn{
  display: none;
  position: fixed;
  bottom: 30px;
  right: 40px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: #00A8FF;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 10px;
}
#myBtn:hover{
  background: #606060;

}

/* responsive */
@media(max-width:768px){
  .main-header{
    height: 700px;
    text-align: center;
  }
  .main-header h1{
    text-align: center;
    padding: 0;
    width: 100%;
    font-size: 30px;
  }

  .count-style{
    display: inline !important;
  }
  .count-style p{
    text-align: center;
  }
  .abt-res{
    margin-left: 0!important;
  }
  /* .leftside img{
    margin-bottom: 30px;
  } */
}
</style>
