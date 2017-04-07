<html>
	<head>
		<title>Music</title>
		<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="/css/upload1.css">
	<link rel="stylesheet" type="text/css" href="/css/upload2.css">
	<link rel="stylesheet" type="text/css" href="/css/boostrap.re-adjust.css" />
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
		<style type="text/css">
.uploadContainer {
    left: 50%;
    margin-top:16px; 
    margin-left: -112px;
    position: absolute;
    overflow: hidden;
}
.uploadContainer>input{
	cursor:pointer;
	font-size:30px;
	opacity:0;
	position:absolute;
}
		</style>
	</head>
	<body>
		<div id="content">
		<?php
 		require("./menu.html");
 		?>
		</div>

	<div class="uploadContainer">
        <input type="file" name="mediaFileInput[]" size="8" id="mediaFileInput" multiple="multiple">
        <button id="uploadMedia" class="primary">음악 업로드하기</button>
    </div>

    <div style="height:48px;"></div>

    <div class="songs container" style="width:960px; line-height: 16px; margin: 0 auto; border:1px gray solid;">
	<h2>Songs</h2>
	<ul id="songs" class="slats size_140">
		<li class="editForm" style="display: list-item;">
		<form class="mediaItemDetail" action="" data-mediareleaseuploadid="0" data-mediareleaseid="130302543" data-mediaid="114610855">

			<fieldset class="art song">
				<label>song cover image</label>
				<!-- images uploads -->
				<div class="images">
					<div class="thumb" style="background-image: url('https://x.myspacecdn.com/new/common/images/album.jpg');">
					</div>
				</div>
				<!-- images uploads button -->
				<div class="uploadContainer">
					<input type="file" name="covertArt" size="1">
					<button class="secondary uploadArt" data-original-title="">Upload image</button>
				</div>
				<!-- images uploads Size Notice List -->
				<p class="coverArtRestrictions">
					Minimum 600 X 600 px. Max 20MB.
				</p>
			</fieldset>

			<!-- Content -->
			<fieldset class="form">
				<fieldset class="info">

					<!-- Song Title -->
					<div class="fullRow">
						<label>song Title</label>
						<label class="limits"><span>66</span>/150</label>
						<input type="text" name="title" data-limit="150" value="Song Title" data-required="true">
					</div>

					<!-- Content -->
					<div class="fullRow">
						<label>Content</label>
						<label class="limits"><span>0</span>/1024</label>
						<textarea name="description" cols="30" rows="2" data-limit="1024"></textarea>
					</div>

					<!-- Classification -->
					<div class="newRow musicMedia ">
						<label>Classification</label>

							<select name="select">
   								<option value="" selected="selected">장르선택</option>
    							<option value="팝송">팝송</option>
    							<option value="동요">동요</option>
    							<option value="민요">민요</option>
    							<option value="KETC">K-pop</option>
    							<option value="HatsuneMiku">Hatsune Miku</option>
    							<option value="Rin&Ren">Rin & Ren</option>
    							<option value="MegurineLuka">Megurine Luka</option>
    							<option value="AniYuzukiYukari">Yuzuki Yukari</option>
    							<option value="하양복숭아">하양복숭아</option>
    							<option value="샨곰">샨곰</option>
    							<option value="노부나가">노부나가</option>
    							<option value="K우타이테">K-歌い手</option>
    							<option value="anime">アニメ</option>
    							<option value="dongbang">東方Project</option>
    							<option value="BGM">BGM</option>
    							<option value="Anietc">AniSong</option>
    							<option value="花たん">花たん</option>
    							<option value="れをる">れをる</option>
    							<option value="Kano">Kano</option>
    							<option value="j우타이테">J-歌い手</option>
							</select>
							
					</div>
				</fieldset>
			</fieldset>

			<!-- Cancel & Save -->
			<fieldset class="footer">
				<div>
					<div class="loading white">
					</div>
					<a href="#" data-action="cancel">Cancel</a>
					<button class="primary" data-action="saveMedia">Save</button>
				</div>
			</fieldset>
		</form>
		</li>
	</ul>
</div>
	</body>
</html>