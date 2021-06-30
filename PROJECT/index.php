<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>First Project</title>
    
   
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .Home{
   background-color: black;
   width: 100%;
   height:610px;
   overflow: hidden;
   z-index: -1;
    }
 h2{
     color: white;
     position: relative;
     left:27%;
     top:25%;
     font-size:50px;
     font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
     letter-spacing:2px;
 }
 .home_hello{
      color:white;
      font-size:20px;
      font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans',
      'Helvetica Neue', sans-serif;
     font-weight: bold;
     position: relative;
     left: 45%;
     top:18%;
  }
  .description{
      color:rgb(173, 165, 165);
      font-family: Arial, Helvetica, sans-serif;
      font-weight:400;
      position: relative;
      left:2%;
      top:20%;
  }
  .description_text1{
      position: relative;
      left:23%;
      top:100px;
  }
  .description_text2{
     position: relative;
     left:30%;
     top:110px;
  }
  .description_text3{
      position: relative;
      left:38%;
      top:120px;
  }
  .home_login{
    color:black;
    height:36px;
    width:170px;
    background-color:white ;
   border-radius:17.5px;
   border: none;
   position:relative;
   font-family: Arial, Helvetica, sans-serif;
   text-align: center;
   left:35%;
   top:50%;
   font-weight:bold;
   font-size: 15px;
   }
   .home_register{
     color:white;
     height: 37px;
     width: 170px;
     background-color: transparent;
     border-radius: 17.5px;
     border:1.5px solid white;
     left:40%;
     top:50%;
     position: relative;
     font-weight: bold;
   }
   .Box div{
     position: absolute;
     width: 60px;
     height: 60px;
     background-color: transparent;
     border:4px solid white;
     color:white;
    }
    .Box div:nth-child(1){
     top:12%;
     left:39%;
     animation:animate 10s linear infinite;
     border-color: teal;
 }
 .Box div:nth-child(2){
     top:70%;
     left:50%;
     animation: animate 7s linear infinite;
     border-color: violet;
 }
 .Box div:nth-child(3){
 top:17%;
 left:6%;
 animation: animate 9s linear infinite;
 border-color: yellow;
 }
 .Box div:nth-child(4){
 top:20%;
 left:60%;
 animation: animate 10s linear infinite;
 border-color: salmon;
 }
 .Box div:nth-child(5){
    top:67%;
    left:10%;
    animation: animate 6s linear infinite;
    border-color: steelblue;
 }
 .Box div:nth-child(6){
     top:80%;
      left:70%;
     animation: animate 12s linear infinite;
     border-color: tomato;
  }
  .Box div:nth-child(7){
      top:60%;
      left:80%;
      animation: animate 12s linear infinite;
      border-color: yellowgreen;
   }
   .Box div:nth-child(8){
      top:48%;
      left:25%;
      animation: animate 16s linear infinite;
      border-color:slategray;
   }
   .Box div:nth-child(9){
      top:88%;
      left:25%;
      animation: animate 9s linear infinite;
      border-color:rgb(60, 54, 92) ;
   }
   .Box div:nth-child(10){
      top:20%;
      left:80%;
      animation: animate 5s linear infinite;
      border-color: rgb(30, 45, 56);
  }
  .Box div:nth-child(11){
      top:37%;
      left:90%;
      animation: animate 6s linear infinite;
      border-color: rgb(6, 173, 123);
  }
  .Box div:nth-child(12)
  {
      top:90%;
      left:87%;
      animation: animate 10s linear infinite;
      border-color: rgb(73, 44, 44);
  }
  .Box div:nth-child(13){
      top:85%;
      left:1%;
      animation: animate 5s linear infinite;
      border-color: rgb(85, 37, 85);
  }
  .Box div:nth-child(14){
      top:90%;
      left: 50%;
      animation: animate 5s linear infinite ;
      border-color: midnightblue;
  }
  @keyframes animate {
      0%{
           transform: scale(0) translateY(0) rotate(0);
           opacity: 1;
      }
      100%{
          transform: scale(1.3) translateY(-100px) rotate(360deg);
          opacity: 0;
      }
  }
  @media screen and (max-width:600px) {
        .home_hello{
        font-size:12px;
          position: relative;
          left:40%;
          top:18%;
        }
        .Home{
        background-color: black;
           width: 100%;
        height:500px;
         overflow: hidden;
  }
        h2{
        color: white;
        position: relative;
        left:11%;
         top:22%;
        font-size:22px;
        letter-spacing:1px;
        }
        .description{
           color:rgb(173, 165, 165);
           font-family: Arial, Helvetica, sans-serif;
           
           font-size:10px;
           position: relative;
           left:-10%;
           top:10%;
          }
          .description_text1{
             position: relative;
             left:14%;
             top:100px;
          }
         .description_text2{
            position: relative;
            left:15%;
            top:110px;
         }
        .description_text3{
           position: relative;
           left:28%;
          top:120px;
        }
        .home_login{
           color:black;
           height: 26px;
           width:150px;
           background-color:white ;
           border-radius:17.5px;
           border: none;
           position:absolute;
           font-family: Arial, Helvetica, sans-serif;
            text-align: center;
           left:27%;
           top:68%;
           font-weight:bold;
           font-size: 15px;
        }
           .home_register{
               color:white;
               height: 27px;
               width: 150px;
                background-color: transparent;
               border-radius: 17.5px;
               border:1.5px solid white;
               left:27%;
               top:80%;
                position:absolute;
               font-weight: normal;
        }
     }    
  .all{
			background-color:white;
			position:fixed;
			width:100%;
			height:8%;
		}
  .wrapper{
  overflow: hidden;
  height:620px;
  width: 100%;
  position: absolute;
  background-color: rgb(12, 44, 71);
  z-index: -1;
 }
 .wrapper_circle{
   height:150px;
   width:150px;
   border:3px solid rgb(9, 177, 126);
   border-radius: 50%;
   position: relative;
   left:44%;
   top:40px;
  border-style: double;
 }
 .wrapper_visitors{
 position: relative;
 
 top:45px;
 font-size:50px;
 text-align: center;
 color: white;
 font-weight: 1000;
 }

 .wrapper_visitors p{
  color: white;



 }
 .span_dear{
   font-size:20px ;
   font-family:arial;
   color:blck;
   position: relative;
   left:27%;
   top:-60px;
   color: rgb(117, 192, 206);
 }
 span .wrapper_text{
    font-size:25px;
    font-family:  Arial, sans-serif;
    position: relative;
    left:29%;
    top:50px;
    font-weight:500;
    color:rgb(9, 177, 126);
 }
 .personal{
   color:#ffffff;
   font-size: 40px;
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
   position: relative;
   left:70%;
   top:8%;
 }
 .effective{
  color:#ffffff;
  font-size: 40px;
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
   position: relative;
  left:40%;
  top:0px;
 }
 .simple{
 color:#ffffff;
  font-size: 40px;
 font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
 position: relative;
 left:15%;
 top:-49px;
}
.want{
   font-size: 20px;
   font-family: arial;
   color:rgb(145, 181, 187);
   position: relative;
   left:37%;
   top:-80px;
 }
 .span_dear{
   font-size:20px ;
   font-family:arial;
   color:blck;
   position: relative;
   left:29%;
   top:-50px;
   color: rgb(9, 177, 126);
 }
 .wrapper_keep{
  font-size:20px ;
  font-family:arial ;
    color:blck;
   position: relative;
  left:34%;
  top:-5%;
  color:rgb(9, 177, 126);
 }
 .wrapper_icons i{
   position: absolute;
   font-size: 30px;
   opacity: 0.5;
   color:rgb(33, 69, 94)/*rgb(17, 42, 71)*/;
   text-shadow:0.1px 0.1px 0.1px teal;
 }
 .wrapper_icons i:nth-child(1){
  top:12%;
  left:39%;
 }
 .wrapper_icons i:nth-child(2)
 {
   top:20%;
   left:70%;
 }
 .wrapper_icons i:nth-child(3)
 {
   top:60%;
   left:30%;
 }
 .wrapper_icons i:nth-child(4){
   top:80%;
   left:80%;
 }
 .wrapper_icons i:nth-child(5)
 {
   top:50%;
   left:90%;
 }
 .wrapper_icons i:nth-child(6)
 {
   top:20%;
   left:30%;
 }
 .wrapper_icons i:nth-child(7)
 {
   top:90%;
   left:5%;
 }
 .wrapper_icons i:nth-child(8)
 {
   top:40%;
   left:20%;
 }
 .wrapper_icons i:nth-child(9){
   top:60%;
   left:70%;
 }
 .wrapper_icons i:nth-child(10){
   top:70%;
   left:15%;
 }
 .wrapper_icons i:nth-child(11){
   top:10%;
   left:85%;
 }
 .wrapper_icons i:nth-child(12){
   top:50%;
   left:60%;
 }
 .wrapper_icons i:nth-child(13){
   top:20%;
   left:10%;
 }
 .wrapper_icons i:nth-child(14){
   top:30%;
   left:80%;
 }
 .wrapper_icons i:nth-child(15)
 {
   top:60%;
   left:50%;
 }
 .wrapper_icons i:nth-child(16)
 {
   top:80%;
   left:30%;
 }
 .wrapper_icons i:nth-child(17)
{
  top:90%;
  left:40%;
}
.wrapper_icons i:nth-child(18)
{
  top:60%;
  left:5%;
}
.wrapper_icons i:nth-child(19)
{
  top:7%;
  left:5%;
}
.wrapper_icons i:nth-child(20)
{
  top:5%;
  left:20%;
}
.wrapper_icons i:nth-child(21)
{
  top:2%;
  left:60%;
}
.wrapper_icons i:nth-child(22)
{
  top:35%;
  left:4%;
}
.wrapper_icons i:nth-child(23)
{
  top:30%;
  left:95%;
}
.wrapper_icons i:nth-child(24)
{
  top:90%;
  left:95%;
}
.wrapper_icons i:nth-child(25)
{
  top:95%;
  left:20%;
}
.wrapper_icons i:nth-child(26)
{
  top:70%;
  left:87%;
}
.wrapper_icons i:nth-child(27)
{
  top:4%;
  left:78%;
}
.wrapper_icons i:nth-child(28)
{
  top:92%;
  left:67%;
}
.wrapper_icons i:nth-child(29)
{
  top:30%;
  left:60%;
}
.wrapper_icons i:nth-child(30)
{
  top:78%;
  left:58%;
}
.wrapper_icons i:nth-child(31)
{
  top:47%;
  left:38%;
}
.wrapper_icons i:nth-child(32)
{
  left:28%;
}
.wrapper_icons i:nth-child(33)
{
  left:10%;
  top:47%;
}
.wrapper_icons i:nth-child(34)
{
  top:78%;
}
 .wrapper_hedding{
   position: relative;
   top:60px;
 }
 .wrapper_text_dear{
   font-weight: bold;
   font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   font-size:30px;
 }
 .friends{
     position: relative;
     top:30%;
 }
 .content{
     width: 100%;
     height: 610px;
      background:linear-gradient(to top right ,#006666 0%,#ffffcc 100%);
     position:absolute;
     top:204%;
     overflow: hidden;
     z-index: -1;
 }
 img{
   border-radius:50%;
   display: float;
   border: 4px solid gray;
   padding-left: 20px;
   position: relative;
   top:5%;
 }
 .content_image{
   position: relative;
   left:35%;
 }
 .content_img1{
  position: relative;
  left:22%;
 }
 .content_img{
   position: relative;
   left:10%;
 }
 .content_memories{
   position: relative;
   font-size:23px;
   font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
   font-weight:bold;
   color: #ffffff;
   top:7%;
   left:76%;
   letter-spacing: 1px;
 }
 .image_happiness{
  position: relative;
 font-size:23px;
 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
 font-weight:bold;
 color: #ffffff;
 letter-spacing: 1px;
 top:3%;
 left:45%;
 }
 .image_selflove{
  position: relative;
font-size:23px;
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-weight:bold;
color: #ffffff;
letter-spacing: 1px;
top:-1.8%;
left:13%;
 }
 .content_stories{
   position: relative;
   font-size: 28px;
   text-align: center;
   top:5%;
   font-family: Verdana, Geneva, Tahoma, sans-serif;
   color:black;
   font-weight:normal;
   text-shadow: 2px 2px 8px wheat;
   letter-spacing: 1px;
 }
 .content_use{
   position: relative;
   font-size:24px;
   top:17%;
   left:2%;
   font-weight: 550;
   font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   color: black;
 }
 				
    .header
     {
      	height:10%;
	      width:100%;
			   position:absolute;
			   margin-top:0.2%;
			   float:left;
			   position:fixed;
         font-family: Arial, Helvetica, sans-serif;
			 }
			.header ul{
				list-style-type:none;
				position:fixed;
				width:100%;
				height:10%;
				margin:1% 0% 0% 70%;	
			}
		.header ul a{
			text-decoration:none;
			display:inline;
			padding:1%;
			color:black;
		}
			 .header ul li
      {
				display:inline;
				padding-top:13%;
				margin:0% 0 0 2.5%;
			}
			.header ul li a:hover{
				background-color:#ccccff;
			}
			.logo img{
			
				position:relative;
				margin-top:4px;
				margin-left:1%;
				float:left;
			}
			#home{
				padding-top:3.7%;
			}
      .header_logo ,.footer_logo{
        border: none;
      }
      .footer{
		width:100%;
		height:50%;
		background-color:black;
    position: absolute;
    top:301%;
    overflow: hidden;
	   }
      
				   .dear img{
				   width:25%;
				   height:95%;
					margin-top:-1px;
					padding-top:17px;
				   }
				   .repeat ul li a{
				   list-style-type:none;
				   text-decoration:none;
				   padding-top:20%;
				   }
				   .repeat ul{
				  
				   position: relative;
           left:35%;
           top:-100px;
           line-height:40px;
				   list-style-type: none;
				   }
				   .home{
					color:lightgray;
					font-size:18px;
					font-family:"arial";
				   }
				   .about{
					color:lightgray;
					font-size:18px;
					font-family:"arial";
				   }
				   .contact{
					color:lightgray;
					font-size:18px;
					font-family:"arial";
				   }
				   .list{
            position: relative;
				   left:14%;
           top:-5%;
				   }
           .h5{
	font-family:"Verdana",Sans-serif;
	 font-size:15px;
	 color:lightgray;
	 margin:3% 6% 0% 43%;
 }
 .list ul{
    display:block;
	  font-family:"Verdana",Sans-serif;
	  font-size:15px;
	  list-style-type:none;
	  text-decoration:none;
	  color:lightgray;
	  margin:0% 6% 0% 43%;
  }
        .social{
           	margin:-13% 20% 2% 26%;
          	padding-left:30%;
          	color:#996633;
      }
 .social ul li{
	display:inline;
  margin-left: 5px;
	
	}
  .social a{
    color: #bdb3a7;
  }
  .social ul li:hover{
    border-radius:40%;
    background-color:#ffffff;

  }
  .social a:hover{
    padding: 10px;
    color:blue;
  }
 .feedback{
	margin-top:-15.5%;
	margin-left:80%
 }
				   .p1{
				    font-size:28px;
					font-family:"lucida handwriting",cursive;
					color:lightgray;
				   }
					
				   .submit{
				   width:30%;
				   height:9%;
				   margin-left:14%;
				   margin-top:1%;
				   border:1px solid gray;
				   background-color:gray;
				   color:white;
				 
				   }
				   .area{
					width:60%;
					height:40%;
				   }
           .feedback_content{
             position: relative;
             top:-35%;
           }
           .links{
             color:ghostwhite;
             position: relative;
             font-size: 22px;
             font-family: Georgia, 'Times New Roman', Times, serif;
             left:36%;
             top:-35%;
             letter-spacing: 1.5px;
           }
				 @media screen and (max-width:600px){
                   
                   .logo img{
                   			position:relative;
							margin-top:1px;
							margin-left:4%;
							float:left;
                   }
				  .all{
						height:6.2%;
				   }
				   .header{
			   height:8%;
			   width:100%;
			   position:absolute;
			   margin-top:0.2%;
			   float:left;
			   position:fixed;
			  }
					
				   .all .logo img{
					width:10%;
					height:89%;
				   }
                   .header ul{
				list-style-type:none;
				position:fixed;
				width:100%;
				height:10%;
				margin:4% 0% 0% 25%;	
			}
			.header ul a{
			text-decoration:none;
			display:inline;
			padding:1%;
			color:black;
			}
			 .header ul li{
				display:inline;
				padding-top:13%;
				margin:0% 5% 0 2.5%;
			}
            .header ul li a:hover{
				background-color:#ccccff;
			}    
            .footer{
					width:100%;
					height:auto;
					background-color:black;
				
				   }
				   .dear img{
				   width:72%;
				   height:60%;
           position: relative;
           top:10px;
				   }
				   .repeat ul li a{
				   list-style-type:none;
				   text-decoration:none;
				   }
           .repeat ul{
  
          position: relative;
          left:35%;
         top:15px;
         line-height:15px;
         list-style-type: none;
            }
           .feedback_content{
             position: relative;
             top:-20%;
           }
				   .repeat ul li{
					padding-bottom:10%;
				   }
           .repeat{
             position: relative;
             top:10%
           }
				   .home{
					color:lightgray;
					font-size:18px;
					font-family:arial;
				   }
				   .about{
					color:lightgray;
					font-size:18px;
					font-family:arial;
				   }
				   .contact{
					color:lightgray;
					font-size:18px;
					font-family:arial;
				   }
				   .list{
				   padding-left:23%;
				   }
				   .h5{
					font-family:"Verdana",Sans-serif;
					 font-size:15px;
					 color:lightgray;
					 margin:6% 6% 0% 17.5%;
				   }
				   .list ul{
				      display:block;
					  font-family:"Verdana",Sans-serif;
					  font-size:15px;
					  list-style-type:none;
					  text-decoration:none;
					  color:lightgray;
					  margin:1% 6% 0% 17.5%;
				   }
				   .social{
					margin:4% 10% 2% 5%;
					padding-left:30%;
					
				   }
				   .social ul li{
					display:inline;
					padding-right:10%;
         
          
					}
				   .feedback{
				  
					margin-top:2%;
					margin-left:27%
					
				   }
				   .p1{
				    font-size:24px;
					font-family:"lucida handwriting",cursive;
					color:lightgray;
				   }
					
				   .text .submit{
				   width:25%;
				   height:4%;
				   margin-left:14%;
				   margin-top:1%;
				   margin-bottom:8%;
				   border:1px solid gray;
				   background-color:gray;
				   color:white;
				   font-size:14px;
				   }
				   .area{
					width:60%;
					height:7%;
				   }
            }
			.headprt{
			   
			
			}
			
</style>
<body> 

  <div class="all">
    <div class="logo"><img class="header_logo"src="https://drive.google.com/uc?id=1Zv8kDAwERxk2vrMGKC_qy_Us9pH1V9At" width="65" height="35"></div>
      <header class="header">
        <ul>	
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </header>
  </div>
  <!--=================================================-->
   <div  class="Home" id="home">
       
		<p class="home_hello">HEY THERE..!!</p>
	
        <h2 data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out-back">Welcome To "Dear Diary"</h2>
		
            <p data-aos="fade-right" data-aos-duration="3000"class="description">
                <span class="description_text1">Writing a diary is a great way to process your thoughts and 
                feelings.No matter how old you are,</span><br><span class="description_text2">what stage of life you're or what future
                plans are,a diary can help you </span><br><span class="description_text3"> keep track of your goals and your daily life.</span> 
            </p>
        
       <button data-aos="fade-down-right"  onclick="login()" class="home_login">LOGIN</button>
        <button data-aos="fade-down-left"  onclick="register()" class="home_register">REGISTER NOW</button>
        <div class="Box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

    </div>
    <!--====================================-->
    <div   class="wrapper" id="about">
        <div class="wrapper_icons">
            <i class="fas fa-book"></i>
            <i class="fas fa-book"></i>
            <i class="fas fa-book"></i>
            <i class="fas fa-book"></i>
            <i class="far fa-book-reader"></i>
            <i class="far fa-book-reader"></i>
            <i class="far fa-book-reader"></i>
            <i class="far fa-book-reader"></i>
            <i class="far fa-book-reader"></i>
            <i class="fas fa-book-open"></i>
            <i class="fas fa-book-open"></i>
            <i class="fas fa-book-open"></i>
            <i class="fas fa-book-open"></i>
            <i class="fas fa-book-open"></i>
            <i class="fas fa-book-user"></i>
            <i class="fas fa-book-user"></i>
            <i class="fas fa-book-user"></i>
            <i class="fas fa-book-user"></i>
            <i class="fas fa-book-user"></i>
            <i class="far fa-book-reader"></i>
            <i class="fas fa-book-open"></i>
            <i class="fas fa-book"></i>
            <i class="fas fa-book-user"></i>
            <i class="fas fa-book-spells"></i>
            <i class="fas fa-book-spells"></i>
            <i class="fas fa-book-spells"></i>
            <i class="fas fa-book-spells"></i>
            <i class="far fa-book-user"></i>
            <i class="far fa-book-user"></i>
            <i class="far fa-book-user"></i>
            <i class="fas fa-book-spells"></i>
            <i class="fas fa-book-spells"></i>
            <i class="far fa-book-user"></i>
            <i class="far fa-book-user"></i>
          </div>  
           <div data-aos="fade-down" data-aos-duration="2500" class="wrapper_circle">
              <p class="wrapper_visitors"><?php
              $sql="SELECT * FROM `diarypage`";
              $querry=mysqli_query($connector,$sql);
              $num=mysqli_num_rows($querry);
              echo $num;

              ?></p>
           </div>
           <span>
             <p data-aos="fade-down" data-aos-duration="2000"  class="wrapper_text">Number Of Moments Shared In <span class="wrapper_text_dear">"Dear Diary"</span></p>
           </span>
           <span class="wrapper_hedding">
           <p data-aos="slide-left" data-aos-duration="1300"  data-aos-easing="linear"class="personal">PERSONAL</p>
           <p data-aos="fade-down" data-aos-duration="1000"  data-aos-easing="linear"class="effective">EFFECTIVE</p>
           <p data-aos="slide-right" data-aos-duration="1300"  data-aos-easing="linear" class="simple">SIMPLE</p>
           </span> 
           <span class="friends">
           <p class="want">Want me to be your -SECRET FRIEND?</p>
           <p class="span_dear">"Dear Diary" is here to help!So,what are you guys waiting for??<p class="wrapper_keep">keep
              your Life Moments and Ideas always with you.</p></p>
           </span>   
    </div>
    <!--====================================================-->
    <div class="content">
      <img data-aos="slide-left" data-aos-duration="1000"  data-aos-easing="linear" class="content_img" src="https://static.parade.com/wp-content/uploads/2019/12/jessica-alba-removebg.png" alt="Self love" width="200" height="230">
      <img data-aos="fade-down" data-aos-duration="1000"  data-aos-easing="linear" class="content_img1"src="https://media.istockphoto.com/photos/multiethnic-parents-giving-children-piggyback-ride-picture-id1270066890?b=1&k=6&m=1270066890&s=170667a&w=0&h=x8Cheo6oo9Mf5ttVLb0FhCgK_b35NU9Z_QelWVftZyg="alt="Happiness" width="200" height="230">
      <img data-aos="slide-right" data-aos-duration="1000"  data-aos-easing="linear" class="content_image"src="https://media.istockphoto.com/photos/group-multiracial-people-having-fun-outdoor-happy-mixed-race-friends-picture-id1211345565?b=1&k=6&m=1211345565&s=170667a&w=0&h=E1hNSPHc7_H6R1ZtE_7nC9gzDMjrvcHB06RFqfP6M-c=" alt="Memories" width="200" height="230">
      <p data-aos="slide-left" data-aos-duration="1000"  data-aos-easing="linear" class="content_memories">MEMORIES</p>
      <p data-aos="fade-down" data-aos-duration="1000"  data-aos-easing="linear" class="image_happiness">HAPPINESS</p>
      <p data-aos="slide-right" data-aos-duration="1000"  data-aos-easing="linear"  class="image_selflove">SELF LOVE</p>
      <p class="content_stories">"DEAR DIARY" is a Unique place where people share their stories.<br><sub>-MAKE YOURSELF BETTER EVERYDAY!</br></sub></p>
      <p class="content_use">Use our Website and change your Life by adding Memories & Thoughts.<br>Each New day is blank page 
        in the diary of your Life.So, Start writing to make your Life a -MASTERPIECE.</br></p>
    </div>
    <!--==========================================-->
      <footer class="footer" id="contact">
        <div class="dear">
        <img class="footer_logo"src="https://drive.google.com/uc?id=1ZvYcxhWSUPCGX7Li0e8vt0aAeZA72Z8t">
        </div>
        <p class="links">LINKS</p>
        <div class="repeat">
      <ul>
        <li>
          <a href="#home"><div class="home">&#8594;HOME</div></a>
        </li>
        <li>
          <a href="#about"><div class="about">&#8594;ABOUT</div></a>
        </li>
        <li>
          <a href="#contact"><div class="contact">&#8594;CONTACT</div></a>
        </li>
      </ul>
      </div>
     <div class="feedback_content"> 
      <div class="social">
        <ul>
          <li>
            <a href=""><i class="fab fa-twitter bird"></i></a>
          </li>
          <li>
            <a href=""><i class="fab fa-facebook-f fb"></i></a>
          </li>
          <li>
            <a href=""><i class="fab fa-instagram insta"></i></a>
          </li>
          <li>
            <a href=""><i class="fab fa-linkedin-in link"></i></a>
          </li>
        </ul>
      </div>
      <div class="list">
        <h5 class="h5">DEVELOPED BY</h5>
          <ul>
            <li>B.Arun Pratap</li>
            <li>K.Dinesh Kumar</li>
            <li>S.Alekhya</li>
            <li>V.Ramya</li>
            <li>M.Yasaswini</li>
          </ul>
      </div>
      <div class="feedback">
        <p class="p1">Share your thoughts</p>
        <form class="text">
            <textarea class="area"></textarea>
            <br>
            <button class="submit">Submit</button>
        </form>
      </div>
    </div>  
    </footer>
	
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	 <script>
    AOS.init();
    function login(){
        window.location.assign("pro1login1.php");
        }
        function register(){
          window.location.assign("ProRegister.php");
        }
  </script>
</body>
</html>