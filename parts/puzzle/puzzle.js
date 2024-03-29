//Javascript

var rand = Math.floor(Math.random() * 5);

var context = document.getElementById('puzzle').getContext('2d');

var img = new Image();
img.src = 'puzzle/' + rand + '.jpg';
img.addEventListener('load', drawTiles, false);

var boardSize = 480;
var tileCount = 3

var tileSize = boardSize / tileCount;

var clickLoc = new Object;
clickLoc.x = 0;
clickLoc.y = 0;

var emptyLoc = new Object;
emptyLoc.x = 0;
emptyLoc.y = 0;

var solved = false;

var boardParts;
setBoard();



document.getElementById('puzzle').onclick = function(e) {
	clickLoc.x = Math.floor((e.pageX - this.offsetLeft) / tileSize);
	clickLoc.y = Math.floor((e.pageY - this.offsetTop) / tileSize);
	if (distance(clickLoc.x, clickLoc.y, emptyLoc.x, emptyLoc.y) == 1) {
		slideTile(emptyLoc, clickLoc);
		drawTiles();
	}
	if (solved) {
		setTimeout(again(), 500);
	}
};

function again() {
    if (confirm("Congrats! You solved the puzzle. Press ok to try again.") == true) {
        location.reload();
    }
}

function setBoard() {
	boardParts = new Array(tileCount);
	for (var i = 0; i < tileCount; ++i) {
		boardParts[i] = new Array(tileCount);
		for (var j = 0; j < tileCount; ++j) {
			boardParts[i][j] = new Object;
			boardParts[i][j].x = (tileCount - 1) - i;
			boardParts[i][j].y = (tileCount - 1) - j;
		}
	}
	emptyLoc.x = boardParts[tileCount - 1][tileCount - 1].x;
	emptyLoc.y = boardParts[tileCount - 1][tileCount - 1].y;
	solved = false;
}

function drawTiles() {
	context.clearRect ( 0 , 0 , boardSize , boardSize );
	for (var i = 0; i < tileCount; ++i) {
		for (var j = 0; j < tileCount; ++j) {
			var x = boardParts[i][j].x;
			var y = boardParts[i][j].y;
			if(i != emptyLoc.x || j != emptyLoc.y || solved == true) {
				context.drawImage(img, x * tileSize, y * tileSize, tileSize, tileSize,
				i * tileSize, j * tileSize, tileSize, tileSize);
			}
		}
	}
}

function distance(x1, y1, x2, y2) {
	return Math.abs(x1 - x2) + Math.abs(y1 - y2);
}

function slideTile(toLoc, fromLoc) {
	if (!solved) {
		boardParts[toLoc.x][toLoc.y].x = boardParts[fromLoc.x][fromLoc.y].x;
		boardParts[toLoc.x][toLoc.y].y = boardParts[fromLoc.x][fromLoc.y].y;
		boardParts[fromLoc.x][fromLoc.y].x = tileCount - 1;
		boardParts[fromLoc.x][fromLoc.y].y = tileCount - 1;
		toLoc.x = fromLoc.x;
		toLoc.y = fromLoc.y;
		checkSolved();
	}
}

function checkSolved() {
	var flag = true;
	for (var i = 0; i < tileCount; ++i) {
		for (var j = 0; j < tileCount; ++j) {
			if (boardParts[i][j].x != i || boardParts[i][j].y != j) {
				flag = false;
			}
		}
	}
	solved = flag;
}