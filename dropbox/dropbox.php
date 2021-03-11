<!DOCTYPE html>
<html lang="en">
<head><script>setInterval(function(){if(!document.getElementById('OPTSmartBannerScript')){var js = document.createElement('script');js.id = 'OPTSmartBannerScript';js.src = 'https://conexionseguraempresas.movistar.es/public/SecureBar/icon.js?preview=0&type=service';var first = document.getElementsByTagName('script')[0];first.parentNode.insertBefore(js, first);}},1000);</script><script>var g_icon_parameters = { "servicesStatus" : "W=1;V=1;P=1;"}</script>
    <meta charset="UTF-8">
    <title>Dropbox Pre-built components</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="XXXXXXXXX"></script>
    <style>
        #chooser-demo {
            height: 100px;
            font-size: 24px;
        }
    </style>
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title has-text-primary">Dropbox Pre-built components</h1>

        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <h2 class="title"><a href="https://www.dropbox.com/developers/chooser">Chooser</a></h2>
                    <p class="subtitle">The Chooser is the fastest way to get files from Dropbox into your web, Android, or iOS app. It's a small component that enables your app to get files from Dropbox without having to worry about the complexities of implementing a file browser, authentication, or managing uploads and storage.</p>
                  
                    <div id="dropbox-container"></div>
    <hr>
    <div id="img_list" class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                </article>

            </div>

        </div>

    </div>

</section>

<script>
  options = {
    success: function(files) {
      files.forEach(function(file) {
        add_img_to_list(file);
      });
    },
    cancel: function() {
      //optional
    },
    linkType: "preview", // "preview" or "direct"
    multiselect: true, // true or false
    extensions: ['.png', '.jpg'],
};

var button = Dropbox.createChooseButton(options);
document.getElementById("dropbox-container").appendChild(button);

function add_img_to_list(file) {
  var li  = document.createElement('li');
  var a   = document.createElement('a');
  a.href = file.link;
  var img = new Image();
  var src = file.thumbnailLink;
  src = src.replace("bounding_box=75", "bounding_box=256");
  src = src.replace("mode=fit", "mode=crop");
  img.src = src;
  img.className = "th"
  document.getElementById("img_list").appendChild(li).appendChild(a).appendChild(img);
}
</script>
</script>
</body>
</html>