<?php 
/*
 This file is part of underConstruction.
 underConstruction is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.
 underConstruction is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
 You should have received a copy of the GNU General Public License
 along with underConstruction.  If not, see <http://www.gnu.org/licenses/>.
 */

function displayDefaultComingSoonPage()
{
    displayComingSoonPage(trim(get_bloginfo('title')).' is coming soon', get_bloginfo('url'), 'is coming soon!');
}

function displayComingSoonPage($title, $headerText, $bodyText)
{
    
?>
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <title>
    <?php echo $title; ?>
  </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/1.0.1/trianglify.min.js"></script>

  <script>
  (function() {
    document.addEventListener('DOMContentLoaded', function() {


    var pattern = Trianglify({
      cell_size: 75,
      variance: 0.35,
      seed: window.location.href,
      x_colors: ['D3D2C7', '#6EC0C5', '#133DC6'],
      y_colors: 'random',
      color_space: 'rgb',
      color_function: false,
      width: window.innerWidth,
      height: window.innerHeight,
      color_function: null
    });

    window.onresize = function(){ location.reload(); }
    window.resize = function(){ location.reload(); }
    document.body.appendChild(pattern.canvas());
    });
  }());
  </script>

</head>

<body>
   <div class='center'>
      <h1><?php echo $headerText ?></h1>
      <h2><?php echo $bodyText ?></h2>

      <p>Made possible by</p>
      <a href='https://thewebsiteengineer.com' target='_blank' title="Website Design & Development in Cape Town">
          <div id="webeng">
              <h1>The Website Engineer</h1>
          </div>
      </a>
      
  </div>

  <style>
    body{
      margin: 0;
  }
    .fullscreenDiv {
      background-color: #e8e8e8;
      width: 100%;
      height: auto;
      bottom: 0px;
      top: 0px;
      left: 0;
      position: absolute;
    }

    h1 {
      color: #ffffff;
      font-family: 'Raleway',sans-serif;
      font-size: 2em;

      /*margin: 0 0 24px;*/
      /*text-shadow: 1px 1px 0 #333, 1px -1px 0 #333, -1px 1px 0 #333, -1px -1px 0 #333;*/
    }      

    h2 {
      color: #ffffff;
      font-family: 'Raleway',sans-serif;
      font-size: 3em;
      /*margin: 0 0 24px;*/
      text-transform: lowercase;
      /*text-shadow: 1px 1px 0 #333, 1px -1px 0 #333, -1px 1px 0 #333, -1px -1px 0 #333;*/
    }
    p {
      color: #ffffff;
      font-family: 'Raleway',sans-serif;
    }    

    #webeng h1 {
      color: #ffffff;
      font-family: 'Source Sans Pro',sans-serif;
      font-size: 2em;
      text-transform: uppercase;
      margin: 0px;
      line-height: 1em;
      padding: 0px 5px;      
      /*margin: 0 0 24px;*/
      /*text-shadow: 1px 1px 0 #333, 1px -1px 0 #333, -1px 1px 0 #333, -1px -1px 0 #333;*/
    }
    #webeng {
      border: 2px solid #fff;
      display: inline-block;
    }  

    .center {
      text-align: center;
      position: absolute;
      width:100%;
      top: 40vh;
    }
    canvas{
      min-width: 100% !important;
      min-height: 100% !important;
    }
      @media only screen and (max-width: 400px) { h1 { font-size: 0.75em; } }
      @media only screen and (max-width: 800px) { h1 { font-size: 2em; } }
      @media only screen and (max-width: 400px) { h2 { font-size: 0.75em; } }
      @media only screen and (max-width: 800px) { h2 { font-size: 2em; } }
  </style>
</body>

</html>

<?php 
}
/* EOF */
?>
