let jsonResponse;
let request = new XMLHttpRequest();
let url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=2214346607.d54d852.5b3a7b51720d4a3b995b49c1aae6dd46';
let numPics = 6;
let bigImgArr = [];

request.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        jsonResponse = (request.responseText);
        let obj = JSON.parse(jsonResponse);
        let imagesObj = obj.data;
        console.log(imagesObj);
        let imageURL, picNum;
        $(document).ready(function() {
            for (let i = 0; i < numPics; i++) {
                imageURL = imagesObj[i].images.standard_resolution.url;
                bigImgArr.push(imageURL);
                imageCommentCount = imagesObj[i].comments.count;
                imageLikeCount = imagesObj[i].likes.count;
                picNum = i + 1;
                $('#' + picNum).css('background-image', 'url(' + imageURL + ')');
                $('#' + picNum + ' .likes').text(' ' + imageLikeCount);
                $('#' + picNum + ' .comments').text(' ' + imageCommentCount);
            }
            console.log(bigImgArr);
        })
    }
}

request.open("GET", url, true);
request.send();

var lightbox = $('.lightbox');
var content = $('.lightbox-content');
var tile = $('.insta-tile');
var exit = $('.exit');
var prev = $('.prev');
var next = $('.next');
var currImgX, prevX, nextX;

tile.on('click', function() {
    var id = $(this).attr('id');
    currImgX = id - 1;
    prevX = currImgX - 1;
    nextX = currImgX + 1;
    var img = bigImgArr[currImgX];
    lightbox.attr('data-state', 'visible');
    content.css('background-image', 'url(' + img + ')');
})

exit.on('click', function() {
    lightbox.attr('data-state', 'hide');
})

prev.on('click', function() {
    if (prevX < 0) {
        prevX = numPics - 1;
    }
    currImgX = prevX;
    var img = bigImgArr[currImgX];
    prevX = currImgX - 1;
    nextX = currImgX + 1;
    content.css('background-image', 'url(' + img + ')');
})

next.on('click', function() {
    if (nextX > numPics - 1) {
        nextX = 0;
    }
    currImgX = nextX;
    var img = bigImgArr[currImgX];
    prevX = currImgX - 1;
    nextX = currImgX + 1;
    content.css('background-image', 'url(' + img + ')');
})