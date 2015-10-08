# yii2-jquery-eraser
```
https://github.com/boblemarin/jQuery.eraser
```

composer.json
---------
```json
"require": {
    "xj/yii2-jquery-eraser": "~1.0"
},
```

View
---------
```php
xj\eraser\EraserAsset::register($this);
```
```css
.eraser-container {
    position: relative;
    display: inline-block;
    width: 300px;
    height: 200px;
}
#sourceImage {
    position: absolute;
    top: 0px;
    left: 0px;
    z-index: 1;
    -webkit-box-shadow: 0px 0px 20px 0px #707070;
    -moz-box-shadow: 0px 0px 20px 0px #707070;
    box-shadow: 0px 0px 20px 0px #707070;
}
#coverImage {
    position: absolute;
    top: 0px;
    left: 0px;
    z-index: 2;
}
```
```html
<span class="eraser-container">
    <img id="sourceImage" src="/images/eraser/source-image.jpg"/>
    <img id="coverImage" src="/images/eraser/cover-image.jpg"/>
</span>
```
```js
$('#coverImage').eraser({
    completeRatio: 0.4,
    completeFunction: function(){
        var progress = $('#coverImage').eraser('progress');
        if (progress.toString() !== '1') {
            $('#coverImage').eraser('clear');
        }
    }
});
```