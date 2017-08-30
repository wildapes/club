<style type="text/css">

  a.hovertext {
    position: relative;
    width: 500px;
    text-align: center;
  }
  a.hovertext::after {
position: absolute;
    left: 0;
    bottom: 0;
    padding: 0.5em 20px;
    width: 460px;
    background: rgba(0,0,0,0.1);
    text-decoration: none !important;
    color: #000000;
	content: attr(title);
    opacity: 1.0;
   }
  

</style>

<p><a class = "hovertext" href="#" title="The title attribute of the link appears over the image on hover" ></a>
 <a ><img src="/images/css_textoverimage.jpg" width="500" height="309" border="0" alt=""></a></p>