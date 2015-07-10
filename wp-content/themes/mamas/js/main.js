/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('#main-nav > ul').dropotron({
// Parent jQuery object.
selectorParent: null,

// Base Z-Index.
baseZIndex: 1000,

// <a href="http://www.jqueryscript.net/menu/">Menu</a> class (assigned to every <ul>).
menuClass: 'dropotron',

// Expansion mode ("hover" or "click").
expandMode: 'hover',

// Hover delay (in ms).
hoverDelay: 150,

// Hide delay (in ms; 0 disables).
hideDelay: 250,

// Opener class.
openerClass: 'opener',

// Active opener class.
openerActiveClass: 'active',

// Submenu class prefix.
submenuClassPrefix: 'level-',

// Menu mode ("instant", "fade", "slide", "zoom").
mode: 'fade',

// Menu speed ("fast", "slow", or ms).
speed: 'fast',

// Easing mode ("swing", "linear").
easing: 'swing',

// Alignment ("left", "center", "right").
alignment: 'left',

// Submenu offset X.
offsetX: 0,

// Submenu offset Y.
offsetY: 0,

// Global offset Y.
globalOffsetY: 0,

// IE Offset X.
IEOffsetX: 0,

// IE Offset Y.
IEOffsetY: 0,

// If true and mode = "fade", prevents top-level opener fade.
noOpenerFade: true,

// Detach second level menus (prevents parent style bleed).
detach: true,

// If true and detach = true, leave original menu intact.
cloneOnDetach: true   

});


