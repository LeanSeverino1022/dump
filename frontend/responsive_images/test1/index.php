  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Images</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/picturefill.min.js" async ></script>
  </head>
  <style>
  img { height: auto; }
  </style>
  <body>
    
    <div class="wrapper">

      <img
        srcset="img/2560x396.jpg 2560w, 
                img/1366x396.png 1366w, 
                img/800x195.jpg 800w" 
  
        src ="img/Homepage.png" 
        alt ="some image"
        class ="banner-image"
      />
      
      <div class="content-block">
        
        <<!-- div class="profile-description">

          <div class="profile-image">
            <img
              srcset="img/photo-@2x,jpg 2x, 
                      img/photo-@1x.jpg 1x"

              src="img/photo-@1x.jpg" /* leave it here for legacy browsers in case polyfill fails */
              alt="Photograph of a flower"

            /> 
 


          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas posuere nec quam vitae aliquet. Etiam sodales feugiat gravida. Donec tincidunt facilisis arcu, ut sagittis eros iaculis a. Nam fringilla erat id lorem pellentesque ornare. Curabitur sed interdum tellus. Etiam imperdiet, dui id condimentum ullamcorper, lectus nibh venenatis lectus, id ullamcorper nibh nibh id dolor. Suspendisse tempor turpis vel commodo consequat. Phasellus at posuere velit. Sed vehicula lacinia mauris sit amet mollis. Etiam semper leo blandit massa molestie congue. Sed ac purus ipsum.</p>
          <p>Integer dignissim ultrices lacus tincidunt aliquet. Cras maximus eleifend felis. Pellentesque in nulla condimentum, aliquet orci sed, gravida velit. Pellentesque mattis ex at magna consectetur porta. Aenean eget volutpat urna. Maecenas sed nisl sit amet tortor vulputate vulputate non nec elit. Mauris bibendum erat nec purus finibus, eget molestie dolor placerat. Pellentesque at massa et ligula sagittis gravida. Nunc libero dolor, luctus ac imperdiet ac, suscipit nec nibh. Ut non diam urna.</p>
          <p>Cras blandit at urna sagittis consequat. Integer tristique mollis metus, at varius leo imperdiet vitae. Donec a porta tellus. Sed sit amet euismod urna. Vestibulum varius urna vitae odio eleifend, et consectetur felis congue. Sed vulputate mattis mauris, eget euismod ante condimentum nec. Integer augue ex, pharetra vitae rutrum a, tristique vitae mauris.</p>
        </div> -->
        
      </div>
        
    </div>
    
    
  </body>
</html>
