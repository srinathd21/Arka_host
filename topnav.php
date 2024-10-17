<style>
  .top_nav{
  background-color: black;
  color: white;
  display: flex;  
}
.top_nav div{
  margin-right: 10px;
  
}
.top_nav a{
  text-decoration: none;
  padding: 8px 10px; 
  display: inline-block;
  text-align: center;
  font-size: 18px;
  border-bottom: 5px solid black;
  color: white !important;
}
.top_nav a:hover{
  background-color: white;
  color: #000000 !important;
  border-bottom: 5px solid white;
  
}
@media screen and (max-width: 992px) {
    .top_nav{
      display: none;
    }
     
    }
</style>
<!--  Top nav-->
<div class="bg-black">
<div id="header" class="top_nav container">
    <div>
        <a id="top_nav_link" href="business.php">For Business</a>
    </div>

    <div>
        <a id="top_nav_link" href="index.php">For Training</a>
    </div>
</div>
</div>

<script>
  var page_title = document.querySelectorAll('title');
  var pg_title = page_title[0].textContent.slice(-8);
  console.log(page_title)

  var top_nav = document.querySelectorAll('#top_nav_link');
  console.log(top_nav)

  for(var i = 0; i < top_nav.length; i++){
      if(top_nav[i].textContent.slice(-8) == pg_title){
        top_nav[i].style.borderBottom = '5px solid white';
        
      }
  }
 
</script>