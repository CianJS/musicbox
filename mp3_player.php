<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.js"></script>

<script type="text/javascript">
$(window).load(function(){
var audio;
var playlist;
var tracks;
var current;
init();

function init(){
    current = 0;
    audio = $('audio');
    playlist = $('#playlist');
    tracks = playlist.find('span a');
    len = tracks.length - 0;   
    audio[0].volume = 1.0;
    playlist.find('a').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended',function(e){
        current++;
        if(current == len){
            current = 0;
            link = playlist.find('a')[0];
        }else{
            link = playlist.find('a')[current];    
        }
        run($(link),audio[0]);
    });

}
function run(link, player){
        player.src = link.attr('href');
        par = link.parent();
        par.addClass('active').siblings().removeClass('active');
        audio[0].load();
        audio[0].play();    
}
});
</script>
<style type="text/css">
audio{
    background: repeat-x 0 -80px;
    width: 100%;
    height: 40px;
    position: relative;
    font: normal 13px Arial, sans-serif;
    margin-bottom: 24px;
}
</style>
<link rel="stylesheet" type="text/css" href="css/boostrap.re-adjust.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>
<body>

    <?php
    require("music/Vocaloid/Miku/Miku.php");
    ?>

    <?php
    require("music/Vocaloid/Luka/Luka.php");
    ?>

    <?php
    require("music/Ani/Etc/ET.php");
    ?>

</body>
</html>